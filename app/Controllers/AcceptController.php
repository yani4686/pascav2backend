<?php

namespace App\Controllers;

use App\Models\ApplyModel;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\Database\Config;
use Dompdf\Dompdf;
use Dompdf\Options;

class AcceptController extends ResourceController
{
    protected $modelName = 'App\Models\ApplyModel';
    protected $format    = 'json';

    public function getkodbangsa()
    {
        $db = Config::connect();

        $Query = $db->query("SELECT distinct z018kodbgsa,z018bgsa  FROM ppsdblocal.z018 where z018kodbgsa != '' and LENGTH(z018kodbgsa)=4 order by z018bgsa asc");
        $result = $Query->getResult();

        return $this->response->setJSON($result);
    }

    // public function getkodlayakmasuk()
    // {
    //     $db = Config::connect();

    //     $Query = $db->query("SELECT z038kodmohes,z038kelayakan  FROM ppsdblocal.z038 where z038kodmohes<>'-1' and z038kodmohes<>'-2'");
    //     $result = $Query->getResult();

    //     return $this->response->setJSON($result);
    // }


    public function UpdAccept()
    {
        $session = session();

        $user = $session->get('username');
        $idsess = $session->get('id');

        $db = Config::connect();

        // Fetch user details
    $query = $db->table('ppsdblocal.p001')
    ->select('p001nokp')
    ->where([
        'p001email' => $idsess
    ])
    ->get();

    $result = $query->getRow();

    if (!$result) {
    return $this->response->setJSON([
    'success' => false,
    'message' => 'User not found or registration not approved.',
    ]);
    }

    $p001nokp = $result->p001nokp;

     // Update database
     $update = $db->table('ppsdblocal.p001')
     ->set([
         'p001ststerimatwr' => '1',
     ])
     ->where('p001nokp', $p001nokp)
     ->update();

        if ($update) {
        return $this->response->setJSON(['success' => 'ok']);
        } else {
        $error = $db->error();
        error_log("SQL Error: " . json_encode($error));
        return $this->response->setJSON([
        'success' => 'ko',
        'message' => 'Update failed.',
        'error' => $error,
        ]);
        }
    }

    public function ViewSurat()
    {
        $session = session();

        $user = $session->get('username');
        $idsess = $session->get('id');

        $db = Config::connect();

        // Fetch user details
    $query = $db->table('ppsdblocal.p001')
    ->select('p001nokp')
    ->where([
        'p001email' => $idsess
    ])
    ->get();

    $result = $query->getRow();

    if (!$result) {
    return $this->response->setJSON([
    'success' => false,
    'message' => 'User not found or registration not approved.',
    ]);
    }

    $p001nokp = $result->p001nokp;

     // Update database
     $update = $db->table('ppsdblocal.p001')
     ->set([
         'p001savesurat' => '1',
     ])
     ->where('p001nokp', $p001nokp)
     ->update();

        if ($update) {
        return $this->response->setJSON(['success' => 'ok']);
        } else {
        $error = $db->error();
        error_log("SQL Error: " . json_encode($error));
        return $this->response->setJSON([
        'success' => 'ko',
        'message' => 'Update failed.',
        'error' => $error,
        ]);
        }
    }
}