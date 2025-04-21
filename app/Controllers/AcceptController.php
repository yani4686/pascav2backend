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

    //

    public function getkodrace()
    {
        $db = Config::connect();

        $Query = $db->query("SELECT distinct(a008kodhrmis),a008bangsa FROM ppsdblocal.a008 WHERE a008kbangsa<>'-1' AND a008kbangsa<>'-2' and a008kodhrmis<>''");
        $result = $Query->getResult();

        return $this->response->setJSON($result);
    }

    public function getkodreligion()
    {
        $db = Config::connect();

        $Query = $db->query("SELECT trim(z016kodmohes) as z016kodmohes,z016nmagamabi from ppsdblocal.z016 where z016kodmohes not in ('','5','-2','-1','10')");
        $result = $Query->getResult();

        return $this->response->setJSON($result);
    }

    public function getkodstakhawin()
    {
        $db = Config::connect();

        $Query = $db->query("SELECT trim(z017kodmohes) as z017kodmohes,z017statuskhwinbi from ppsdblocal.z017 where z017kodmohes not in ('-1','-2')");
        $result = $Query->getResult();

        return $this->response->setJSON($result);
    }

    public function getgredspmbibm()
    {
        $db = Config::connect();

        $Query = $db->query("SELECT a003agredsubj,a003aktrgpjg FROM ppsdblocal.a003a WHERE a003agredsubj<>'R' AND a003agredsubj<>'T' AND a003agredsubj<>'X'");
        $result = $Query->getResult();

        return $this->response->setJSON($result);
    }

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

    //get post from form
    $input = $this->request->getPost();
    $birthplace   = !empty($input['birthplace']) ? $input['birthplace'] : null;
    $nohp         = !empty($input['mobilenoupd']) ? $input['mobilenoupd'] : null;
    $gender       = !empty($input['gender']) ? $input['gender'] : null;
    $race         = !empty($input['race']) ? $input['race'] : null;
    $religion     = !empty($input['religion']) ? $input['religion'] : null;
    $maritalst    = !empty($input['marital']) ? $input['marital'] : null;
    $dun          = !empty($input['dun']) ? $input['dun'] : null;
    $sek          = !empty($input['sek']) ? $input['sek'] : null;
    $lykmasuk     = !empty($input['lykmsk']) ? $input['lykmsk'] : null;
    $bigred       = !empty($input['bispm']) ? $input['bispm'] : null;
    $bmgred       = !empty($input['bmspm']) ? $input['bmspm'] : null;
    $incomekd     = !empty($input['incomekd']) ? $input['incomekd'] : null;

     // Update database
     $update = $db->table('ppsdblocal.p001')
     ->set([
        'p001nohp'     => $nohp,
        'p001knlahir'  => $birthplace,
        'p001kjantina' => $gender,
        'p001kagama'   => $religion,
        'p001kkaum'    => $race,
        'p001kkahwin'  => $maritalst,
        'p001kdun'     => $dun,
        'p001sekmen'   => $sek,
        'p001lykmsk'   => $lykmasuk,
        'p001bispm'   => $bigred,
        'p001bmspm'   => $bmgred,
        'p001kdapat'   => $incomekd,
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

    public function GetInfoPemohon()
    {
        $session = session();

        $user   = $session->get('username');
        $idsess = $session->get('id');

        $db = Config::connect();

        $loginQuery = $db->query("SELECT p001nokp,p001nama,p001kprog,p001kaedah,CASE 
        WHEN p001kaedah = '7' THEN 'COURSEWORK'
        WHEN p001kaedah = '8' THEN 'RESEARCH'
        WHEN p001kaedah = '9' THEN 'MIX_MODE' end as desckaedah,
        p001modebelajar,CASE  
        WHEN p001modebelajar = '1' THEN 'Full Time'
        WHEN p001modebelajar = '2' THEN 'Part Time' end as descmode,p001tajuk,p001penyelia,p001tkhlahir,p001kwarga,p001kwarganegara,
        CASE p001kwarganegara 
        WHEN '1' THEN 'MALAYSIAN' 
        WHEN '2' THEN 'NON MALAYSIAN' end as desckwarga,p001kbumi,p001knlahir,p001kjantina,p001kkaum,trim(p001kagama) as p001kagama,trim(p001kkahwin) as p001kkahwin,p001alamat1,p001alamat2,p001bandar,p001knegeri,p001poskod,p001alamatt1,p001alamatt2,p001bandart,p001knegerit,p001poskodt,p001notel,p001nohp,p001email,p001ststerimatwr,
        p001kcacat,p001bispm,p001bmspm,p001muet,p001akadtinggi,trim(p001sekmen) as p001sekmen,trim(p001lykmsk) as p001lykmsk,p001kdapat,CASE p001akadtinggi 
        WHEN '1' THEN 'Bachelor / Equivalent'
        WHEN '2' THEN 'Master Degree / Equivalent'
        WHEN '3' THEN 'Diploma' end as descakadttg,p001kpenaja,p001tkhstatus,p001status,CASE 
        WHEN p001status = '' THEN 'Draft'
        WHEN p001status IS NULL THEN 'Draft'
        WHEN p001status = '0' THEN 'New'
        WHEN p001status = '1' THEN 'Approved'
        WHEN p001status = '2' THEN 'Lulus Fakulti1'
        WHEN p001status = '3' THEN 'Gagal Fakulti1'
        WHEN p001status = '4' THEN 'Pindah Fakulti'
        WHEN p001status = '5' THEN 'Lulus Fakulti2'
        WHEN p001status = '6' THEN 'Gagal Fakulti2'
        END AS statdesc,p001upgambar,trim(p001kdun) as p001kdun,p001uppassport,p001uptrans,p001upproposal,p001upresit,p001upmuet,p001cgpa,p001unilama,p001bilexp,p001knegaracgpa,p001cgpa2,p001knegaracgpa2,p001unilama2,p001ejenname,p001ejenemail,p001laluanmohon,p001setujutransfer,p001nooku,p001faxno,p001offno,p001faxnot,p001offnot,p001amthouse,p001alamatneg,p001alamatnegt,p001notelt,p001nohpt,
        CASE 
        p001kbumi 
        WHEN '1' THEN 'BUMIPUTERA' 
        WHEN '2' THEN 'Non BUMIPUTERA' end as ktrgwarga,concat(p001alamat1,' ',p001alamat2,' ',p001bandar,' ',p001poskod) as almtsemasa,concat(p001alamatt1,' ',p001alamatt2,' ',p001bandart,' ',p001poskodt) as almttetap,p001katbi,p001noreg,p001tkhexm,p001uplaluan,p001upworkex,p001ststerimatwr,p001nosrttawar,
        CASE p001katbi
        WHEN 'MT' THEN 'MUET'
        WHEN 'IE' THEN 'IELTS'
        WHEN 'TF' THEN 'TOEFL'
        WHEN 'CF' THEN 'CEFR' end descbi,p001noreg,p001tkhexm
        from ppsdblocal.p001 where p001email='$idsess'");
        $result = $loginQuery->getRow();

        return $this->response->setJSON($result);
    }

}