<?php
require_once('tcpdf/tcpdf.php'); // TCPDF Library

// Database Connection
$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'panchayat_db';
$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

// Collect Form Data
$name = $_POST['name'];
$aadhaar = $_POST['aadhaar'];
$main_cert = $_POST['main_cert'];
$self_cert = $_POST['self_cert'];
$other_app = $_POST['other_app'];
$construction = $_POST['construction'];

// Save to DB
$stmt = $conn->prepare("INSERT INTO certificate_submissions (name,aadhaar,main_cert,self_cert,other_app,construction) VALUES (?,?,?,?,?,?)");
$stmt->bind_param("ssssss", $name, $aadhaar, $main_cert, $self_cert, $other_app, $construction);
$stmt->execute();

// Generate PDF
$pdf = new TCPDF();
$pdf->AddPage();

// Use Marathi Unicode Font (e.g., Mangal)
$font = TCPDF_FONTS::addTTFfont('fonts/Mangal.ttf', 'TrueTypeUnicode', '', 32);
$pdf->SetFont($font, '', 14);

// Header
$pdf->SetTextColor(0, 51, 102);
$pdf->SetFont('', 'B', 20);
$pdf->Cell(0, 10, "🏛️ ग्रामपंचायत प्रमाणपत्र", 0, 1, 'C');

// Separator
$pdf->SetFont('', '', 12);
$pdf->Cell(0, 5, "------------------------------------------------------", 0, 1, 'C');

// Details
$pdf->Ln(5);
$pdf->SetFont('', '', 14);
$pdf->Cell(0, 10, "नाव: $name", 0, 1);
$pdf->Cell(0, 10, "आधार नंबर: $aadhaar", 0, 1);
$pdf->Ln(5);
$pdf->Cell(0, 10, "प्रमाणपत्र प्रकार: $main_cert", 0, 1);
$pdf->Cell(0, 10, "स्वयंघोषणापत्र: $self_cert", 0, 1);
$pdf->Cell(0, 10, "विविध अर्ज: $other_app", 0, 1);
$pdf->Cell(0, 10, "बांधकाम / महसूल विभाग: $construction", 0, 1);

// Footer
$pdf->Ln(20);
$pdf->SetFont('', 'I', 10);
$pdf->Cell(0, 10, "© माळ सावरगाव ग्रामपंचायत", 0, 1, 'C');

// Output PDF to Browser
$pdf->Output("certificate.pdf", "D");

$stmt->close();
$conn->close();
