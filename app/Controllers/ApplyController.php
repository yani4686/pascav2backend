<?php

namespace App\Controllers;

use App\Models\ApplyModel;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\Database\Config;
use Dompdf\Dompdf;
use Dompdf\Options;

class ApplyController extends ResourceController
{
    protected $modelName = 'App\Models\ApplyModel';
    protected $format    = 'json';

    /**
     * Fetch and return JSON data.
     */
    public function getkodprogram()
    {
        // Path to your JSON file
        $filePath = WRITEPATH . 'data/kodprogram.json';

        // Check if file exists
        if (!file_exists($filePath)) {
            return $this->respond(['error' => 'File not found'], 404);
        }

        // Load the JSON data
        $jsonData = file_get_contents($filePath);
        $data = json_decode($jsonData, true);

        // Return the JSON response
        return $this->respond($data, 200);
    }

    public function getkodnegara()
    {
        // Path to your JSON file
        $filePath = WRITEPATH . 'data/kodnegara.json';

        // Check if file exists
        if (!file_exists($filePath)) {
            return $this->respond(['error' => 'File not found'], 404);
        }

        // Load the JSON data
        $jsonData = file_get_contents($filePath);
        $data = json_decode($jsonData, true);

        // Return the JSON response
        return $this->respond($data, 200);
    }

    public function getkodnegeri()
    {
        $db = Config::connect();

        $Query = $db->query("SELECT a090knegeri,a090negeri FROM ppsdblocal.a090 WHERE a090knegeri NOT LIKE '%-%' and a090knegeri not in ('99','61','62','66','67','68','71','74','75','88','91') order by a090knegeri");
        $result = $Query->getResult();

        return $this->response->setJSON($result);
    }

    public function getkodkecacatan()
    {
        $db = Config::connect();

        $Query = $db->query("SELECT z013akod,z013abi FROM ppsdblocal.z013a where z013abi<>'' order by z013abi");
        $result = $Query->getResult();

        return $this->response->setJSON($result);
    }
    public function getkodpenaja()
    {
        $db = Config::connect();

        $Query = $db->query("SELECT a010kpenaja,a010penaja FROM ppsdblocal.a010 order by a010penaja");
        $result = $Query->getResult();

        return $this->response->setJSON($result);
    }

    public function getkoddun()
    {
        $db = Config::connect();

        $Query = $db->query("SELECT z041kod,z041dun,z041parlimen FROM ppsdblocal.z041");
        $result = $Query->getResult();

        return $this->response->setJSON($result);
    }

    public function getkodlayak()
    {
        $db = Config::connect();

        $Query = $db->query("SELECT z038kodmohes,z038kelayakan  FROM ppsdblocal.z038 where z038kodmohes<>'-1' and z038kodmohes<>'-2'");
        $result = $Query->getResult();

        return $this->response->setJSON($result);
    }

    public function getkodincome()
    {
        $db = Config::connect();

        $Query = $db->query("SELECT DISTINCT z039kodmohes,z039pendapatan  FROM ppsdblocal.z039 WHERE z039id<> '14' AND z039id<> '15' AND z039id<> '16' ");
        $result = $Query->getResult();

        return $this->response->setJSON($result);
    }


    public function getkodsek()
    {
        $db = Config::connect();

        $Query = $db->query("SELECT z040kodmohes,z040jnssekolah  FROM ppsdblocal.z040 WHERE z040kod<>'1' AND z040kod<>'2' ");
        $result = $Query->getResult();

        return $this->response->setJSON($result);
    }


