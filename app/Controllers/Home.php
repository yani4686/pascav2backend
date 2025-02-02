<?php

namespace App\Controllers;

//use App\Models\LoginModel;
//se CodeIgniter\RESTful\ResourceController;

class Home extends BaseController
{
   // protected $modelName = 'App\Models\LoginModel';
  //  protected $format    = 'json';

    public function index(): string
    {
        return view('form/login');
    }
    public function applySc(): string
    {
        
        $session = \Config\Services::session();

        $data['username'] = $session->get('username');
        // print_r($data);
        // Check if the user is logged in
        if (!$session->get('logged_in')) {
            return view('form/login');
            //return redirect()->to('/')->with('error', 'Please log in first.');
        }

      return view('form/apply');
        
    }
    public function acceptanceSc(): string
    {
        return view('form/acceptance');
    }
    public function dashboardSc(): string
    {
        $session = \Config\Services::session();

        $data['username'] = $session->get('username');
        // print_r($data);
        // Check if the user is logged in
        if (!$session->get('logged_in')) {
            return view('form/login');
            //return redirect()->to('/')->with('error', 'Please log in first.');
        }

        // return view('indexMain', ['username' => $session->get('username')]);

      return view('indexMain');
    }
    public function test(): string
    {
        return view('form/test');
    }
    // public function test_informix() {
    //     helper('informix');
    //     $query = "SELECT a017namaper FROM a017 where a017ptjskrg='22' LIMIT 5";
    //     $res = informix_query($query);
    //     foreach ($res as $row) {
    //         echo $row['A017NAMAPER']."<br>";
    //     }
    // }

    // Optional: Function to get all notifications
    // public function getLogin()
    // {
    // $db = \Config\Database::connect();

    // if ($db) 
    // {
    //     //db connection initialized
    //     return view('indexMain');
    // }
    // else
    // {
    //     //db connection  not initialized
    //     return redirect()->to('db_setup');
    // }
    //       // Fetch all notifications ordered by portal and date
    // // $loginQuery = $db->query('SELECT p00username, p00password, p00emel from p00daftar');
    // // $loginResult = $loginQuery->getResult();
    
    // // $response = [
    // //     'loginResult' => $loginResult       
    // // ];
    
    // // Return combined response as JSON
    // // return $this->response->setJSON($response);
    // }

    // function testdb(){
    //     $data = $this->postgre->table('a089')->get()->getResult();
    //     echo '<pre>';
    //     print_r($data);
    //     echo '</pre>';
    // }



    // public function sampleInformix()
	// {
	// 	//select 1 data
	// 	$s1 = $this->informix->select('select * from a017')->get();
	// 	return $this->response->setJSON($s1);
		

	// 	//select many data
	// 	// $s1 = $this->informix->select('select * from a017 limit 10')->getAll();
	// 	// return $this->response->setJSON($s1);

	// 	//disable example
	// 	return $this->response->setStatusCode(404);

	// }
}
