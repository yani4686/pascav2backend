<?php


namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;
use App\Models\ApplyModel;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\Database\Config;

class LulusPpsController extends ResourceController
{
    use ResponseTrait;
    protected $modelName = 'App\Models\ApplyModel';
    protected $format    = 'json';

    /**
     * Fetch and return JSON data.
     */
    public function retpermohonansaring() {

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
        from ppsdblocal.p001 where p001status not in ('','0')");
     
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
p001nohp,p001kcacat,z13.z013jenkcctn,p001akadtinggi,case p001akadtinggi when '1' then 'Bachelor' when '2' then 'Master Degree' when '3' then 'Diploma' end as akadtggi,p001kpenaja,p001tkhpohon,p001status,CASE 
    WHEN p001status = '' THEN 'Draft'
    WHEN p001status IS NULL THEN 'Draft'
    WHEN p001status = '0' THEN 'New'
    WHEN p001status = '1' THEN 'Approved(PPS)'
    WHEN p001status = '2' THEN 'Approved(Faculty1)'
    WHEN p001status = '3' THEN 'Gagal Fakulti1'
    WHEN p001status = '4' THEN 'Pindah Fakulti'
    WHEN p001status = '5' THEN 'Approved(Faculty2)'
    WHEN p001status = '6' THEN 'Gagal Fakulti2'
END AS statdesc,concat('http://localhost/pascav2/public/uploads/',p001upgambar) as urlgmbr,concat('http://localhost/pascav2/public/uploads/',p001uppassport) as urlnokppass,p001uppassport,concat('http://localhost/pascav2/public/uploads/',p001uptrans) as urlcert,concat('http://localhost/pascav2/public/uploads/',p001upproposal) as urlpro,p001cgpa,p001unilama,p001bilexp,(select c028keterangan from ppsdblocal.c028 where c028kod=p001knegaracgpa) as negunilama,p001knegaracgpa,p001cgpa2,p001knegaracgpa2,p001unilama2,
p001ejenname,p001ejenemail,case p001laluanmohon when 'SP' then 'Normal' when 'AP' then 'APEL.A Qualification' end as laluan,p001laluanmohon,case p001setujutransfer when '1' then 'Pemohon bersetuju untuk menerima tawaran program oleh pihak UniSZA yang bersesuai dengan permohonan' when '0' then 'Pemohon kekal untuk pilihan sedia ada' end as setujutransfer,p001setujutransfer,p001nooku,p001faxno,p001offno,p001faxnot,p001offnot,p001cttnlulus,
p001alamatneg,p001alamatnegt,p001notelt,p001nohpt 
FROM ppsdblocal.p001 left join ppsdblocal.z013 z13 on z13.z013kodjenkcctn = p001kcacat  WHERE p001nokp='$idpemohon'");

//print_r($selectMohon);
//print_r($idpemohon);
     
        $result = $selectMohon->getRow();

        if ($result != null)
        return $this->response->setJSON(['status' => 'success', 'msg' => 'retrive success', 'data' => $result]);
        else
        return $this->response->setJSON(['status' => 'failed', 'msg' => 'Required parameter.']);
    }

