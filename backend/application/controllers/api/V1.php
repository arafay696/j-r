<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class V1 extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->db->db_debug = false;

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
            }else {
                $userExist = $this->common->selectSingleRowWhere('email', TBL_USERS, 'Id = "' . $this->post('Id') . '"');
                if (count($userExist) <= 0) {
                    $this->response(returnResponse(false, [], "User not found."));
                }
            }

            $save = false;
            if (empty($id)) {
                $save = $this->common->insertData(TBL_USERS, $data);
            } else {
                $save = $this->common->updateData(TBL_USERS, $data, 'Id = ' . $id);
            }

            if ($save) {
                $this->response(returnResponse(true, [], 'Great, user was saved successfully.'));
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


    ##---------------------- Ride API's ----------------------  ##
}
