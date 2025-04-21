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

        $cur = date('d-m-Y');

        $db = Config::connect();

        // Fetch user details
        $query = $db->table('ppsdblocal.p001')
        ->select('p001nosrttawar,p001nokp,p001nama,p001alamat1,p001poskod,p001bandar,p001knegeri,p001alamatneg,p001kprog,p001modebelajar,p001kaedah,p001kkampus,p001penyelia,p001tkhstatus')
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
        $nosurat  = $result->p001nosrttawar;
        $modifiednosurat = str_replace('_', '/', $nosurat);
    
        // Create a new TCPDF instance
       // $pdf = new TCPDF();
        $pdf = new CustomPDF();
    
        // Set document properties
        $pdf->SetCreator('UniSZA');
        $pdf->SetAuthor('UniSZA Graduate School');
        $pdf->SetTitle('Offer Letter');
        $pdf->SetSubject('Offer of Admission');
    
        // Set font
        $pdf->SetFont('dejavusans', '', 12);

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
                 text-align: left; font-size: 14px; 
                }
            .headerSurat { text-align: right; font-size: 12px; }
            .contentSurat { text-align: left;font-size: 10px; }
            table {width: 100%; border: none; }
            td { padding: 2px; border: none;}
        </style>
    
        <div class="headerSurat">
            <img src="' . $imgSrc . '" width="120"/><br>
            Pusat Pengajian Siswazah | Graduate School
            <br><br>
            Our Reference: '.$modifiednosurat.'<br>
            Date: '.$cur.'
        </div>
    
        <div class="contentSurat">
            <p><strong>'.$nama.' ('.$nokp.')</strong><br>'.$alamat1.'<br>'.$poskod.','.$bandar.'<br></p>
    
            <p>Dear Sir/Madam,</p>
    
            <h1>OFFER OF ADMISSION TO THE POSTGRADUATE PROGRAM</h1>
    
            <p>On behalf of Universiti Sultan Zainal Abidin, we would like to congratulate you for being selected
            to be offered to pursue postgraduate studies.</p>

            <p>Your offered program details are as follows:</p>
    
            <table>
                <tr><td>Program</td><td>: MASTER OF SCIENCE</td></tr>
                <tr><td>NEC</td><td>: ABC123</td></tr>
                <tr><td>Mode</td><td>: RESEARCH</td></tr>
                <tr><td>Faculty</td><td>: FST</td></tr>
                <tr><td>Method of Registration</td><td>: FULL TIME</td></tr>
                <tr><td>Campus</td><td>: GONG BADAK</td></tr>
                <tr><td>Main Supervisor</td><td>: DR A</td></tr>
                <tr><td>Date of Offer Approval</td><td>: 31/01/2024</td></tr>
            </table>
    
            <p>This offer is valid for twelve (12) months from the date of offer.</p>
            <p>Thank you.</p>
        </div>';
    
        // Write the HTML content to the PDF
        $pdf->writeHTML($html, true, false, true, false, '');
    
        // Set headers to force the browser to display the PDF properly
        header('Content-Type: application/pdf');
        header('Content-Disposition: inline; filename="OfferLetter.pdf"');
        header('Cache-Control: private, must-revalidate, max-age=0');
        header('Pragma: public');
        header('Expires: 0');
    
        // Output the PDF
        $pdfOutput = $pdf->Output('OfferLetter.pdf', 'S'); // 'I' for inline display,'S' returns content instead of output

       // Return the PDF using CodeIgniter's response object
        return $this->response
        ->setContentType('application/pdf')
        ->setBody($pdfOutput);

    }
    
}
