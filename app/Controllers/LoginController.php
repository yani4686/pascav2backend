<?php

namespace App\Controllers;

use App\Models\LoginModel;
use App\Models\LoginModelp051;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\Database\Config;
//use informixdb;

class LoginController extends ResourceController
{
    protected $modelName = 'App\Models\LoginModel';
    protected $format    = 'json';

    //protected $session;


    // function __construct()
    // {

    //     $this->session = \Config\Services::session();
    //     $this->session->start();


    // }
    protected $anotherModel;

    public function __construct()
    {
        $this->model = new LoginModel(); // Initialize the main model
        $this->anotherModel = new LoginModelp051(); // Initialize the second model
    }

    public function testDb()
    {

        helper('informix');
        $query = "SELECT a017namaper FROM a017 where a017ptjskrg='22' LIMIT 5";
        $res = informix_query($query);
        foreach ($res as $row) {
            echo $row['A017NAMAPER']."<br>";
        }

        // $db4 = \Config\Database::connect('fourthDB');
   
        // $loginQuery4 = $db4->query('SELECT a017namaper FROM a017 where a017ptjskrg='22' LIMIT 5');
        // $loginQuery = $loginQuery4->getResult();
            
        //     $response = [
        //         'loginQuery' => $loginQuery       
        //     ]; 

		// return $this->response->setJSON($response);

   }

    public function retlogin() {

        $session = \Config\Services::session();//session set kt local

        $input = $this->request->getPost();

        $usr = $input['username'];
		$pwd = $input['password'];

        $db = Config::connect();

        $loginQuery = $db->query("SELECT p00username,p00password,p00usrid from ppsdblocal.p00daftar where p00username='$usr' and p00password= '$pwd' and p000statsahreg = 1");
      // $result = $loginQuery->getResult();
        $result = $loginQuery->getRow();
       // $username = $result->p00username;
       // $password = $result->p00password;

           if ($result) {
            // Valid login
            $data = [
                'username' => $result->p00username,
                'id'       => $result->p00usrid,
                'logged_in' => true
            ];
            $session->set($data);
    
            return $this->response->setJSON(['success' => 'ok']);
        } else {
            // Invalid login
            return $this->response->setJSON(['success' => 'ko']);
        }

    }

    public function retloginp051() {

        $session = \Config\Services::session();//session set kt local

        $input = $this->request->getPost();

        $usr = $input['username'];
		$pwd = $input['password'];

        $db = Config::connect();

        $loginQuery = $db->query("SELECT p051username,p051password,p051emel from ppsdblocal.p051 where p051username='$usr' and p051password= '$pwd' and p051statsahreg = 1");
      // $result = $loginQuery->getResult();
        $result = $loginQuery->getRow();
       // $username = $result->p00username;
       // $password = $result->p00password;

           if ($result) {
            // Valid login
            $data = [
                'username' => $result->p051username,
                'id'       => $result->p051emel,
                'logged_in' => true
            ];
            $session->set($data);
    
            return $this->response->setJSON(['success' => 'ok']);
        } else {
            // Invalid login
            return $this->response->setJSON(['success' => 'ko']);
        }

    }

    public function logout()
    {
        $session = \Config\Services::session();

        // Destroy the session
        $session->destroy();

        // Return JSON response for the AJAX call
        return $this->response->setJSON(['status' => 'success', 'message' => 'Logged out successfully']);

        // $sessionOut = $session->destroy();

        // if($sessionOut){ 

        //     $data['success'] = 'ok';
        // }
        // else{
        //     $data['success'] = 'ko';
        // }

        // return $this->response->setJSON($data);


       
    }

