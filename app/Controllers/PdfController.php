<?php

namespace App\Controllers;

use TCPDF;

class PdfController extends BaseController
{
    public function GenerateLetter()
    {
      //  ob_clean(); // Fix PDF corruption caused by output buffering
       // flush(); 

        ob_end_clean();
    
        // Create a new TCPDF instance
        $pdf = new TCPDF();
    
        // Set document properties
        $pdf->SetCreator('UniSZA');
        $pdf->SetAuthor('UniSZA Graduate School');
        $pdf->SetTitle('Offer Letter');
        $pdf->SetSubject('Offer of Admission');
    
        // Set font
        $pdf->SetFont('dejavusans', '', 12);
    
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
            td { padding: 5px; border: none;}
        </style>
    
        <div class="headerSurat">
            <img src="' . $imgSrc . '" width="120"/><br>
            Pusat Pengajian Siswazah | Graduate School
            <br><br>
            Our Reference: PPS/UniSZA/01<br>
            Date: 06/02/2024
        </div>
    
        <div class="contentSurat">
            <p><strong>NUR ALYANI</strong><br>
            300 KG KOTA, MANIR<br></p>
    
            <p>Dear Sir/Madam,</p>
    
            <h1>OFFER OF ADMISSION TO THE POSTGRADUATE PROGRAM</h1>
    
            <p>On behalf of Universiti Sultan Zainal Abidin, we would like to congratulate you for being selected
            to be offered to pursue postgraduate studies.</p>

            <p>Your offered program details are as follows:</p>
    
            <table>
                <tr><td>Program</td><td>MASTER OF SCIENCE</td></tr>
                <tr><td>NEC</td><td>ABC123</td></tr>
                <tr><td>Mode</td><td>RESEARCH</td></tr>
                <tr><td>Faculty</td><td>FST</td></tr>
                <tr><td>Method of Registration</td><td>FULL TIME</td></tr>
                <tr><td>Campus</td><td>GONG BADAK</td></tr>
                <tr><td>Main Supervisor</td><td>DR A</td></tr>
                <tr><td>Date of Offer Approval</td><td>31/01/2024</td></tr>
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
