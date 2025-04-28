<?php

namespace App\Controllers;

use TCPDF;
use CodeIgniter\Database\Config;
use CodeIgniter\RESTful\ResourceController;

class CustomPDF extends TCPDF
{
    public function Footer()
    {
          // Position at 30 mm from bottom
          $this->SetY(-30);
          $this->SetFont('dejavusans', '', 9);
  
          // No line before the computer generated notice
          $footer = '
          <i>This is a computer generated letter. No signature is required.</i><br><br><i>Blok Anas, Kampus Gong Badak, 21300 Kuala Terengganu, Terengganu, Malaysia<br/>
          E-mel: pps_gs-registration@unisza.edu.my</i><br/>
          <hr style="border: 0.5px solid black; margin-top: 4px; margin-bottom: 2px;" />
          <i>Pusat Pengajian Siswazah | Graduate School</i>
          ';
  
          // Output footer aligned to the left
          $this->writeHTMLCell(0, 0, 10, '', $footer, 0, 1, false, true, 'L', true);
    }
}

class PdfController extends BaseController
{
    
    public function GenerateLetter()
    {
      //  ob_clean(); // Fix PDF corruption caused by output buffering
       // flush(); 

        ob_end_clean();

        $session = session();

        $user = $session->get('username');
        $idsess = $session->get('id');

        //$cur = date('d-m-Y');
        $cur = date('d F, Y');

        $db = Config::connect();

        // Fetch user details
        $query = $db->table('ppsdblocal.p001')
        ->select('p001nosrttawar,p001nokp,p001nama,p001alamat1,p001poskod,p001bandar,p001knegeri,p001alamatneg,p001kprog,p001modebelajar,p001kaedah,p001kkampus,p001penyelia,
        p001tkhstatus,p001kjantina')
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

        $nokp     = $result->p001nokp;
        $nama     = $result->p001nama;
        $alamat1  = $result->p001alamat1;
        $poskod   = $result->p001poskod;
        $bandar   = $result->p001bandar;
        $negeri   = $result->p001knegeri;
        $nosurat  = $result->p001nosrttawar;
        $kdprogram  = $result->p001kprog;
        $kdkaedah  = $result->p001kaedah;
        $kdmodebelajar  = $result->p001modebelajar;
        $kdlokasi  = $result->p001kkampus;
        $sv  = $result->p001penyelia;
        $tkhoffer  = $result->p001tkhstatus;
        $gender  = $result->p001kjantina;
        $modifiednosurat = str_replace('_', '/', $nosurat);

        if ($kdkaedah == '7') {
            $kaedahdesc = 'COURSEWORK';
        } elseif ($kdkaedah == '8') {
            $kaedahdesc = 'RESEARCH';
        } elseif ($kdkaedah == '9') {
            $kaedahdesc = 'MIX_MODE';
        }

        if ($kdmodebelajar == '1') {
            $modebelajar = 'FULL TIME';
        } elseif ($kdmodebelajar == '2') {
            $modebelajar = 'PART TIME';
        }

        if ($kdlokasi == '1') {
            $lokasi = 'GONG BADAK CAMPUS';
        } elseif ($kdlokasi == '2') {
            $lokasi = 'TEMBILA CAMPUS';
        } elseif ($kdlokasi == '3') {
            $lokasi = 'MEDICINE CAMPUS';
        } elseif ($kdlokasi == '4') {
            $lokasi = 'UniSZA INTERNATIONAL CAMPUS';
        }

        if ($gender == 'L') {
            $greet = 'Sir';
        } elseif ($gender == 'P') {
            $greet = 'Madam';
        } else {
            $greet = 'Sir/Madam';
        }


//negeri
        $queryneg = $db->table('ppsdblocal.a090')
        ->select('a090negeri')
        ->where([
            'a090knegeri' => $negeri
        ])
        ->get();

        $resultneg = $queryneg->getRow();
        $negeridesc  = $resultneg->a090negeri;   
//nec
$querynec = $db->query("SELECT p020namaprogbi,z054bnecdetail,a019bi FROM ppsdblocal.p020,ppsdblocal.a019,ppsdblocal.p020x,ppsdblocal.z054b  
where p020kprog=p020xkprog and p020xnec=z054bknecdetail and a019kbhg = p020kfakulti and (p020kodmqa ='1' or p020kodmqa ='2') AND p020namaprogbi IS NOT NULL AND p020kprog='$kdprogram'");

$resultnec = $querynec->getRow();
$necdesc  = $resultnec->z054bnecdetail;   
$programdesc  = $resultnec->p020namaprogbi;   
$facdesc  = $resultnec->a019bi;   

        
    
        // Create a new TCPDF instance
       // $pdf = new TCPDF();
        $pdf = new CustomPDF();
    
        // Set document properties
        $pdf->SetCreator('UniSZA');
        $pdf->SetAuthor('UniSZA Graduate School');
        $pdf->SetTitle('Offer Letter');
        $pdf->SetSubject('Offer of Admission');
    
        // Set font
        $pdf->SetFont('helvetica', '', 12);
        $pdf->SetMargins(25, 10, 25); // ✅ Add this line to control left/right space

        $pdf->setPrintHeader(false); // ✅ Disable default header
    
        // Add a page
        $pdf->AddPage();
    
        // Absolute path for images
       // $imgPath = 'localhost/pascav2/assets/images/logounisza.png';//base_url('pascav2/assets/images/logounisza.png');
       // $imgPath = FCPATH . 'pascav2/assets/images/logounisza.png'; 
        $imgData = base64_encode(file_get_contents(FCPATH . 'assets/images/logounisza.png'));
        $imgSrc = 'data:image/png;base64,' . $imgData;

    
        // Define the letter content with corrected image path
        $html = '
        <style>
            h1 {
                 text-align: left; font-size: 13px; 
                }
            .headerLogo { text-align: right; }
            .headerSurat { text-align: right; font-size: 12px; }
            .contentSurat { text-align: left;font-size: 12px; }
            table {width: 100%;
                border: none;
                border-collapse: collapse; }
            td { padding: 1px; border: none; vertical-align: top;}
            .label {width: 40%;}
            .value {width: 70%;}
        </style>
        
        <div class="headerLogo">
            <img src="' . $imgSrc . '" width="200px"/>
        </div>
        <div class="headerSurat">
            Pusat Pengajian Siswazah | Graduate School
            <br><br>
            Our Reference: '.$modifiednosurat.'<br>
            Date: '.$cur.'
        </div>
    
        <div class="contentSurat">
            <br>'.$nama.' ('.$nokp.')<br>'.$alamat1.'<br>'.$poskod.','.$bandar.'<br>'.$negeridesc.'<br>
    
            <br><br>Dear '.$greet.',
    
            <h1>OFFER OF ADMISSION TO THE POSTGRADUATE PROGRAM</h1>
    
            <p>On behalf of Universiti Sultan Zainal Abidin, we would like to congratulate you for being selected
            to be offered to pursue postgraduate studies.</p>

            <p>Your offered program details are as follows:</p>
    
            <table>
                <tr><td class="label">Program</td><td class="value">: '.$programdesc.'</td></tr>
                <tr><td class="label">NEC</td><td class="value">: '.$necdesc.'</td></tr>
                <tr><td class="label">Mode</td><td class="value">: '.$kaedahdesc.'</td></tr>
                <tr><td class="label">Faculty</td><td class="value">: '.$facdesc .'</td></tr>
                <tr><td class="label">Method of Registration</td><td class="value">: '.$modebelajar.'</td></tr>
                <tr><td class="label">Campus</td><td class="value">: '.$lokasi.'</td></tr>
                <tr><td class="label">Main Supervisor</td><td class="value">: '.$sv.'</td></tr>
                <tr><td class="label">Date of Offer Approval</td><td class="value">: '.$tkhoffer.'</td></tr>
            </table>
    
            <p>This offer is valid for twelve (12) months from the date of offer.</p>
            <p>Thank you.</p>
        </div>';
    
        // Write the HTML content to the PDF
        $pdf->writeHTML($html, true, false, true, false, '');
    
        // Set headers to force the browser to display the PDF properly
        // header('Content-Type: application/pdf');
        // header('Content-Disposition: inline; filename="OfferLetter.pdf"');
        // header('Cache-Control: private, must-revalidate, max-age=0');
        // header('Pragma: public');
        // header('Expires: 0');

        // Define the filename and path
        $filename = $nokp . '_offer.pdf';
        $savePath = WRITEPATH . 'uploads/offerLetter/' . $filename; // Ensure this directory exists and is writable
    
    
        // Output the PDF
        $pdfOutput = $pdf->Output('OfferLetter.pdf', 'S'); // 'I' for inline display,'S' returns content instead of output
        // Save the PDF to the specified path
        $pdf->Output($savePath, 'F'); // 'F' stands for file

        // Update database
        $update = $db->table('ppsdblocal.p001')
        ->set([
            'p001upsuratoffer' => $filename,
        ])
        ->where('p001nokp', $nokp)
        ->update();

        if ($update) {
            // Only return PDF preview if DB update is successful
            $pdfOutput = $pdf->Output('OfferLetter.pdf', 'S'); // Get content as string
            return $this->response
                ->setContentType('application/pdf')
                ->setHeader('Content-Disposition', 'inline; filename="OfferLetter.pdf"')
                ->setBody($pdfOutput);
        } else {
            // If DB update failed
            $error = $db->error();
            error_log("DB Update Error: " . json_encode($error));
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Database update failed.',
                'error' => $error,
            ]);
        }

    }
    
}
