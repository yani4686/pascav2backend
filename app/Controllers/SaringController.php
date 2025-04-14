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

    //set session display based pn usr n fakulti
    // $session = session();
    // $user = $session->get('username');
    // $fakulti = $session->get('fakulti');

    // // Debugging
    // log_message('debug', 'Session in retpermohonan: ' . print_r($session->get(), true));

    $user = $this->request->getHeaderLine('X-User-Name');
    $fakulti = $this->request->getHeaderLine('X-Fakulti');

    //log_message('debug', "User from header: $user, Fakulti: $fakulti");

    // if (!$user || !$fakulti) {
    //     return $this->response->setJSON([
    //         'status' => 'failed',
    //         'msg' => 'User session not found!'
    //     ]);
    // }

        // $session = session();

        // $user = $session->get('username');

        $db = Config::connect();

        //checkfakulti
        // $selectprogram = $db->query("SELECT p020kprog,a019singkatan FROM p020,a019,p020x,z054b  where p020kprog=p020xkprog and p020xnec=z054bknecdetail and a019kbhg = p020kfakulti 
        // and p020kfakulti='05' and (p020kodmqa ='1' or p020kodmqa ='2') AND p020kaedah='8' AND p020namaprogbi IS NOT NULL AND a019singkatan = '$fakulti' order by p020kfakulti,p020kprog");

        // $resultprogram = $selectprogram->getRow();
        // $kdprogram = $resultprogram->p020kprog;
        // $fac         = $resultprogram->a019singkatan;

        // log_message("debug: " . $selectprogram);

        $selectMohon= $db->query("SELECT p001nokp,p001nama,p001kprog,p001kaedah,case p001kaedah when '7' then 'Coursework' when '8' then 'Research' when '9' then 'Mix-Mode' end as kaedah, case p001modebelajar when '1' then 'Full Time' when '2' then 'Park Time' end as modebelajar,p001modebelajar,p001tajuk,p001penyelia,p001tkhlahir,p001kwarga,p001kwarganegara,p001alamat1,p001alamat2,p001bandar,p001knegeri,p001poskod,p001alamatt1,p001alamatt2,p001bandart,p001knegerit,p001poskodt,p001notel,p001nohp,
        p001kcacat,p001akadtinggi,p001kpenaja,p001tkhpohon,p001status,p001upgambar,p001uppassport,p001cgpa,p001unilama,p001bilexp,p001knegaracgpa,p001cgpa2,p001knegaracgpa2,p001unilama2,p001ejenname,p001ejenemail,p001laluanmohon,p001setujutransfer,p001nooku,p001faxno,p001offno,p001faxnot,p001offnot,p001alamatneg,p001alamatnegt,p001notelt,p001nohpt 
        from ppsdblocal.p001");
     
        $result = $selectMohon->getResult();

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
p001alamat1,concat(p001alamat1,' ',p001alamat2,' ',p001bandar,' ',p001poskod) as almtsemasa,p001alamat2,p001bandar,p001knegeri,p001poskod,p001alamatt1,p001alamatt2,p001bandart,p001knegerit,p001poskodt,concat(p001alamatt1,' ',p001alamatt2,' ',p001bandart,' ',p001poskodt) as almttetap,p001notel,
p001nohp,p001kcacat,z13a.z013aketerangan,p001akadtinggi,case p001akadtinggi when '1' then 'Bachelor' when '2' then 'Master Degree' when '3' then 'Diploma' end as akadtggi,p001kpenaja,p001tkhpohon,p001status,CASE 
    WHEN p001status = '' THEN 'Draft'
    WHEN p001status IS NULL THEN 'Draft'
    WHEN p001status = '0' THEN 'New'
    WHEN p001status = '1' THEN 'Approved(PPS)'
    WHEN p001status = '2' THEN 'Approved(Faculty1)'
    WHEN p001status = '3' THEN 'Gagal Fakulti1'
    WHEN p001status = '4' THEN 'Pindah Fakulti'
    WHEN p001status = '5' THEN 'Approved(Faculty2)'
    WHEN p001status = '6' THEN 'Gagal Fakulti2'
END AS statdesc,concat('http://localhost/pascav2/public/uploads/',p001upgambar) as urlgmbr,concat('http://localhost/pascav2/public/uploads/',p001uppassport) as urlnokppass,p001uppassport,concat('http://localhost/pascav2/public/uploads/',p001uptrans) as urlcert,concat('http://localhost/pascav2/public/uploads/',p001upproposal) as urlpro,concat('http://localhost/pascav2/public/uploads/',p001upmuet) as urlupbi,p001cgpa,p001unilama,p001bilexp,p001catatan,(select c028keterangan from ppsdblocal.c028 where c028kod=p001knegaracgpa) as negunilama,p001knegaracgpa,p001cgpa2,p001knegaracgpa2,p001unilama2,
p001ejenname,p001ejenemail,case p001laluanmohon when 'SP' then 'Normal' when 'AP' then 'APEL.A Qualification' end as laluan,p001laluanmohon,case p001setujutransfer when '1' then 'Pemohon bersetuju untuk menerima tawaran program oleh pihak UniSZA yang bersesuai dengan permohonan' when '0' then 'Pemohon kekal untuk pilihan sedia ada' end as setujutransfer,p001setujutransfer,p001nooku,p001faxno,p001offno,p001faxnot,p001offnot,
p001alamatneg,p001alamatnegt,p001notelt,p001nohpt,p001muet,CASE  
WHEN p001katbi = 'MT' THEN 'MUET' 
WHEN p001katbi = 'IE' THEN 'IELTS'
WHEN p001katbi = 'TF' THEN 'TOEFL'
WHEN p001katbi = 'CEFR' THEN 'CEFR' end as bidesc,p001noreg,p001tkhexm
FROM ppsdblocal.p001 left join ppsdblocal.z013a z13a on z13a.z013akod = p001kcacat  WHERE p001nokp='$idpemohon'");

//print_r($selectMohon);
//print_r($idpemohon);
     
        $result = $selectMohon->getRow();

        if ($result != null)
        return $this->response->setJSON(['status' => 'success', 'msg' => 'retrive success', 'data' => $result]);
        else
        return $this->response->setJSON(['status' => 'failed', 'msg' => 'Required parameter.']);
    }

    public function countpermohonan() {
//nt kene add filter where session user n ptj
        $db = Config::connect();

        $selectMohon= $db->query("select(SELECT count(p.p001nokp)as bildraf from ppsdblocal.p001 p where p.p001status ='0') as bildraf,
(SELECT count(p.p001nokp)as bildraf1 from ppsdblocal.p001 p where p.p001status is null or p.p001status='') as bildraf1,
(SELECT count(p.p001nokp)as billulusf from ppsdblocal.p001 p where p.p001status in('2','1')) as billulusf,
(SELECT count(p.p001nokp)as bilpindahf from ppsdblocal.p001 p where p.p001status ='4') as bilpindahf,
(SELECT count(p.p001nokp)as bilgagalf from ppsdblocal.p001 p where p.p001status ='3') as bilgagalf,
(SELECT count(p.p001nokp)as bilprocessf from ppsdblocal.p001 p where p.p001status in ('3','4')) as bilprocessf");

        $result = $selectMohon->getRow();

        if ($result != null)
        return $this->response->setJSON(['status' => 'success', 'msg' => 'retrive success', 'data' => $result]);
        else
        return $this->response->setJSON(['status' => 'failed', 'msg' => 'Required parameter.']);

    }
    public function updsaringan()
    {
    //$session = session();
    //$user = $session->get('username');// nt ret dr session staf fakulti
    
    $db = \Config\Database::connect();

    // Use ISO date format
    $cur = date('Y-m-d');
    $cur1 = date('Y-m-d H:i:s');

    $input = $this->request->getJSON();
    //error_log(json_encode($input));
   
    $tindakanPengesahan   = !empty($input->tindakanPengesahan) ? $input->tindakanPengesahan : null;
    $catatanPengesahan    = !empty($input->catatanPengesahan) ? $input->catatanPengesahan : null;
    $nokpform             = !empty($input->nokpform) ? $input->nokpform : null;
    $kdprogrambaru      = !empty($input->kdprogrambaru) ? $input->kdprogrambaru : null;

     //select record mohon program asal
    $selectMohonpre = $db->query("SELECT p001norujuk as rujukan from ppsdblocal.p001 where p001nokp='$nokpform'");
    $result = $selectMohonpre->getRow();
    $rujukan = $result->rujukan;
   
   $update = $db->query("UPDATE ppsdblocal.p001 SET p001status = ?, p001tkhstatus  = ?,p001catatan = ? WHERE p001nokp = ?", 
   [$tindakanPengesahan,$cur,$catatanPengesahan,$nokpform]);

  // error_log("tindakanPengesahan: " . json_encode($tindakanPengesahan));

    // $update = $this->db->table('ppsdblocal.p001')->where('p001nokp',$input->nokpform)->update($Data);
    $update = $db->query("UPDATE ppsdblocal.p001 SET p001status = ?, p001tkhstatus = ?, p001catatan = ? WHERE p001nokp = ?", 
   [$tindakanPengesahan, $cur, $catatanPengesahan, $nokpform]);

    if (!$update) {
        $error = $db->error(); // Get database error
        error_log("Database error: " . json_encode($error));
        return $this->response->setJSON(['status' => 'error', 'msg' => 'Update failed', 'error' => $error]);
    }

    if($update && $tindakanPengesahan == '4'){
         // insert into table p001d
         $sqlinsertQuery = $db->table('ppsdblocal.p001d')->insert([
            'p001dnorujuk'               => $rujukan,
            'p001dnokp'                  => $nokpform,
            'p001dkprogbr'               => $kdprogrambaru,
            'p001statsah'                => '0',
            'p001dassign'                => $rujukan,
            'p001dassignthcreate'        => $cur1,
        ]);
   }
    
       
    return $this->response->setJSON(['status' => 'success', 'msg' => 'Update successful']);

    }
}