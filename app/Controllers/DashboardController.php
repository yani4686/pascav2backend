<?php

namespace App\Controllers;

use App\Models\DashboardModel;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\Database\Config;

class DashboardController extends ResourceController
{
    protected $modelName = 'App\Models\DashboardModel';
    protected $format    = 'json';

    public function getAllSessionData()
    {
        $session = session();
    
        // Retrieve all session data
        $data = $session->get();
    
        // Return JSON response
        return $this->response->setJSON($data);
    }

    public function getDisplayStatusMohon(){

        $session = session();

        $username = $session->get('username');

     // Return JSON response
     return $this->response->setJSON($username);

    }
    public function countDisplayDashboard()
    {
        $session = session();

        $user = $session->get('username');
        $idsess = $session->get('id');

        $db = Config::connect();

            $countQuery = $db->query("select(SELECT COUNT(*) as adastep1 FROM ppsdblocal.p001 WHERE (p001nama IS NULL OR p001tkhlahir IS NULL OR p001kwarga IS NULL OR
            p001kwarganegara IS NULL OR p001alamat1 IS NULL OR p001bandar IS NULL OR p001knegeri IS NULL OR p001poskod IS NULL OR p001alamatt1 IS NULL OR p001bandart IS NULL OR
            p001knegerit IS NULL OR p001poskodt IS NULL OR p001notel IS NULL OR p001nohp IS NULL OR p001kcacat IS NULL OR p001upgambar IS NULL OR p001laluanmohon IS NULL OR p001notelt IS NULL) AND p001email='$idsess')as adastep1,
       (SELECT COUNT(*) as adastep2 FROM ppsdblocal.p001 WHERE (p001kaedah IS NULL OR p001modebelajar IS NULL OR p001kprog IS NULL OR
            p001akadtinggi IS NULL OR p001unilama IS NULL OR p001cgpa IS NULL ) AND p001email='$idsess')as adastep2,
        (SELECT COUNT(*) as adastep3 FROM ppsdblocal.p001 WHERE (p001uppassport IS NULL OR p001uptrans IS NULL OR p001upmuet IS NULL OR
            p001upresit IS NULL OR p001upproposal IS NULL ) AND p001email='$idsess')as adastep3");
            
            $result = $countQuery->getRow();
            $adastep1 = $result->adastep1;

              // Return JSON response
     return $this->response->setJSON($result);


    }
}