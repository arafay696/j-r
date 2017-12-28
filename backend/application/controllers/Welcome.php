<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

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
                header("Access-Control-Allow-Headers:        {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");
            exit(0);
        }
    }

    public function index()
    {
        $this->load->view('welcome_message');
    }

    // Get All Users
    public function users()
    {
        echo json_encode(array(
            'status' => true,
            'data' => [
                [
                    'name' => 'Abdul Rafay'
                ],
                [
                    'name' => 'Farrukh Ahmed'
                ]
            ]
        ));
    }
}
