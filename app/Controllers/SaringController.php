<?php


namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;
use App\Models\ApplyModel;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\Database\Config;

class SaringController extends ResourceController
{
    use ResponseTrait;
    protected $modelName = 'App\Models\ApplyModel';
    protected $format    = 'json';

    /**
     * Fetch and return JSON data.
     */
    public function retpermohonan() {

    $response = service('response');
    $response->setHeader('Access-Control-Allow-Origin', '*');
    $response->setHeader('Access-Control-Allow-Methods', 'GET, POST, OPTIONS, PUT, DELETE');
    $response->setHeader('Access-Control-Allow-Headers', 'Content-Type, Authorization, X-Requested-With');

    if ($this->request->getMethod() === 'options') {
        return $response->setStatusCode(200);
    }
        // $session = session();

        // $user = $session->get('username');

        $db = Config::connect();

        $selectMohon= $db->query("SELECT p001nokp,p001nama,p001kprog,p001kaedah,case p001kaedah when '7' then 'Coursework' when '8' then 'Research' when '9' then 'Mix-Mode' end as kaedah, case p001modebelajar when '1' then 'Full Time' when '2' then 'Park Time' end as modebelajar,p001modebelajar,p001tajuk,p001penyelia,p001tkhlahir,p001kwarga,p001kwarganegara,p001alamat1,p001alamat2,p001bandar,p001knegeri,p001poskod,p001alamatt1,p001alamatt2,p001bandart,p001knegerit,p001poskodt,p001notel,p001nohp,
        p001kcacat,p001akadtinggi,p001kpenaja,p001tkhpohon,p001status,p001upgambar,p001uppassport,p001cgpa,p001unilama,p001bilexp,p001knegaracgpa,p001cgpa2,p001knegaracgpa2,p001unilama2,p001ejenname,p001ejenemail,p001laluanmohon,p001setujutransfer,p001nooku,p001faxno,p001offno,p001faxnot,p001offnot,p001alamatneg,p001alamatnegt,p001notelt,p001nohpt 
        from ppsdblocal.p001");
     
        $result = $selectMohon->getRow();

        // return $this->response->setJSON($result);
      //  log_message('debug', 'retPermohonan API endpoint called');
    //   error_log("debug: " . 'retPermohonan API endpoint called');

        if ($result != null)
        return $this->response->setJSON(['status' => 'success', 'msg' => 'retrive success', 'data' => $result]);
        else
        return $this->response->setJSON(['status' => 'failed', 'msg' => 'Required parameter.']);

    }

    public function retpermohonanbynokp($id) {

        // $csrfToken = $this->request->getHeaderLine('X-CSRF-TOKEN');
        // log_message('info', 'Received CSRF Token: ' . $this->request->getHeaderLine('X-CSRF-TOKEN'));

        $db = Config::connect();

        $idpemohon = $id;

        $selectMohon= $db->query("SELECT p001nokp,p001nama,p001kprog,p001kaedah,case p001kaedah when '7' then 'Coursework' when '8' then 'Research' when '9' then 'Mix-Mode' end as kaedah, 
case p001modebelajar when '1' then 'Full Time' when '2' then 'Park Time' end as modebelajar,p001modebelajar,p001tajuk,
p001penyelia,p001tkhlahir,p001kwarga,p001kwarganegara,case p001kwarganegara when '1' then 'Malaysia' when '2' then 'Non Malaysia' when '3' then 'PR' end as ktrgnstatwarga,
p001alamat1,concat(p001alamat1,' ',p001alamat2,' ',p001bandar,' ',p001poskod,' ',a90.a090negeri) as almtsemasa,p001alamat2,p001bandar,p001knegeri,p001poskod,p001alamatt1,p001alamatt2,p001bandart,p001knegerit,p001poskodt,concat(p001alamatt1,' ',p001alamatt2,' ',p001bandart,' ',p001poskodt,' ',a90.a090negeri) as almttetap,p001notel,
p001nohp,p001kcacat,z13.z013jenkcctn,p001akadtinggi,case p001akadtinggi when '1' then 'Bachelor' when '2' then 'Master Degree' when '3' then 'Diploma' end as akadtggi,p001kpenaja,p001tkhpohon,p001status,concat('http://localhost/pascav2/public/uploads/',p001upgambar) as urlgmbr,concat('http://localhost/pascav2/public/uploads/',p001uppassport) as urlnokppass,p001uppassport,concat('http://localhost/pascav2/public/uploads/',p001uptrans) as urlcert,concat('http://localhost/pascav2/public/uploads/',p001upproposal) as urlpro,p001cgpa,p001unilama,p001bilexp,(select c028keterangan from ppsdblocal.c028 where c028kod=p001knegaracgpa) as negunilama,p001knegaracgpa,p001cgpa2,p001knegaracgpa2,p001unilama2,
p001ejenname,p001ejenemail,case p001laluanmohon when 'SP' then 'Normal' when 'AP' then 'APEL.A Qualification' end as laluan,p001laluanmohon,case p001setujutransfer when '1' then 'Pemohon bersetuju untuk menerima tawaran program oleh pihak UniSZA yang bersesuai dengan permohonan' when '0' then 'Pemohon kekal untuk pilihan sedia ada' end as setujutransfer,p001setujutransfer,p001nooku,p001faxno,p001offno,p001faxnot,p001offnot,
p001alamatneg,p001alamatnegt,p001notelt,p001nohpt 
FROM ppsdblocal.p001,ppsdblocal.z013 z13,ppsdblocal.a090 a90 WHERE z13.z013kodjenkcctn = p001kcacat and a90.a090knegeri=p001knegeri and p001nokp='$idpemohon'");

//print_r($selectMohon);
//print_r($idpemohon);
     
        $result = $selectMohon->getRow();

        if ($result != null)
        return $this->response->setJSON(['status' => 'success', 'msg' => 'retrive success', 'data' => $result]);
        else
        return $this->response->setJSON(['status' => 'failed', 'msg' => 'Required parameter.']);
    }

    public function countpermohonan() {

        $db = Config::connect();

        $selectMohon= $db->query("SELECT count(p.p001nokp)as bildraf from ppsdblocal.p001 p where p.p001status ='0'");

        $result = $selectMohon->getRow();

        if ($result != null)
        return $this->response->setJSON(['status' => 'success', 'msg' => 'retrive success', 'data' => $result]);
        else
        return $this->response->setJSON(['status' => 'failed', 'msg' => 'Required parameter.']);

    }
    // public function updsaringan()
    // {
    // //$session = session();
    // //$user = $session->get('username');// nt ret dr session staf fakulti
    
    // $db = \Config\Database::connect();

    // // Use ISO date format
    // $cur = date('Y-m-d');

    // $input = $this->request->getPost();

    // $transfer = $input['stsacctkr'] ?? null;
    // $sah = $input['sah'] ?? null;

    // // Debugging: Log the POST data for analysis
    // error_log(json_encode($this->request->getPost()));

    // // Update database
    // $update = $db->table('ppsdblocal.p001')
    //              ->set([
    //                  'p001tkhstatus' => $cur,
    //                  'p001status' => $sah,
    //                //  'p001setujutransfer' => $transfer,
    //              ])
    //             // ->where('p001nokp', $p001nokp)
    //              ->update();

    // if ($update) {
    //     return $this->response->setJSON(['success' => 'ok']);
    // } else {
    //     $error = $db->error();
    //     error_log("SQL Error: " . json_encode($error));
    //     return $this->response->setJSON([
    //         'success' => 'ko',
    //         'message' => 'Update failed.',
    //         'error' => $error,
    //     ]);
    // }

    // }
}