    public function regnewloginp051() {

        $curdatecreate = date('Y-m-d H:i:s');

        $input = $this->request->getPost();

        $user       = $input['usr'];
        $warga      = $input['stswarga'] ?? null;
       // $icno       = $input['icno'];
       // $passport   = $input['passno'];//'required|min_length[6]'
		$pwd        = $input['password'];
		$emel       = $input['email'];
        $verifycode = $verification_code = bin2hex(random_bytes(16)); // Generate a random verification code
       
        // if ($warga == '1') {
        //     $username = $icno;
        // } elseif ($warga == '2') {
        //     $username = $passport;
        // } else {
        //     $username = 'noinput';
        // }

        $db = Config::connect();

        $sql = "SELECT * FROM ppsdblocal.p051 WHERE p051emel = ?";

        // Execute the query and get the result
        $query = $db->query($sql, [$emel]);
        
        // Fetch the result
        $existingUser = $query->getRow(); 

        if ($existingUser) {
            // If emel exists, return error response
            $data['success'] = 'username_taken';
            return $this->response->setJSON($data);
        }

       //error_log("existingUser: " . print_r($existingUser, true));
        // $db2 = \Config\Database::connect('thirdDB');

      // Validate fields
        $validationRule = [
            'usr'       => 'required',
            'stswarga'  => 'required',
            'password'  => 'required',
            'email'     => 'required|valid_email',
        ];

    // Conditionally validate icno or passno based on stswarga value
    // if ($warga == '1') {
    //     $validationRule['icno'] = 'required';
    // } elseif ($warga == '2') {
    //     $validationRule['passno'] = 'required';
    // }

    // Validate the input fields with dynamic validation rules
    if (!$this->validate($validationRule)) {
        return $this->failValidationErrors('Please fill all the fields correctly.');
    }

        // Save data to the database
        $insert = $this->anotherModel->insert([
            'p051username'          => $user,
            'p051password'          => $pwd,
            'p051emel'              => $emel,
            'p051katwarga'          => $warga,
            'p051statsahreg'       => 0,
            'p051verifycode'        => $verifycode,
           // 'p051srid'             => $username,
            'p051tkhreg'            => $curdatecreate
        ]);

        if($insert){

            $subject = "Registration Emel Verification";
            $message = "Click the link below to verify your email:\n";
            $message .= "http://localhost/pascav2/public/verifyloginp051/$verifycode";
            $headers = "From: yani4686@gmail.com";

            //test send dr local shj blm test kt server
            if (mail($emel, $subject, $message, $headers)) {
                $data['success'] = 'successemail';
            } else {
                $data['success'] = 'failedemail';
            }    
        }
        else{
            $data['success'] = 'ko';
        }

        return $this->response->setJSON($data);

        //     $email = \Config\Services::email();

        //         // Configure the email preferences
        //     $config = [
        //         'protocol' => 'smtp', // Set the protocol to 'smtp' for sending via SMTP
        //         'SMTPHost' => 'smtp.gmail.com',  // Replace with your SMTP server
        //         'SMTPUser' => '', // Replace with your email address
        //         'SMTPPass' => '',  // Replace with your email password or app password
        //         'SMTPPort' => 587,
        //         'SMTPCrypto' => 'tls',  // TLS encryption (or 'ssl' if required by your email provider)
        //         'mailType' => 'html',   // Set the email format to HTML
        //         'charset' => 'utf-8',
        //     ];

        //     // Initialize the email class with the configuration
        //     $email->initialize($config);

        //     // Set the email headers and content
        //     $email->setFrom('yani4686@gmail.com', 'Alyani');
        //     $email->setTo($emel);  // Set the recipient email address
        //     $email->setSubject('Verify Your Email');
            
        //     // Prepare the verification message
        //     $message = "Click the link below to verify your email:\n";
        //     $message .= "http://localhost/pascav2/public/verifylogin/$verifycode";
        //     $email->setMessage($message);

        //     // Send the email
        //     if ($email->send()) {
        //         $data['success'] = 'successemail';
        //     } else {
        //         // If email fails, output the error details for debugging
        //         $data['success'] = 'failedemail';
        //         $data['error'] = $email->printDebugger();
        //     }
        // } else {
        //     $data['success'] = 'ko';
        // }
    }

