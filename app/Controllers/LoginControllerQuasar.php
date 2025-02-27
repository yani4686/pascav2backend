<?php

namespace App\Controllers;

use App\Models\LoginModel;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\Database\Config;

class LoginControllerQuasar extends ResourceController
{
    protected $modelName = 'App\Models\LoginModel';
    protected $format    = 'json';


    public function retloginAdminQuasar() {

        //belum cater untuk session sso lps login
        $session = \Config\Services::session();

        $db = Config::connect();

        $input = $this->request->getJSON();
       // error_log(json_encode($input));
   
        $username   = !empty($input->username) ? $input->username : null;
        $password    = !empty($input->password) ? $input->password : null;

        $loginQuery = $db->query("SELECT usradminptj1,usrpassword,fakulti FROM (
            SELECT 'userfakulti1' AS usradminptj1, '123' AS usrpassword, 'FRIT' AS fakulti
            UNION
            SELECT 'userfakulti2', '123', 'FKI'
            UNION
            SELECT 'adminpps', '123', 'PPS'
        ) AS users
        WHERE usradminptj1 = '$username' AND usrpassword = '$password'");
      // $result = $loginQuery->getResult();
        $result = $loginQuery->getRow();

        // $username = $result->usradminptj1;
        // $password = $result->usrpassword;
         $fakulti = $result->fakulti;

        $data = [
            'username'  => $username,
            'logged_in' => true,
            'fakulti'   => $fakulti,
            ];

           $session->set($data);
            // Debug: Check if session is properly set
       // log_message('debug', 'Session after login: ' . print_r($session->get(), true));

        if($username != '' && $password != ''){ 

            return $this->response->setJSON(['status' => 'success', 'msg' => 'Update successful','data' => $result]);
        }
        else{
         $error = $db->error(); // Get database error
        error_log("Database error: " . json_encode($error));
        return $this->response->setJSON(['status' => 'error', 'msg' => 'Update failed', 'error' => $error]);
        }

        //return $this->response->setJSON($data);

    }

    public function logout()
    {
        $session = \Config\Services::session();

        // Destroy the session
        $session->destroy();

        // Return JSON response for the AJAX call
        return $this->response->setJSON(['status' => 'success', 'message' => 'Logged out successfully']);

       
    }

}