    public function DisplayProfile(){

        $session = session();

        $user   = $session->get('username');
        $idsess = $session->get('id');

        $db = Config::connect();

        $loginQuery = $db->query("SELECT p001nama,p001kprog,p001kaedah,CASE 
        WHEN p001kaedah = '7' THEN 'COURSEWORK'
        WHEN p001kaedah = '8' THEN 'RESEARCH'
        WHEN p001kaedah = '9' THEN 'MIX_MODE' end as desckaedah,
        p001modebelajar,CASE  
        WHEN p001modebelajar = '1' THEN 'Full Time'
        WHEN p001modebelajar = '2' THEN 'Part Time' end as descmode,p001tajuk,p001penyelia,p001tkhlahir,p001kwarga,p001kwarganegara,CASE 
        p001kwarganegara 
        WHEN '1' THEN 'MALAYSIAN' 
        WHEN '2' THEN 'NON MALAYSIAN' end as desckwarga,p00katwarga,p001alamat1,p001alamat2,p001bandar,p001knegeri,p001poskod,p001alamatt1,p001alamatt2,p001bandart,p001knegerit,p001poskodt,p001notel,p001nohp,p001ststerimatwr,
        p001kcacat,p001muet,p001akadtinggi,p001kpenaja,p001status,CASE 
    WHEN p001status = '' THEN 'Draft'
    WHEN p001status IS NULL THEN 'Draft'
    WHEN p001status = '0' THEN 'New'
    WHEN p001status = '1' THEN 'Approved'
    WHEN p001status = '2' THEN 'Lulus Fakulti1'
    WHEN p001status = '3' THEN 'Gagal Fakulti1'
    WHEN p001status = '4' THEN 'Pindah Fakulti'
    WHEN p001status = '5' THEN 'Lulus Fakulti2'
    WHEN p001status = '6' THEN 'Gagal Fakulti2'
END AS statdesc,p001upgambar,p001uppassport,p001uptrans,p001upproposal,p001upresit,p001upmuet,p001cgpa,p001unilama,p001bilexp,p001knegaracgpa,p001cgpa2,p001knegaracgpa2,p001unilama2,p001ejenname,p001ejenemail,p001laluanmohon,p001setujutransfer,p001nooku,p001faxno,p001offno,p001faxnot,p001offnot,p001amthouse,p001alamatneg,p001alamatnegt,p001notelt,p001nohpt,
        CASE 
        p00katwarga WHEN '1' THEN 'Malaysian' 
        WHEN '2' THEN 'Non Malaysian' end as ktrgwarga,p00emel,p00usrid,concat(p001alamat1,' ',p001alamat2,' ',p001bandar,' ',p001poskod) as almtsemasa,p001knegeri as negeri,p001katbi,p001noreg,p001tkhexm,p001uplaluan,p001upworkex,p001ststerimatwr,p001nosrttawar
        from ppsdblocal.p00daftar,ppsdblocal.p001 where p00username='$user' and p00usrid=p001nokp");
        $result = $loginQuery->getRow();

        return $this->response->setJSON($result);

    }

    public function DisplayProfilep001(){

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
        WHEN '2' THEN 'NON MALAYSIAN' end as desckwarga,p001kbumi,p001alamat1,p001alamat2,p001bandar,p001knegeri,p001poskod,p001alamatt1,p001alamatt2,p001bandart,p001knegerit,p001poskodt,p001notel,p001nohp,p001email,p001ststerimatwr,
        p001kcacat,p001muet,p001akadtinggi,CASE p001akadtinggi 
        WHEN '1' THEN 'Bachelor / Equivalent'
        WHEN '2' THEN 'Master Degree / Equivalent'
        WHEN '3' THEN 'Diploma' end as descakadttg,p001kpenaja,p001status,CASE 
        WHEN p001status = '' THEN 'Draft'
        WHEN p001status IS NULL THEN 'Draft'
        WHEN p001status = '0' THEN 'New'
        WHEN p001status = '1' THEN 'Approved'
        WHEN p001status = '2' THEN 'Lulus Fakulti1'
        WHEN p001status = '3' THEN 'Gagal Fakulti1'
        WHEN p001status = '4' THEN 'Pindah Fakulti'
        WHEN p001status = '5' THEN 'Lulus Fakulti2'
        WHEN p001status = '6' THEN 'Gagal Fakulti2'
        END AS statdesc,p001upgambar,p001uppassport,p001uptrans,p001upproposal,p001upresit,p001upmuet,p001cgpa,p001unilama,p001bilexp,p001knegaracgpa,p001cgpa2,p001knegaracgpa2,p001unilama2,p001ejenname,p001ejenemail,p001laluanmohon,p001setujutransfer,p001nooku,p001faxno,p001offno,p001faxnot,p001offnot,p001amthouse,p001alamatneg,p001alamatnegt,p001notelt,p001nohpt,
        CASE 
        p001kbumi 
        WHEN '1' THEN 'Malaysian' 
        WHEN '2' THEN 'Non Malaysian' end as ktrgwarga,concat(p001alamat1,' ',p001alamat2,' ',p001bandar,' ',p001poskod) as almtsemasa,concat(p001alamatt1,' ',p001alamatt2,' ',p001bandart,' ',p001poskodt) as almttetap,p001katbi,p001noreg,p001tkhexm,p001uplaluan,p001upworkex,p001ststerimatwr,p001nosrttawar,
        CASE p001katbi
        WHEN 'MT' THEN 'MUET'
        WHEN 'IE' THEN 'IELTS'
        WHEN 'TF' THEN 'TOEFL'
        WHEN 'CF' THEN 'CEFR' end descbi,p001noreg,p001tkhexm
        from ppsdblocal.p001 where p001email='$idsess'");
        $result = $loginQuery->getRow();

        return $this->response->setJSON($result);

    }

    public function InsStep1()
    {
        $session = session();

        $user = $session->get('username');
        $idsess = $session->get('id');

        //hardcode dulu sesi pasca nnt retrieve dari table a042
        $sesi = 'JAN-2025';

        $db = Config::connect();

        /* ret file name upload */
        $fileQuery = $db->query("SELECT p001nokp,p001upgambar,p001uplaluan from ppsdblocal.p001 where p001email='$idsess'");
        $result = $fileQuery->getRow();
        
        $p001nokp = $result->p001nokp;

        $existingpasspic = $result->p001upgambar;
        $existinguplaluan = $result->p001uplaluan;

        //##########
         // check file name and path
        // $file = $this->request->getFile('file1');

        // if ($file && $file->isValid()) {
        //     // Guess the file extension and define the new file name
        //     $ext = $file->guessExtension();
        //     $newNamePic = $p001nokp . '_pic.' . $ext;
        
        //     // Define the upload directory
        //     $uploadDir = WRITEPATH . 'uploads/';
        
        //     if (!is_dir($uploadDir)) {
        //         mkdir($uploadDir, 0777, true);
        //     }
        
        //     // Define the absolute path for the uploaded file
        //     $absolutePath = $uploadDir . $newNamePic;
        
        //    // Check if the file already exists before moving the new file
        //     if (file_exists($absolutePath)) {
        //         // Generate a backup name with a timestamp
        //         $backupName = pathinfo($newNamePic, PATHINFO_FILENAME) . '_backup_' . time() . '.' . pathinfo($newNamePic, PATHINFO_EXTENSION);
        //         $backupPath = $uploadDir . $backupName;

        //         // Rename (backup) the existing file
        //         if (!rename($absolutePath, $backupPath)) {
        //             return $this->response->setJSON([
        //                 'success' => false,
        //                 'message' => 'Failed to backup the existing file.',
        //             ]);
        //         }

        //         // Log backup action
        //         error_log("Backup created: " . $backupPath);
        //     }

        //     // Now move the new file
        //     if (!$file->move($uploadDir, $newNamePic)) {
        //         return $this->response->setJSON([
        //             'success' => false,
        //             'message' => 'Failed to upload the file.',
        //         ]);
        //     }

        //     // Log the successful upload
        //     error_log("Uploaded file: " . $absolutePath);
        // }
        // else{
        //     $newNamePic = $newNamePic ?? $existingpasspic;
        // }
        //###########

        $uploadDir = WRITEPATH . 'uploads/';
         error_log('Resolved path: ' . WRITEPATH . 'uploads/');
     
         // Ensure upload directory exists
         if (!is_dir($uploadDir)) {
             mkdir($uploadDir, 0777, true);
         }

         // File upload logic
         $newNamePic = $this->handleFileUpload($this->request->getFile('file1'), $uploadDir, $p001nokp, 'pic');
         $newNameFilelaluan = $this->handleFileUpload($this->request->getFile('filelalu'), $uploadDir, $p001nokp, 'laluan');      
         
         $newNamePic = $newNamePic ?? $existingpasspic;
         $newNameFilelaluan = $newNameFilelaluan ?? $existinguplaluan;

    $input = $this->request->getPost();

    $laluan      = !empty($input['laluan']) ? $input['laluan'] : null;//$input['laluan'] ?? '';
    $kppass      = !empty($input['kppass']) ? $input['kppass'] : null;//$input["kppass"] ?? '';
    $fullname    = !empty($input['fullname']) ? $input['fullname'] : null;//$input['fullname'] ?? '';
    $dob         = !empty($input['dob']) ? $input['dob'] : '0000-00-00';//$input['dob'] ?? '';
    $statwarga     = !empty($input['wargast']) ? $input['wargast'] : null;//$input['warganeg'] ?? '';
    $warganeg     = !empty($input['warganeg']) ? $input['warganeg'] : null;//$input['warganeg'] ?? '';
    $stsoku      = !empty($input['stsoku']) ? $input['stsoku'] : null;//$input['stsoku'] ?? '';
    $corradd     = !empty($input['corradd']) ? $input['corradd'] : null;//$input['corradd'] ?? '';
    $corradd1     = !empty($input['corradd1']) ? $input['corradd1'] : null;//$input['corradd1'] ?? '';
    $postcorradd  = !empty($input['postcorradd']) ? $input['postcorradd'] : null;//$input['postcorradd'] ?? '';
    $bndrcorradd  = !empty($input['bndrcorradd']) ? $input['bndrcorradd'] : null;//$input['bndrcorradd'] ?? '';
    $kdnegeri    = !empty($input['kdnegeri']) ? $input['kdnegeri'] : null;//$input['kdnegeri'] ?? '';
    $kdnegara    = !empty($input['kdnegara']) ? $input['kdnegara'] : null;//$input['kdnegara'] ?? '';
    $notel       = !empty($input['notel']) ? $input['notel'] : null;//$input['notel'] ?? '';
    $hpno        = !empty($input['hpno']) ? $input['hpno'] : null;//$input['hpno'] ?? '';
    $offno       = !empty($input['offno']) ? $input['offno'] : null;//$input['offno'] ?? '';
    $faxno       = !empty($input['faxno']) ? $input['faxno'] : null;//$input['faxno'] ?? '';
    $homeadd     = !empty($input['homeadd']) ? $input['homeadd'] : null;//$input['homeadd'] ?? '';
    $homeadd1    = !empty($input['homeadd1']) ? $input['homeadd1'] : null;//$input['homeadd1'] ?? '';
    $posthomeadd = !empty($input['posthomeadd']) ? $input['posthomeadd'] : null;//$input['posthomeadd'] ?? '';
    $bndrhomeadd = !empty($input['bndrhomeadd']) ? $input['bndrhomeadd'] : null;//$input['bndrhomeadd'] ?? '';
    $kdnegerihome= !empty($input['kdnegerihome']) ? $input['kdnegerihome'] : null;//$input['kdnegerihome'] ?? '';
    $kdnegarahome= !empty($input['kdnegarahome']) ? $input['kdnegarahome'] : null;//$input['kdnegarahome'] ?? '';
    $notelhome   = !empty($input['notelhome']) ? $input['notelhome'] : null;//$input['notelhome'] ?? '';
    $hpnohome    = !empty($input['hpnohome']) ? $input['hpnohome'] : null;//$input['hpnohome'] ?? '';
    $offnohome   = !empty($input['offnohome']) ? $input['offnohome'] : null;//$input['offnohome'] ?? '';
    $faxnohome   = !empty($input['faxnohome']) ? $input['faxnohome'] : null;//$input['faxnohome'] ?? '';
    $no_oku      = !empty($input['no_oku']) ? $input['no_oku'] : null;//$input['no_oku'] ?? '';

    $updateQuery = $db->query(
        "UPDATE ppsdblocal.p001 SET 
            p001nokp = ?,
            p001nama = ?, 
            p001sesimsk = ?, 
            p001tkhlahir = ?, 
            p001kwarganegara = ?, 
            p001kwarga = ?, 
            p001alamat1 = ?, 
            p001alamat2 = ?, 
            p001bandar = ?, 
            p001knegeri = ?, 
            p001poskod = ?, 
            p001alamatt1 = ?, 
            p001alamatt2 = ?, 
            p001bandart = ?, 
            p001knegerit = ?, 
            p001poskodt = ?, 
            p001notel = ?, 
            p001nohp = ?, 
            p001kcacat = ?, 
            p001upgambar = ?, 
            p001laluanmohon = ?, 
            p001nooku = ?, 
            p001faxno = ?, 
            p001offno = ?, 
            p001faxnot = ?, 
            p001offnot = ?, 
            p001alamatneg = ?, 
            p001alamatnegt = ?, 
            p001notelt = ?, 
            p001nohpt = ?, 
            p001uplaluan = ? 
         WHERE p001email =?",
        [
            $kppass, $fullname, $sesi, $dob, $statwarga, $warganeg, $corradd, $corradd1, $bndrcorradd, 
            $kdnegeri, $postcorradd, $homeadd, $homeadd1, $bndrhomeadd, $kdnegerihome, 
            $posthomeadd, $notel, $hpno, $stsoku, $newNamePic, $laluan, $no_oku, $faxno, 
            $offno, $faxnohome, $offnohome, $kdnegara, $kdnegarahome, $notelhome, 
            $hpnohome, $newNameFilelaluan, $idsess
        ]
    );
    

        if ($db->affectedRows() > 0) {
        return $this->response->setJSON(['success' => 'ok']);
        } else {
        error_log("SQL Error: " . json_encode($db->error()));
        return $this->response->setJSON(['success' => 'ko']);
        }

    // error_log("sqlupdateQuery: " . $sqlupdateQuery); 
    }
    //step2
    public function InsStep2()
    {
        $session = session();

        $user = $session->get('username');
        $idsess = $session->get('id');

        $db = Config::connect();

        // $loginQuery = $db->query("SELECT p001nokp from ppsdblocal.p00daftar,ppsdblocal.p001 where p00username='$user' and p000statsahreg = 1 and p00usrid=p001nokp");
        // $result = $loginQuery->getRow();
        // $p001nokp = $result->p001nokp;

        // Fetch user details
        $loginQuery = $db->query("SELECT p001nokp,p001upworkex FROM ppsdblocal.p001 WHERE p001email = ?", [$idsess]);

        $result = $loginQuery->getRow();
        if (!$result) {
        return $this->response->setJSON([
        'success' => false,
        'message' => 'User not found or registration not approved.',
        ]);
        }

        $p001nokp = $result->p001nokp;
        $existingExpr = $result->p001upworkex;

        $uploadDir = WRITEPATH . 'uploads/';
        // error_log('Resolved path: ' . WRITEPATH . 'uploads/');
     
         // Ensure upload directory exists
         if (!is_dir($uploadDir)) {
             mkdir($uploadDir, 0777, true);
         }

         // File upload logic
    $newNameExpr = $this->handleFileUpload($this->request->getFile('fileexpr'), $uploadDir, $p001nokp, 'work');
    // Retain existing values if no new files are uploaded
    $newNameExpr = $newNameExpr ?? $existingExpr;

        $input = $this->request->getPost();

        $kaedah             = !empty($input['modest']) ? $input['modest'] : null;
        $kampus             = !empty($input['kampus']) ? $input['kampus'] : null;
        $modebelajar        = !empty($input['typest']) ? $input['typest'] : null;
        $program            = !empty($input['kdprg']) ? $input['kdprg'] : null;
        $highedu            = !empty($input['highedu']) ? $input['highedu'] : null;
        $highuniname        = !empty($input['highuni']) ? $input['highuni'] : null;
        $highunicgpa        = !empty($input['highcgpa']) ? $input['highcgpa'] : null;
		$highcountryuni     = !empty($input['highunicountry']) ? $input['highunicountry'] : null;
		$unimasterphd       = !empty($input['unimasterphd']) ? $input['unimasterphd'] : null;
		$cgpamasterphd      = !empty($input['cgpamasterphd']) ? $input['cgpamasterphd'] : null;
		$masterphdcountry   = !empty($input['masterphdcountry']) ? $input['masterphdcountry'] : null;
        $exp                = !empty($input['exp']) ? $input['exp'] : null;
        $proresearch        = !empty($input['proresearch']) ? $input['proresearch'] : null;
        $prosv              = !empty($input['prosv']) ? $input['prosv'] : null;
        $typebi             = !empty($input['bitype']) ? $input['bitype'] : null;
        $resultbi           = !empty($input['resultaddbi']) ? $input['resultaddbi'] : null;
        $noregbi            = !empty($input['registerid']) ? $input['registerid'] : null;
        $datexm             = !empty($input['datexm']) ? $input['datexm'] : null;
         // '{' . implode(',', $datexm) . '}'

        // Save data to the database    
         // Update database
    $updateQuery = $db->query("UPDATE ppsdblocal.p001 SET p001kprog = ?, p001tajuk = ?, p001penyelia = ?,p001kaedah = ?,p001modebelajar = ?,p001akadtinggi = ?,p001cgpa = ?,p001unilama=?,p001bilexp=?,p001kkampus=?,p001upworkex=?,
    p001knegaracgpa=?,p001cgpa2=?,p001katbi=?,p001muet=?,p001noreg=?,p001tkhexm=? WHERE p001nokp = ?",[$program, $proresearch,$prosv,$kaedah,$modebelajar,$highedu,$highunicgpa,$highuniname,$exp,$kampus,$newNameExpr,$highcountryuni,$cgpamasterphd,$typebi,$resultbi,$noregbi,$datexm, $p001nokp]);

    if ($db->affectedRows() > 0) {
    return $this->response->setJSON(['success' => 'ok']);
    } else {
    error_log("SQL Error: " . json_encode($db->error()));
    return $this->response->setJSON(['success' => 'ko']);
    }
         
    }

     //step3
     public function InsStep3()
{
        $session = session();
        $user = $session->get('username');
        $idsess = $session->get('id');

        $db = Config::connect();

    // Fetch user details
    $loginQuery = $db->query("SELECT p001nokp,p001uppassport,p001uptrans,p001upproposal,p001upresit,p001upmuet
                              FROM ppsdblocal.p001 
                              WHERE p001email = ? ", [$idsess]);

    $result = $loginQuery->getRow();
    if (!$result) {
        return $this->response->setJSON([
            'success' => false,
            'message' => 'User not found or registration not approved.',
        ]);
    }

    $p001nokp          = $result->p001nokp;
    $existingPassport  = $result->p001uppassport;
    $existingCert      = $result->p001uptrans;
    $existingProposal  = $result->p001upproposal;
    $existingFee       = $result->p001upresit;
    $existingBi        = $result->p001upmuet;
   
    $uploadDir = WRITEPATH . 'uploads/';
   // error_log('Resolved path: ' . WRITEPATH . 'uploads/');
   if (!is_writable($uploadDir)) {
    error_log("Directory is not writable: " . $uploadDir);
    return;
}
    // Ensure upload directory exists
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }
        // File upload logic
    $newNameIcPass = $this->handleFileUpload($this->request->getFile('fileic'), $uploadDir, $p001nokp, 'ic');
    $newNameCert = $this->handleFileUpload($this->request->getFile('fileaka'), $uploadDir, $p001nokp, 'certificate');
    $newNamePro = $this->handleFileUpload($this->request->getFile('filePro'), $uploadDir, $p001nokp, 'proposal');
    $newNameFee = $this->handleFileUpload($this->request->getFile('fileFee'), $uploadDir, $p001nokp, 'receipt');
    $newNameBi = $this->handleFileUpload($this->request->getFile('fileEng'), $uploadDir, $p001nokp, 'result');
    
    // Retain existing values if no new files are uploaded
    $newNameIcPass = $newNameIcPass ?? $existingPassport;
    $newNameCert = $newNameCert ?? $existingCert;
    $newNamePro = $newNamePro ?? $existingProposal;
    $newNameFee = $newNameFee ?? $existingFee;
    $newNameBi = $newNameBi ?? $existingBi;

    // Update database
    $updateQuery = $db->query("UPDATE ppsdblocal.p001 SET p001uppassport = ?, p001uptrans = ?, p001upproposal = ?,p001upresit = ?,p001upmuet = ? WHERE p001nokp = ?", 
                              [$newNameIcPass, $newNameCert,$newNamePro,$newNameFee,$newNameBi, $p001nokp]);

    if ($db->affectedRows() > 0) {
        return $this->response->setJSON(['success' => 'ok']);
    } else {
        error_log("SQL Error: " . json_encode($db->error()));
        return $this->response->setJSON(['success' => 'ko']);
    }
}
// ins step4
public function InsStep4()
{
    $session = session();
    $user = $session->get('username');
    $idsess = $session->get('id');

    $db = Config::connect();

    // Fetch user details
    $loginQuery = $db->query("SELECT p001nokp,p001upwang,p001kpenaja
                              FROM ppsdblocal.p001 
                              WHERE p001email = ? ", [$idsess]);

    $result = $loginQuery->getRow();
    if (!$result) {
        return $this->response->setJSON([
            'success' => false,
            'message' => 'User not found or registration not approved.',
        ]);
    }

    $p001nokp = $result->p001nokp;
    $existingGuarantee= $result->p001upwang;
   
    $uploadDir = WRITEPATH . 'uploads/';
   // error_log('Resolved path: ' . WRITEPATH . 'uploads/');

    // Ensure upload directory exists
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }
        // File upload logic
    $newNameGuarantee = $this->handleFileUpload($this->request->getFile('fileGuarantee'), $uploadDir, $p001nokp, 'wang');  
    // Retain existing values if no new files are uploaded
    $newNameGuarantee = $newNameGuarantee ?? $existingGuarantee;

    $input = $this->request->getPost();

    $namaejen   = !empty($input['namaejen']) ? $input['namaejen'] : null;
    $emailejen  = !empty($input['emailejen']) ? $input['emailejen'] : null;
    $sponsor    = !empty($input['kdtaja']) ? $input['kdtaja'] : null ;
    $valueincome= !empty($input['income']) ? $input['income'] : null;

    // Update database
    $updateQuery = $db->query("UPDATE ppsdblocal.p001 SET p001kpenaja = ?, p001upwang  = ?,p001ejenname = ?,p001ejenemail=?, p001amthouse = ? WHERE p001nokp = ?", 
                              [$sponsor, $newNameGuarantee,$namaejen,$emailejen,$valueincome, $p001nokp]);

    if ($db->affectedRows() > 0) {
        return $this->response->setJSON(['success' => 'ok']);
    } else {
        error_log("SQL Error: " . json_encode($db->error()));
        return $this->response->setJSON(['success' => 'ko']);
    }
}

// ins step5
public function InsStep5()
{
    $session = session();
    $user = $session->get('username');
    $idsess = $session->get('id');
    
    if (!$user) {
        return $this->response->setJSON([
            'success' => false,
            'message' => 'User session not found.',
        ]);
    }

    $db = \Config\Database::connect();

    // Fetch user details
    $query = $db->query("SELECT p001nokp
                         FROM ppsdblocal.p001 
                         WHERE p001email = ? ", [$idsess]);

    $result = $query->getRow();

    if (!$result) {
        return $this->response->setJSON([
            'success' => false,
            'message' => 'User not found or registration not approved.',
        ]);
    }

    $p001nokp = $result->p001nokp;

    // Use ISO date format
    $cur = date('Y-m-d');

    $input = $this->request->getPost();

    $transfer = $input['stsacctkr'] ?? null;
    $sah = $input['sah'] ?? null;

    // Debugging: Log the POST data for analysis
    error_log(json_encode($this->request->getPost()));

    // Update database
    $update = $db->table('ppsdblocal.p001')
                 ->set([
                     'p001tkhpohon' => $cur,
                     'p001status' => $sah,
                     'p001setujutransfer' => $transfer,
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

public function generatePdfExample(){
    // Initialize Dompdf
    $options = new Options();
    $options->set('isHtml5ParserEnabled', true);
    $options->set('isRemoteEnabled', true);

    $dompdf = new Dompdf($options);

    // Fetch data for the last step (can be passed as session or parameters)
    $session = session();

    $user = $session->get('username');
    $idsess = $session->get('id');

    $db = Config::connect();

    $loginQuery = $db->query("SELECT p001nokp,p001nama,p001kprog,p001kaedah,p001modebelajar,p001tajuk,p001penyelia,p001tkhlahir,p001kwarga,p001kwarganegara,p001alamat1,p001alamat2,p001bandar,p001knegeri,p001poskod,p001alamatt1,p001alamatt2,p001bandart,p001knegerit,p001poskodt,p001notel,p001nohp,
    p001kcacat,p001akadtinggi,p001kpenaja,p001status,p001upgambar,p001uppassport,p001cgpa,p001unilama,p001bilexp,p001knegaracgpa,p001cgpa2,p001knegaracgpa2,p001unilama2,p001ejenname,p001ejenemail,p001laluanmohon,p001setujutransfer,p001nooku,p001faxno,p001offno,p001faxnot,p001offnot,p001alamatneg,p001alamatnegt,p001notelt,p001nohpt,
    case p001kwarganegara when '1' then 'Malaysian' when '2' then 'Non Malaysian' end as ktrgwarga,p001email
    from ppsdblocal.p001 where p001email='$idsess' ");
    $result = $loginQuery->getRow();

   // return $this->response->setJSON($result); 
    

    $data = [
        'result' => $result,
       // 'content' => 'This is the content of the last step.',
    ];

    // Load a view for the PDF content
    $html = view('form/apply', $data);

    // Load HTML into Dompdf
    $dompdf->loadHtml($html);

    // Set paper size and orientation
    $dompdf->setPaper('A4', 'portrait');

    // Render the PDF
    $dompdf->render();

    // Output the PDF (force download or inline)
    return $this->response->setHeader('Content-Type', 'application/pdf')
                          ->setBody($dompdf->output())
                          ->setHeader('Content-Disposition', 'inline; filename="report.pdf"');
}

public function generatePdfSuratOffer(){
// Initialize Dompdf
$options = new Options();
$options->set('isHtml5ParserEnabled', true);
$options->set('isRemoteEnabled', true);

$dompdf = new Dompdf($options);

// Fetch data for the last step (can be passed as session or parameters)
$session = session();

$user = $session->get('username');
$idsess = $session->get('id');

$db = Config::connect();

$loginQuery = $db->query("SELECT p001nokp,p001nama,p001kprog,p001kaedah,p001modebelajar,p001tajuk,p001penyelia,p001tkhlahir,p001kwarga,p001kwarganegara,p001alamat1,p001alamat2,p001bandar,p001knegeri,p001poskod,p001alamatt1,p001alamatt2,p001bandart,p001knegerit,p001poskodt,p001notel,p001nohp,
p001kcacat,p001akadtinggi,p001kpenaja,p001status,p001upgambar,p001uppassport,p001cgpa,p001unilama,p001bilexp,p001knegaracgpa,p001cgpa2,p001knegaracgpa2,p001unilama2,p001ejenname,p001ejenemail,p001laluanmohon,p001setujutransfer,p001nooku,p001faxno,p001offno,p001faxnot,p001offnot,p001alamatneg,p001alamatnegt,p001notelt,p001nohpt,
case p001kwarganegara when '1' then 'Malaysian' when '2' then 'Non Malaysian' end as ktrgwarga,p001email 
from ppsdblocal.p001 where p001email='$idsess'");
$result = $loginQuery->getRow();

// return $this->response->setJSON($result); 


$data = [
    'result' => $result,
   // 'content' => 'This is the content of the last step.',
];

// Load a view for the PDF content
$html = view('form/acceptance', $data);

// Load HTML into Dompdf
$dompdf->loadHtml($html);

// Set paper size and orientation
$dompdf->setPaper('A4', 'portrait');

// Render the PDF
$dompdf->render();

// Output the PDF (force download or inline)
return $this->response->setHeader('Content-Type', 'application/pdf')
                      ->setBody($dompdf->output())
                      ->setHeader('Content-Disposition', 'inline; filename="surat.pdf"');
}

public function generatePdf(){

    // Clear all output buffers
    while (ob_get_level()) {
        ob_end_clean();
    }

    $options = new Options();
    $options->set('isHtml5ParserEnabled', true);
    $options->set('isRemoteEnabled', true);

    $dompdf = new Dompdf($options);

     // Get POST data
     $data = $this->request->getPost();

     // Debug: Log received data
     //error_log('POST Data: ' . json_encode($data));
 
     if (empty($data)) {
         return $this->response->setJSON(['error' => 'No data received.']);
     }

     // Example dynamic content for the header
    $headerText = isset($data['header_text']) ? $data['header_text'] : "Default Header";

    // Get the Base64 image data from the form
   // $passportImage = isset($data['passport_image']) ? $data['passport_image'] : null;

     // Decode the Base64 image and save it as a temporary file
    //  if ($passportImage) {
    //     // Remove the prefix 'data:image/png;base64,' if it exists
    //     $imageData = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $passportImage));
    //     $imagePath = WRITEPATH . 'uploads/passport_image.png';
    //     file_put_contents($imagePath, $imageData);
    // }
 
     // Generate HTML content
    $html = '<html><head><style>';
    $html .= 'body { font-family: Helvetica, sans-serif; }';
    $html .= '.header { text-align: center; font-size: 20px; font-weight: bold; margin-bottom: 10px; }';
    $html .= '.line { border-top: 2px solid black; margin-top: 10px; margin-bottom: 20px; }';
    $html .= '</style></head><body>';
     
// $html = '<h3 style="font-family: Helvetica, sans-serif; text-align: left;">Profile Information</h3>';

    // Horizontal line
    $html .= '<div class="line"></div>';

    // Embed the Base64 image if it exists
    // if ($passportImage) {
    //     // Embed the image in the PDF (Use the saved temporary file path)
    //     $html .= '<img src="' . ' http://localhost/pascav2/public/uploads/860604465280_pic.jpg' . '" alt="Passport Image" style="width: 100px; height: auto;">';
    // }

    // Add the rest of the content (dynamically)
    $html .= '<p style="font-family: Helvetica, sans-serif; text-align: left;font-weight: bold;">Profile Information.</p>';
    foreach ($data as $key => $value) {
        $html .= "<p style='font-family: Helvetica, sans-serif;'><strong>{$key}:</strong> " . htmlspecialchars($value, ENT_QUOTES, 'UTF-8') . "</p>";
    }

    // Horizontal line
    $html .= '<div class="line"></div>';
    
    // Close the HTML tags
    $html .= '</body></html>';

     // Debug: Save HTML to a file for inspection
    // file_put_contents(WRITEPATH . 'logs/debug.html', $html);
 
     // Debug: Output the HTML
     //error_log('Generated HTML: ' . $html);
     //exit;
 
     $dompdf->loadHtml($html);
     $dompdf->setPaper('A4', 'portrait');
     $dompdf->render();

       // Debug: Check PDF output length
    $pdfOutput = $dompdf->output();
    //error_log('PDF Output Length: ' . strlen($pdfOutput));

     // Save the PDF to a file for inspection
     //file_put_contents(WRITEPATH . 'logs/test.pdf', $pdfOutput);
 
     // Output the PDF
     $response = $this->response;
     $response->setHeader('Content-Type', 'application/pdf');
     $response->setHeader('Content-Disposition', 'attachment; filename="test.pdf"');
     $response->setBody($pdfOutput);
 
    // error_log('PDF Output Length: ' . strlen($response));

     return $response;
}

/**
 * Handles file upload and backup if a file already exists.
 *
 * @param UploadedFile|null $file
 * @param string $uploadDir
 * @param string $prefix
 * @param string $suffix
 * @return string|null The new file name or null if upload failed.
 */

 private function handleFileUpload($file, $uploadDir, $prefix, $suffix)
{
    if ($file && $file->isValid()) {

        error_log("File Name: " . $file->getClientName());
        error_log("File Type: " . $file->getMimeType());
        error_log("File Size: " . $file->getSize());

        // Ensure the file is not empty
        if ($file->getSize() === 0) {
            error_log("File is empty.");
            return null;
        }

        // Allowed MIME types
        $allowedMimeTypes = ['application/pdf','application/doc','application/docx','application/x-pdf','application/octet-stream','image/jpg', 'image/jpeg','image/png'];

        // Check MIME type
        $mimeType = $file->getMimeType();
        error_log("Detected MIME Type: $mimeType");
        if (!in_array($mimeType, $allowedMimeTypes)) {
            error_log("Invalid file type: " . $mimeType);
            return null;
        }

        // Define the new file name
        $ext = $file->guessExtension();
        $newFileName = $prefix . '_' . $suffix . '.' . $ext;

        $absolutePath = $uploadDir . $newFileName;

        // Backup existing file
        if (file_exists($absolutePath)) {
            $backupName = pathinfo($newFileName, PATHINFO_FILENAME) . '_backup_' . time() . '.' . pathinfo($newFileName, PATHINFO_EXTENSION);
            $backupPath = $uploadDir . $backupName;

            if (!rename($absolutePath, $backupPath)) {
                error_log("Failed to backup file: " . $absolutePath);
                return null;
            }

            //error_log("Backup created: " . $backupPath);
        }

        // Move the new file
        if ($file->move($uploadDir, $newFileName)) {
            error_log("Uploaded file: " . $absolutePath);
            return $newFileName;
        } else {
            error_log("Failed to upload file: " . $file->getClientName());
        }
    }
    return null;
 }

 
 
 

}