<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class ApiAuth implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Do something here
        helper('JWTauth');
        //dapatkan authentication dari header
        $auth = $request->getServer('HTTP_AUTHORIZATION');
        header('Content-Type: application/json');
        header('Access-Control-Allow-Origin: *');
        // header('Access-Control-Allow-Origin: http://'.$_SERVER['HTTP_HOST']);
        // header("Access-Control-Allow-Headers: *");
        // header("Access-Control-Allow-Methods: GET, POST, OPTIONS");

        if($auth == NULL || $auth == ''){
            echo json_encode(['status'=>'error', 'message'=>'Authentication required!']);
            exit();
        }
        else{
            $token = explode(' ',$auth);
            if(count($token) != 2 && checkToken($token[1]) == false){
                echo json_encode(['status'=>'error', 'message'=>'Not authorized']);
                exit();
            }
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}