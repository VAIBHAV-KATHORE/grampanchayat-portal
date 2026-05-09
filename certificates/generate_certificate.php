<?php
// Try to load Composer autoloader if present
if (file_exists(__DIR__ . '/../vendor/autoload.php')) {
	require_once __DIR__ . '/../vendor/autoload.php';
}

$html = "
<h2 style='text-align:center'>Village Certificate</h2>
<p>Name: Rahul Patil</p>
<p>Village: Mal Sawargaon</p>
";

// Use Dompdf if it's available via Composer
if (class_exists('\\Dompdf\\Dompdf')) {
	$dompdfClass = '\\Dompdf\\Dompdf';
	$dompdf = new $dompdfClass();
	$dompdf->loadHtml($html);
	$dompdf->render();
	$dompdf->stream('certificate.pdf');
	exit;
}

// Fallback: use TCPDF if Dompdf isn't installed
if (file_exists(__DIR__ . '/../tcpdf/tcpdf.php')) {
	require_once __DIR__ . '/../tcpdf/tcpdf.php';
	$pdf = new \TCPDF();
	$pdf->AddPage();
	$pdf->SetFont('helvetica', '', 12);
	$pdf->writeHTML($html, true, false, true, false, '');
	$pdf->Output('certificate.pdf', 'I');
	exit;
}

// If neither library is available, show an instructive message
header('Content-Type: text/plain; charset=utf-8');
echo "Dompdf is not installed and TCPDF was not found.\n";
echo "To install Dompdf (recommended), run in your project root:\n";
echo "composer require dompdf/dompdf\n";
