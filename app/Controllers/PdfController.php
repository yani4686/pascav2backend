<?php

namespace App\Controllers;

use TCPDF;

class PdfController extends BaseController
{
    public function GenerateLetter()
    {
        // Create a new TCPDF instance
        $pdf = new TCPDF('L', PDF_UNIT, 'A4', true, 'UTF-8', false);

        // Set document information
        $pdf->SetCreator('CodeIgniter 4');
        $pdf->SetAuthor('Your Name');
        $pdf->SetTitle('Sample Letter');
        $pdf->SetSubject('Letter PDF Example');
        $pdf->SetKeywords('TCPDF, PDF, letter, example');

        // Set default header data
        $pdf->SetHeaderData('', 0, 'My Company', 'Generated with TCPDF in CodeIgniter 4');
        //$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);

        // Set header and footer fonts
        $pdf->setHeaderFont(['helvetica', '', 10]);
        $pdf->setFooterFont(['helvetica', '', 8]);

        // Set margins
        $pdf->SetMargins(15, 27, 15);
        $pdf->SetHeaderMargin(5);
        $pdf->SetFooterMargin(10);

        // Set auto page breaks
        $pdf->SetAutoPageBreak(true, 25);

        // Add a page
        $pdf->AddPage();

        // Define the letter content
        $html = '
            <h1>Sample Letter</h1>
            <p><strong>Date:</strong> ' . date('F j, Y') . '</p>
            <p><strong>To:</strong> John Doe</p>
            <p>Dear John Doe,</p>
            <p>This is an example letter generated with TCPDF in CodeIgniter 4. You can customize this letter by changing the content and styles as needed.</p>
            <p>Sincerely,</p>
            <p>Jane Smith</p>
        ';

        // $html = '<img src="' . base_url('images/logo.png') . '" alt="Logo">';

        // Write the HTML content
        $pdf->writeHTML($html, true, false, true, false, '');

        // Output the PDF
        $pdf->Output('letter.pdf', 'D'); // 'I' for inline, 'D' for download
    }
}
