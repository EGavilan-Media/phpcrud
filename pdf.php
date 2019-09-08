<?php

require_once 'dompdf/autoload.inc.php';
use Dompdf\Dompdf;

function file_get_contents_curl($url) {
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url);

    $data = curl_exec($ch);
    curl_close($ch);

    return $data;
}

$html=file_get_contents("http://localhost/egavilanmedia/10-PHP%20and%20MySQL%20CRUD/printPDF.php");

$pdf = new DOMPDF(); 

$pdf->set_paper("letter", "portrait");


$pdf->load_html(utf8_decode($html));

$pdf->render();
 
$pdf->load_html(ob_get_clean()); 

$pdf->stream('All Records.pdf',array('Attachment'=>0));