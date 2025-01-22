<?php

namespace App\Controllers;

use App\Models\LoginModel;
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

        //belum cater untuk session lps login
        $session = \Config\Services::session();

        $input = $this->request->getPost();

        $usr = $input['username'];
		$pwd = $input['password'];

        $db = Config::connect();

        $loginQuery = $db->query("SELECT p00username,p00password from ppsdblocal.p00daftar where p00username='$usr' and p00password= '$pwd' and p000statsahreg = 1");
      // $result = $loginQuery->getResult();
        $result = $loginQuery->getRow();
        $username = $result->p00username;
        $password = $result->p00password;

        $data = [
            'username'  => $username,
            'logged_in' => true,
            ];

           $session->set($data);

        if($username != '' && $password != ''){ 
            $data['success'] = 'ok';
        }
        else{
            $data['success'] = 'ko';
        }

        return $this->response->setJSON($data);

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

    public function regnewlogin() {

        $input = $this->request->getPost();

        $user       = $input['usr'];
        $warga      = $input['stswarga'] ?? null;
        $icno       = $input['icno'];
        $passport   = $input['passno'];
		$pwd        = $input['password'];
		$emel       = $input['email'];
        $verifycode = $verification_code = bin2hex(random_bytes(16)); // Generate a random verification code
       

        //problem insert radio button -- blm solve
        //validate -- blm check
        

        if ($warga = '1'){
            $username = $icno;

        }elseif($warga = '2'){
            $username =  $passport;
        }else{
            $username = 'noinput';
        }

        $db = Config::connect();
        // $db2 = \Config\Database::connect('thirdDB');

        //belum checking jika username sama dlm table 

        // Save data to the database
        $insert = $this->model->insert([
            'p00username'          => $user,
            'p00password'          => $pwd,
            'p00emel'              => $emel,
            'p00katwarga'          => $warga,
            'p000statsahreg'       => '0',
            'p00verifycode'        => $verifycode,
            'p00usrid'             => $username
        ]);


        if($insert){

            $subject = "Verify Your Email";
            $message = "Click the link below to verify your email:\n";
            $message .= "http://localhost/pascav2/public/verifylogin/$verifycode";
            $headers = "From: yani4686@gmail.com";

            //test send ke local shj
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

    }

    public function verifylogin($code) {

        //belum cater untuk expired link dr emel

        $db = Config::connect();

        $t	= date('Y');
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

            $sqlupdateQuery = $db->query("UPDATE ppsdblocal.p00daftar SET p000statsahreg  = 1 WHERE p00verifycode='$verifycode'");
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
    public function verify()
    {
        return view('form/verifyemel');
    }
}