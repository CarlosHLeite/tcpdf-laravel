<?php

namespace App\Http\Controllers;

use TCPDF;

use Illuminate\Http\Request;

class GerarPdfController extends Controller
{


    public function index()
    {
        // Get the path to your photo
        $photoPath = public_path('images/test.png');

        // Read the photo file and encode it as base64
        $photoData = base64_encode(file_get_contents($photoPath));

        // Data to pass to the Blade view
        $data = [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'photo' => $photoData, // Pass the photo data to the view
            // Add more data as needed
        ];

        // Load the Blade view and pass data to it
        $html = view('pdf')->with($data)->render();


        // Create new TCPDF instance
        $pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);

        $pdf->SetMargins(10, 10, 10);


        // set document information
        $pdf->SetCreator("Carlos Leopoldo");
        $pdf->SetAuthor('Nicola Asuni');
        $pdf->SetTitle('TCPDF Example 001');
        $pdf->SetSubject('TCPDF Tutorial');
        $pdf->SetKeywords('TCPDF, PDF, example, test, guide');



        // Set header and footer fonts
        $pdf->setHeaderFont(['helvetica', '', 8]);
        $pdf->setFooterFont(['helvetica', '', 8]);

        $pdf->SetHeaderMargin(1);
        $pdf->SetFooterMargin(5);
        // set auto page breaks
        $pdf->SetAutoPageBreak(TRUE, 20);




        // Set footer content
        $pdf->setFooterData(['{PAGENO}', '{nb}'], [true, true]);











        // Add a page
        $pdf->AddPage();

        // Write HTML content from Blade view to PDF
        $pdf->writeHTML($html, true, false, true, false, '');

        // Output PDF as inline content
        $pdfContent = $pdf->Output('profile.pdf', 'S');

        // Return PDF response
        return response()->make($pdfContent, 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="profile.pdf"',
        ]);
    }
}