    public function regnewlogin() {

        $curdatecreate = date('Y-m-d H:i:s');

        $input = $this->request->getPost();

        $user       = $input['usr'];
        $warga      = $input['stswarga'] ?? null;
        $icno       = $input['icno'];
        $passport   = $input['passno'];//'required|min_length[6]'
		$pwd        = $input['password'];
		$emel       = $input['email'];
        $verifycode = $verification_code = bin2hex(random_bytes(16)); // Generate a random verification code
       
        if ($warga == '1') {
            $username = $icno;
        } elseif ($warga == '2') {
            $username = $passport;
        } else {
            $username = 'noinput';
        }

        $db = Config::connect();

        $sql = "SELECT * FROM ppsdblocal.p00daftar WHERE p00usrid = ?";

        // Execute the query and get the result
        $query = $db->query($sql, [$username]);
        
        // Fetch the result
        $existingUser = $query->getRow(); 

        if ($existingUser) {
            // If username exists, return error response
            $data['success'] = 'username_taken';
            return $this->response->setJSON($data);
        }

       //error_log("existingUser: " . print_r($existingUser, true));
        // $db2 = \Config\Database::connect('thirdDB');

      // Validate fields
        $validationRule = [
            'usr'       => 'required',
            'stswarga'  => 'required',
            'password'  => 'required',
            'email'     => 'required|valid_email',
        ];

    // Conditionally validate icno or passno based on stswarga value
    if ($warga == '1') {
        $validationRule['icno'] = 'required';
    } elseif ($warga == '2') {
        $validationRule['passno'] = 'required';
    }

    // Validate the input fields with dynamic validation rules
    if (!$this->validate($validationRule)) {
        return $this->failValidationErrors('Please fill all the fields correctly.');
    }

        // Save data to the database
        $insert = $this->model->insert([
            'p00username'          => $user,
            'p00password'          => $pwd,
            'p00emel'              => $emel,
            'p00katwarga'          => $warga,
            'p000statsahreg'       => '0',
            'p00verifycode'        => $verifycode,
            'p00usrid'             => $username,
            'p00tkhreg'            => $curdatecreate
        ]);

        if($insert){

            $subject = "Registration Emel Verification";
            $message = "Click the link below to verify your email:\n";
            $message .= "http://localhost/pascav2/public/verify/$verifycode";
            $headers = "From: yani4686@gmail.com";

            //test send dr local shj blm test kt server
            if (mail($emel, $subject, $message, $headers)) {
                $data['success'] = 'successemail';
            } else {
                $data['success'] = 'failedemail';
            }    
        }
        else{
            $data['success'] = 'ko';
        }

        return $this->response->setJSON($data);

        //     $email = \Config\Services::email();

        //         // Configure the email preferences
        //     $config = [
        //         'protocol' => 'smtp', // Set the protocol to 'smtp' for sending via SMTP
        //         'SMTPHost' => 'smtp.gmail.com',  // Replace with your SMTP server
        //         'SMTPUser' => '', // Replace with your email address
        //         'SMTPPass' => '',  // Replace with your email password or app password
        //         'SMTPPort' => 587,
        //         'SMTPCrypto' => 'tls',  // TLS encryption (or 'ssl' if required by your email provider)
        //         'mailType' => 'html',   // Set the email format to HTML
        //         'charset' => 'utf-8',
        //     ];

        //     // Initialize the email class with the configuration
        //     $email->initialize($config);

        //     // Set the email headers and content
        //     $email->setFrom('yani4686@gmail.com', 'Alyani');
        //     $email->setTo($emel);  // Set the recipient email address
        //     $email->setSubject('Verify Your Email');
            
        //     // Prepare the verification message
        //     $message = "Click the link below to verify your email:\n";
        //     $message .= "http://localhost/pascav2/public/verifylogin/$verifycode";
        //     $email->setMessage($message);

        //     // Send the email
        //     if ($email->send()) {
        //         $data['success'] = 'successemail';
        //     } else {
        //         // If email fails, output the error details for debugging
        //         $data['success'] = 'failedemail';
        //         $data['error'] = $email->printDebugger();
        //     }
        // } else {
        //     $data['success'] = 'ko';
        // }

          

    }

