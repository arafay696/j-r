<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class V1 extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        //$this->db->db_debug = false;

        // Allow from any origin
        if (isset($_SERVER['HTTP_ORIGIN'])) {
            // Decide if the origin in $_SERVER['HTTP_ORIGIN'] is one
            // you want to allow, and if so:
            header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
            header('Access-Control-Allow-Credentials: false');
            header('Access-Control-Max-Age: 86400');    // cache for 1 day

            header("Access-Control-Allow-Headers: Content-Type");    // cache for 1 day
            header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
        }

        // Access-Control headers are received during OPTIONS requests
        if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
            if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
                header("Access-Control-Allow-Methods: GET, POST,OPTIONS");
            if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
                header("Access-Control-Allow-Headers: {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");
            exit(0);
        }
    }

    ##---------------------- User API's ----------------------  ##

    // Get All Users
    public function users_get($id = '')
    {
        $where = '';
        $select = 'Id,firstName,lastName,email,isVerifiedEmail,gender,notification';
        $select .= ',isVerifiedPhoneNo,avatar,isVerifiedAvatar';
        $select .= ',status,dob,bio,address,postCode,city,country,userLevel';
        try {
            if (!empty($id)) {
                $where = 'Id = ' . $id;
            }

            $data = $this->common->selectData($select, TBL_USERS, $where, 'Id desc');
            if (!empty($id)) {
                $data = $data->row_array();
                if (count($data) <= 0) {
                    $this->response(returnResponse(false, [], 'user not found.'));
                }
            } else {
                $data = $data->result_array();
            }

            $this->response(returnResponse(true, $data, 'user listing'));
        } catch (\Exception $e) {
            $this->response(returnResponse(false, [], 'user listing empty.'));
        }
    }

    // Add/Save User
    public function user_post()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            $this->response(returnResponse(false, [], 'Invalid request type.'), 403);
        }

        try {
            $id = $this->post('Id');
            $data = $this->post();

            if (empty($id)) {
                $emailExist = $this->common->selectSingleRowWhere('email', TBL_USERS, 'email = "' . $this->post('email') . '"');
                if (count($emailExist) > 0) {
                    $this->response(returnResponse(false, [], "Email already exist."));
                }
            } else {
                $userExist = $this->common->selectSingleRowWhere('email', TBL_USERS, 'Id = "' . $this->post('Id') . '"');
                if (count($userExist) <= 0) {
                    $this->response(returnResponse(false, [], "User not found."));
                }
            }

            $data['password'] = md5($data['password']);
            $save = false;
            if (empty($id)) {
                $id = $save = $this->common->insertData(TBL_USERS, $data);

                $userPreferenceDefault = array(
                    array('userId' => $save, 'type' => 'Chattiness', 'value' => 0),
                    array('userId' => $save, 'type' => 'Smoking', 'value' => 0),
                    array('userId' => $save, 'type' => 'Pets', 'value' => 0),
                    array('userId' => $save, 'type' => 'Music', 'value' => 0)
                );
                $this->common->insertBatch(TBL_USER_PREFERENCE, $userPreferenceDefault);
            } else {
                $save = $this->common->updateData(TBL_USERS, $data, 'Id = ' . $id);
            }

            if ($save) {
                $select = 'Id,firstName,lastName,email,isVerifiedEmail,gender,notification';
                $select .= ',isVerifiedPhoneNo,avatar,isVerifiedAvatar';
                $select .= ',status,dob,bio,address,postCode,city,country,userLevel';
                $data = $this->common->selectData($select, TBL_USERS, 'Id = ' . $id, 'Id desc')->row_array();
                $this->response(returnResponse(true, $data, 'Great, user was saved successfully.'));
            } else {
                $this->response(returnResponse(false, [], "Umh, We can't save user right now"));
            }
        } catch (\Exception $e) {
            $this->response(returnResponse(false, [], "Umh, We can't save user right now"));
        }
    }

    // Delete User
    public function deleteUser_delete($id)
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'DELETE') {
            // The request is using the DELETE method
            return;
        }

        try {
            if (empty($id)) {
                $this->response(returnResponse(false, [], 'id required.'));
            }

            $userExist = $this->common->selectSingleRowWhere('email', TBL_USERS, 'Id = "' . $id . '"');
            if (count($userExist) <= 0) {
                $this->response(returnResponse(false, [], "User not found."));
            }

            if ($this->common->deleteData(TBL_USERS, array('Id' => $id))) {
                $this->response(returnResponse(true, [], 'User deleted successfully.'));
            } else {
                $this->response(returnResponse(false, [], "Umh, We can't delete user right now"));
            }

        } catch (\Exception $e) {
            $this->response(returnResponse(false, [], "Umh, We can't delete user right now"));
        }
    }


    ##---------------------- User Preferences API's ----------------------  ##

    // Get User Preference By Id
    public function userPreference_get($uid = '')
    {
        $where = '';
        $select = '*';
        try {
            if (!empty($uid)) {
                $where = 'userId = ' . $uid;
            }

            $userExist = $this->common->selectSingleRowWhere('email', TBL_USERS, 'Id = "' . $uid . '"');
            if (count($userExist) <= 0) {
                $this->response(returnResponse(false, [], "User not found."));
            }

            $data = $this->common->selectData($select, TBL_USER_PREFERENCE, $where, 'Id desc');
            $data = $data->result_array();

            $this->response(returnResponse(true, $data, 'user preference found.'));
        } catch (\Exception $e) {
            $this->response(returnResponse(false, [], 'user preference not found.'));
        }
    }

    // Add/Save User Preference
    public function userPreferences_post($userId)
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            $this->response(returnResponse(false, [], 'Invalid request type.'), 403);
        }

        try {
            $userExist = $this->common->selectSingleRowWhere('email', TBL_USERS, 'Id = "' . $userId . '"');
            if (count($userExist) <= 0) {
                $this->response(returnResponse(false, [], "User not found."));
            }

            $this->common->deleteData(TBL_USER_PREFERENCE, array('userId' => $userId));
            $save = $this->common->insertBatch(TBL_USER_PREFERENCE, $this->post());

            if ($save) {
                $this->response(returnResponse(true, [], 'Great, user preference was saved successfully.'));
            } else {
                $this->response(returnResponse(false, [], "Umh, We can't save user preference right now"));
            }
        } catch (\Exception $e) {
            $this->response(returnResponse(false, [], "Umh, We can't save user preference right now"));
        }
    }


    ##---------------------- User Vehicle API's ----------------------  ##

    // Get User Vehicles By User Id
    public function userVehicles_get($uid = '')
    {
        $where = '';
        $select = '*';
        try {
            if (!empty($uid)) {
                $where = 'userId = ' . $uid;
            }

            $userExist = $this->common->selectSingleRowWhere('email', TBL_USERS, 'Id = "' . $uid . '"');
            if (count($userExist) <= 0) {
                $this->response(returnResponse(false, [], "User not found."));
            }

            $data = $this->common->selectData($select, TBL_USER_VEHICLE, $where, 'Id desc');
            $data = $data->result_array();

            $this->response(returnResponse(true, $data, 'user vehicles found.'));
        } catch (\Exception $e) {
            $this->response(returnResponse(false, [], 'user vehicles not found.'));
        }
    }

    // Add/Save User Vehicle
    public function userVehicle_post()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            $this->response(returnResponse(false, [], 'Invalid request type.'), 403);
        }

        try {
            $userExist = $this->common->selectSingleRowWhere('email', TBL_USERS, 'Id = "' . $this->post('userId') . '"');
            if (count($userExist) <= 0) {
                $this->response(returnResponse(false, [], "User not found."));
            }

            if (empty($this->post('Id'))) {
                $save = $this->common->insertData(TBL_USER_VEHICLE, $this->post());
            } else {
                $save = $this->common->updateData(TBL_USER_VEHICLE, $this->post(), 'Id = ' . $this->post('Id'));
            }

            if ($save) {
                $data = $this->common->selectData('*', TBL_USER_VEHICLE, 'userId = ' . $this->post('userId'), 'Id desc')->result_array();
                $this->response(returnResponse(true, $data, 'Great, user vehicle was saved successfully.'));
            } else {
                $this->response(returnResponse(false, [], "Umh, We can't save user vehicle right now"));
            }
        } catch (\Exception $e) {
            $this->response(returnResponse(false, [], "Umh, We can't save user vehicle right now"));
        }
    }


    ##---------------------- User Rating API's ----------------------  ##
    // Get All Rides or By Id
    public function ratings_get($uid = '')
    {
        $where = '';
        $select = '*';
        try {
            if (!empty($uid)) {
                $where = 'userId = ' . $uid;
            }

            $data = $this->common->selectData($select, TBL_USER_RATING, $where, 'Id desc');
            $data = $data->result_array();

            $this->response(returnResponse(true, $data, 'user ratings found.'));
        } catch (\Exception $e) {
            $this->response(returnResponse(false, [], 'user ratings not found.'));
        }
    }

    private function getUserRating($uid = '')
    {
        if (empty($uid)) {
            return 1;
        }

        $where = 'userId = ' . $uid;
        $select = 'AVG(star) AS rating';

        $data = $this->common->selectData($select, TBL_USER_RATING, $where, '', 'userId')->row_array();
        return (count($data) > 0) ? $data['rating'] : 1;
    }

    // Get User Rating in Average
    public function getUserRatingAverage_get($uid = '')
    {
        try {
            if (empty($uid)) {
                $this->response(returnResponse(false, [], 'user id required.'));
            }

            $this->response(returnResponse(true, ['rating' => $this->getUserRating($uid)], 'user ratings found.'));
        } catch (\Exception $e) {
            $this->response(returnResponse(false, [], 'user ratings not found.'));
        }
    }

    // Add/Save User Rating
    public function newRating_post()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            $this->response(returnResponse(false, [], 'Invalid request type.'), 403);
        }

        try {
            $userExist = $this->common->selectSingleRowWhere('email', TBL_USERS, 'Id = "' . $this->post('userId') . '"');
            if (count($userExist) <= 0) {
                $this->response(returnResponse(false, [], "User not found."));
            }

            $Id = null;
            if (empty($this->post('Id'))) {
                $Id = $save = $this->common->insertData(TBL_USER_RATING, $this->post());
            } else {
                $Id = $this->post('Id');
                $save = $this->common->updateData(TBL_USER_RATING, $this->post(), 'Id = ' . $this->post('Id'));
            }
            if ($save) {
                $data = $this->common->selectData('*', TBL_USER_RATING, 'Id = ' . $Id, 'Id desc')->row_array();
                $this->response(returnResponse(true, $data, 'Great, user rating was saved successfully.'));
            } else {
                $this->response(returnResponse(false, [], "Umh, We can't save user rating right now"));
            }
        } catch (\Exception $e) {
            $this->response(returnResponse(false, [], "Umh, We can't save user rating right now"));
        }
    }

    ##---------------------- Ride API's ----------------------  ##

    // Get All Rides or By Id
    public function ride_get($id = '')
    {
        $where = '';
        $select = '*';
        try {
            if (!empty($id)) {
                $where = 'Id = ' . $id;
            }

            $data = $this->common->selectData($select, TBL_RIDE, $where, 'Id desc');
            $data = (!empty($id)) ? $data->row_array() : $data->result_array();

            $this->response(returnResponse(true, $data, 'rides found.'));
        } catch (\Exception $e) {
            $this->response(returnResponse(false, [], 'rides not found.'));
        }
    }

    // Add/Save Ride
    public function newRide_post()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            $this->response(returnResponse(false, [], 'Invalid request type.'), 403);
        }

        try {
            $userExist = $this->common->selectSingleRowWhere('email', TBL_USERS, 'Id = "' . $this->post('userId') . '"');
            if (count($userExist) <= 0) {
                $this->response(returnResponse(false, [], "User not found."));
            }

            $Id = null;
            if (empty($this->post('Id'))) {
                $Id = $save = $this->common->insertData(TBL_RIDE, $this->post());
            } else {
                $Id = $this->post('Id');
                $save = $this->common->updateData(TBL_RIDE, $this->post(), 'Id = ' . $this->post('Id'));
            }
            if ($save) {
                $data = $this->common->selectData('*', TBL_RIDE, 'Id = ' . $Id, 'Id desc')->row_array();
                $this->response(returnResponse(true, $data, 'Great, user vehicle was saved successfully.'));
            } else {
                $this->response(returnResponse(false, [], "Umh, We can't save user vehicle right now"));
            }
        } catch (\Exception $e) {
            $this->response(returnResponse(false, [], "Umh, We can't save user vehicle right now"));
        }
    }

    // Search Ride
    public function search_post()
    {
        try {
            $lat = $this->post('lat');
            $lng = $this->post('lng');

            $dropOffLat = $this->post('dropOffLat');
            $dropOffLng = $this->post('dropOffLng');

            /*if (!empty($lat) && !empty($lng)) {
                $where = 'lat LIKE "' . $lat . '%"';
                $where .= ' AND lng LIKE "' . $lng . '%"';
            }
            $where .= ' AND dropOffLat LIKE "' . $dropOffLat . '%"';
            $where .= ' AND dropOffLng LIKE "' . $dropOffLng . '%"';
            if (!empty($this->post('travelDate'))) {
                $where .= ' AND travelDate = "' . $this->post('travelDate') . '"';
            }
            $data = $this->common->selectData('*', TBL_RIDE, $where, 'travelDate desc');
            $data = (!empty($id)) ? $data->row_array() : $data->result_array();*/

            // Query
            $select = 'r.*,u.firstName,u.lastName,u.email,u.gender,u.phoneNo,u.avatar';
            $select .= ',u.avatar,u.status as userStatus,u.dob,u.bio,u.address,u.postCode';
            $select .= ',u.city,u.country,u.userLevel';
            $select .= ',uv.country as userVehicleCountry,uv.numberPlate,uv.makeOf';
            $select .= ',uv.model,uv.color,uv.yearRegistered,uv.photo';

            $this->db->select($select);
            $this->db->join(TBL_USERS . ' as u', 'u.Id = r.userId', 'inner');
            $this->db->join(TBL_USER_VEHICLE . ' as uv', 'uv.Id = r.carId', 'left');

            if (!empty($lat) && !empty($lng)) {
                $this->db->like('r.lat', $lat);
                $this->db->like('r.lng', $lng);
            }

            if (!empty($dropOffLat) && !empty($dropOffLng)) {
                $this->db->like('r.dropOffLat', $dropOffLat);
                $this->db->like('r.dropOffLng', $dropOffLng);
            }

            if (!empty($this->post('r.travelDate'))) {
                $this->db->where('r.travelDate', $this->post('travelDate'));
            }

            $this->db->where('r.status', 'Publish');
            $this->db->where('u.status', 'Active');
            $this->db->from(TBL_RIDE . ' as r');
            $data = $this->db->get();
            $data = (!empty($id)) ? $data->row_array() : $data->result_array();

            if (is_array($data) && count($data) > 0) {
                foreach ($data as $key => $rs) {
                    $data[$key]['rating'] = $this->getUserRating($rs['userId']);

                }
            }
            $this->response(returnResponse(true, $data, 'rides found.'));
        } catch (\Exception $e) {
            $this->response(returnResponse(false, [], 'rides not found.'));
        }
    }
}
