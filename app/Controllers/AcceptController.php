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

    public function UpdAccept()
    {
        $session = session();

        $user = $session->get('username');

        $db = Config::connect();

        // Fetch user details
    $query = $db->table('ppsdblocal.p00daftar')
    ->select('p001nokp')
    ->join('ppsdblocal.p001', 'ppsdblocal.p00daftar.p00usrid = ppsdblocal.p001.p001nokp')
    ->where([
        'p00username' => $user,
        'p000statsahreg' => 1
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

        $db = Config::connect();

        // Fetch user details
    $query = $db->table('ppsdblocal.p00daftar')
    ->select('p001nokp')
    ->join('ppsdblocal.p001', 'ppsdblocal.p00daftar.p00usrid = ppsdblocal.p001.p001nokp')
    ->where([
        'p00username' => $user,
        'p000statsahreg' => 1
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