    public function verifylogin($code) {

        //belum cater untuk expired link dr emel

        $db = Config::connect();

        $t	= date('Y');
        $curdatecreate = date('Y-m-d H:i:s');
        $verifycode = $code;
        
      $checkmaxrow = $db->query('SELECT max(SUBSTRING(p001norujuk,17,2)) as bilmax from ppsdblocal.p001');
      $result = $checkmaxrow->getRow();
      $maxid= ($result->bilmax ?? 0) + 1;

      $kodrujuk = $db->query("SELECT CONCAT('UniSZA','/','PPS','/','$t','/','$maxid') as kodrujuk");
      $resultQuery = $kodrujuk->getRow();
      $kdrujuk = $resultQuery->kodrujuk;

       $loginQuery = $db->query("SELECT p00usrid,p00katwarga,p00emel from ppsdblocal.p00daftar where p00verifycode='$verifycode' and p000statsahreg = 0");
       $result = $loginQuery->getRow();
       $p00usrid = $result->p00usrid;
       $p00katwarga = $result->p00katwarga;
       $p00emel = $result->p00emel;
	
        if($p00usrid != ''){

            $sqlupdateQuery = $db->query("UPDATE ppsdblocal.p00daftar SET p000statsahreg  = 1,p00tkhreg='$curdatecreate' WHERE p00verifycode='$verifycode'");
            $resultupd = $db->getLastQuery();

            if($resultupd){

                //insert into table p001
                 $sqlinsertQuery = $db->table('ppsdblocal.p001')->insert([
                    'p001nokp'          => $p00usrid,
                    'p001kbumi'         => $p00katwarga,
                    'p001email'         => $p00emel,
                    'p001norujuk'       => $kdrujuk
                ]);

                $data['success'] = 'sah';

                return view('form/verifyemel');

            }else{
                $data['success'] = 'xsah';
            }
        }
        else{
           $data['success'] = 'not exist';
        }

        return $this->response->setJSON($data);

    }
    public function verifyloginp051($code) {

        //belum cater untuk expired link dr emel

        $db = Config::connect();

        $t	= date('Y');
        $curdatecreate = date('Y-m-d H:i:s');
        $verifycode = $code;
        
      $checkmaxrow = $db->query('SELECT max(SUBSTRING(p001norujuk,17,2)) as bilmax from ppsdblocal.p001');
      $result = $checkmaxrow->getRow();
      $maxid= ($result->bilmax ?? 0) + 1;

      $kodrujuk = $db->query("SELECT CONCAT('UniSZA','/','PPS','/','$t','/','$maxid') as kodrujuk");
      $resultQuery = $kodrujuk->getRow();
      $kdrujuk = $resultQuery->kodrujuk;

       $loginQuery = $db->query("SELECT p051katwarga,p051emel from ppsdblocal.p051 where p051verifycode='$verifycode' and p051statsahreg = 0");
       $result = $loginQuery->getRow();
      // $p00usrid = $result->p00usrid;
       $p051katwarga = $result->p051katwarga;
       $p051emel = $result->p051emel;
	
        if($p051emel != ''){

            $sqlupdateQuery = $db->query("UPDATE ppsdblocal.p051 SET p051statsahreg  = 1,p051tkhreg='$curdatecreate' WHERE p051verifycode='$verifycode'");
            $resultupd = $db->getLastQuery();

            if($resultupd){

                //insert into table p001
                 $sqlinsertQuery = $db->table('ppsdblocal.p001')->insert([
                    'p001nokp'          => '0',
                    'p001kbumi'         => $p051katwarga,
                    'p001email'         => $p051emel,
                    'p001norujuk'       => $kdrujuk
                ]);

                $data['success'] = 'sah';

                return view('form/verifyemel');

            }else{
                $data['success'] = 'xsah';
            }
        }
        else{
           $data['success'] = 'not exist';
        }

        return $this->response->setJSON($data);

    }
    public function verify()
    {
        return view('form/verifyemel');
    }

    public function forgotpwd()
    {
        $input = $this->request->getPost();

		$emel       = $input['email'];

        $db = Config::connect();

        $sql = "SELECT p00emel,p00password FROM ppsdblocal.p00daftar WHERE p00emel = ?";
        // Execute the query and get the result
        $query = $db->query($sql, [$emel]);
        
        // Fetch the result
        $existingUser = $query->getRow(); 
        $emel = $existingUser->p00emel;
        $pwd = $existingUser->p00password;

        if($existingUser){

            $subject = "Forgot Password Request";
            $message = "Your Password is $pwd";
            $message .= " Click Here <a href=http://localhost/pascav2/public/></a> To Login";
            $headers = "From: yani4686@gmail.com";

            //test send dr local shj blm test kt server
            if (mail($emel, $subject, $message, $headers)) {
                $data['success'] = 'successemail';
            } else {
                $data['success'] = 'failedemail';
            }             
        }
        else{
            $data['success'] = 'email_empty';         
        }

        return $this->response->setJSON($data);
    }

    public function forgotpwdp051()
    {
        $input = $this->request->getPost();

		$emel       = $input['email'];

        $db = Config::connect();

        $sql = "SELECT p051emel,p051password FROM ppsdblocal.p051 WHERE p051emel = ? and p051statsahreg = 1";
        // Execute the query and get the result
        $query = $db->query($sql, [$emel]);
        
        // Fetch the result
        $existingUser = $query->getRow(); 
        $emel = $existingUser->p051emel;
        $pwd = $existingUser->p051password;

        if($existingUser){

            $subject = "Forgot Password Request";
            $message = "Your Password is $pwd";
            $message .= " Click Here <a href=http://localhost/pascav2/public/></a> To Login";
            $headers = "From: yani4686@gmail.com";

            //test send dr local shj blm test kt server
            if (mail($emel, $subject, $message, $headers)) {
                $data['success'] = 'successemail';
            } else {
                $data['success'] = 'failedemail';
            }             
        }
        else{
            $data['success'] = 'email_empty';         
        }

        return $this->response->setJSON($data);
    }
}