    public function countpermohonanpps() {

        $db = Config::connect();

        $selectMohon= $db->query("select(SELECT count(p.p001nokp)as bildraf from ppsdblocal.p001 p where p.p001status ='0') as bildraf,
(SELECT count(p.p001nokp)as bildraf1 from ppsdblocal.p001 p where p.p001status is null or p.p001status='') as bildraf1,
(SELECT count(p.p001nokp)as billulusf from ppsdblocal.p001 p where p.p001status in ('2','5')) as billulusf,
(SELECT count(p.p001nokp)as billulusf from ppsdblocal.p001 p where p.p001status ='1') as billuluspps,
(SELECT count(p.p001nokp)as bilpindahf from ppsdblocal.p001 p where p.p001status ='4') as bilpindahf,
(SELECT count(p.p001nokp)as bilgagalf from ppsdblocal.p001 p where p.p001status in ('3','6')) as bilgagalf");

        $result = $selectMohon->getRow();

        if ($result != null)
        return $this->response->setJSON(['status' => 'success', 'msg' => 'retrive success', 'data' => $result]);
        else
        return $this->response->setJSON(['status' => 'failed', 'msg' => 'Required parameter.']);

    }
    public function updsaringanpps()
    {
    //$session = session();
    //$user = $session->get('username');// nt ret dr session staf fakulti
    
    $db = \Config\Database::connect();

    // Use ISO date format
    $cur = date('Y-m-d');

    $suratA ='UniSZA.600-4_2_2 Jld.1';
    $suratBC ='UniSZA.600-4_2_4 Jld.1';

    $checkmaxidsurat = $db->query('SELECT max(SUBSTRING(p001nosrttawar,25,2)) as bilmax from ppsdblocal.p001');
    $result = $checkmaxidsurat->getRow();
    $maxid= ($result->bilmax ?? 0) + 1;

    // $kodrujuk = $db->query("SELECT CONCAT('$suratA','(','$maxid',')') as kodrujuk");
    // $resultQuery = $kodrujuk->getRow();
    // $kdrujuk = $resultQuery->kodrujuk;

    $input = $this->request->getJSON();
    //error_log(json_encode($input));
   

    $tindakanPengesahan   = !empty($input->tindakanPengesahan) ? $input->tindakanPengesahan : null;
    $jenistawaran  = !empty($input->JenisTawaran) ? $input->JenisTawaran : null;
    $catatanPengesahan    = !empty($input->catatanPengesahan) ? $input->catatanPengesahan : null;
    $nokpform            = !empty($input->nokpform) ? $input->nokpform : null;

    if($jenistawaran == 'B'||$jenistawaran == 'C'){

       $kodrujuk = $db->query("SELECT CONCAT('$suratBC','(','$maxid',')') as kodrujuk");

    }elseif($jenistawaran == 'A'){
       $kodrujuk = $db->query("SELECT CONCAT('$suratA','(','$maxid',')') as kodrujuk");
    }else{
        "empty";
    }

    $resultQuery = $kodrujuk->getRow();
    $kdrujuk = $resultQuery->kodrujuk;

   //  $kodrujukResult = stripslashes($kdrujuk);
    $kodrujukResult1 = str_replace('_/', '/', $kdrujuk);
   
//    $update = $db->query("UPDATE ppsdblocal.p001 SET p001status = ?, p001tkhstatus  = ?,p001catatan = ? WHERE p001nokp = ?", 
//    [$tindakanPengesahan,$cur,$catatanPengesahan,$nokpform]);

    // $Data = [
    //     'p001status'     => esc($input->tindakanPengesahan),
    //     'p001tkhstatus ' => $cur,
    //     'p001catatan '   => esc($input->catatanPengesahan),
    //     'p001nokp '   => esc($input->nokpform),
    // ];

    // $update = $this->db->table('ppsdblocal.p001')->where('p001nokp',$input->nokpform)->update($Data);
    $update = $db->query("UPDATE ppsdblocal.p001 SET p001status = ?, p001tkhstatus = ?,p001jnstawar = ?,p001nosrttawar =?,p001cttnlulus = ?,p001pelulus = ? WHERE p001nokp = ?", 
   [$tindakanPengesahan, $cur,$jenistawaran,$kodrujukResult1, $catatanPengesahan,'yani', $nokpform]);

   //error_log("update: " . json_encode($kodrujukResult1));

    if (!$update) {
        $error = $db->error(); // Get database error
        error_log("Database error: " . json_encode($error));
        return $this->response->setJSON(['status' => 'error', 'msg' => 'Update failed', 'error' => $error]);
    }


        // $subject = "Your Application Has Approve";
        // $message = "Click the link to download offer letter:\n";
        // $message .= "http://localhost/pascav2/public/";
        // $headers = "From: yani4686@gmail.com";

        // //test send ke local shj
        // if (mail($emel, $subject, $message, $headers)) {
        //     $data['success'] = 'successemail';
        // } else {
        //     $data['success'] = 'failedemail';
        // }    

    return $this->response->setJSON(['status' => 'success', 'msg' => 'Update successful']);

    }

    public function countcalonjaya() {

        $db = Config::connect();

        $selectMohon= $db->query("select(SELECT count(p.p001nokp)as billuluspps from ppsdblocal.p001 p where p.p001status ='1' and p.p001ststerimatwr is null and p.p001savesurat is null) as billuluspps,
(SELECT count(p.p001nokp)as bilterima from ppsdblocal.p001 p where p.p001ststerimatwr is not null and p.p001savesurat is not null) as bilterima
");
        $result = $selectMohon->getRow();

        if ($result != null)
        return $this->response->setJSON(['status' => 'success', 'msg' => 'retrive success', 'data' => $result]);
        else
        return $this->response->setJSON(['status' => 'failed', 'msg' => 'Required parameter.']);

    }

    public function retcalonjaya() {

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
            p001kcacat,p001akadtinggi,p001kpenaja,p001tkhpohon,p001status,p001upgambar,p001uppassport,p001cgpa,p001unilama,p001bilexp,p001knegaracgpa,p001cgpa2,p001knegaracgpa2,p001unilama2,p001ejenname,p001ejenemail,p001laluanmohon,p001setujutransfer,p001nooku,p001faxno,p001offno,p001faxnot,p001offnot,p001alamatneg,p001alamatnegt,p001notelt,p001nohpt,p001ststerimatwr 
            from ppsdblocal.p001 where p001status ='1'");
         
            $result = $selectMohon->getResult();
    
            // return $this->response->setJSON($result);
          //  log_message('debug', 'retPermohonan API endpoint called');
         //  error_log("debug: " . 'retPermohonan API endpoint called');
    
            if ($result != null)
            return $this->response->setJSON(['status' => 'success', 'msg' => 'retrive success', 'data' => $result]);
            else
            return $this->response->setJSON(['status' => 'failed', 'msg' => 'Required parameter.']);
    
        }
}