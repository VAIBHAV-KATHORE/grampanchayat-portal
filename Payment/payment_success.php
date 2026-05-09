<?php
include "db.php";   // database connection
require_once('tcpdf/tcpdf.php'); // full TCPDF

$payment_id = $_GET['payment_id'] ?? '';
$name       = $_GET['name'] ?? '';
$mobile     = $_GET['mobile'] ?? '';
$tax_type   = $_GET['tax_type'] ?? '';
$amount     = $_GET['amount'] ?? '';


if (!$payment_id || !$name || !$mobile || !$tax_type || !$amount) {
    die("❌ Invalid Request – Required parameters missing");
}

// Save to gp_payment table
$sql = "INSERT INTO gp_payment (payment_id, name, mobile,tax_type, amount)
VALUES ('$payment_id','$name','$mobile','$tax_type','$amount')";
if (!mysqli_query($db, $sql)) {
    die("Database Error: " . mysqli_error($db));
}

// ================= PDF GENERATION =================
$pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);
$pdf->SetCreator('Grampanchayat Payment System');
$pdf->SetAuthor('Grampanchayat');
$pdf->SetTitle('Payment Receipt');

// Remove default header/footer
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);

$pdf->SetMargins(15, 20, 15);
$pdf->AddPage();

// ------------------ Background / Ashok Stambh ------------------
$pdf->SetAlpha(0.1); // light transparency
$pdf->Image('tcpdf/images/ashok_stambh.png', 50, 50, 100, 100, '', '', '', false, 300, '', false, false, 0);
$pdf->SetAlpha(1); // reset opacity
// ================= GOVERNMENT STYLE HEADER =================
$pdf->SetFillColor(230, 245, 255); // Soft blue background strip
$pdf->Rect(0, 10, 210, 30, 'F'); // Header background block (3D feel)
$pdf->Image('tcpdf/images/seal.jpg', 155, 12, 25, 22);
$pdf->Image('tcpdf/images/gp.jpg', 180, 12, 25, 22);

// Top Ashok Stambh Logo
$pdf->Image('tcpdf/images/ashok_stambh.png', 15, 12, 22, 22); // adjust path if needed

// Title Text
$pdf->SetXY(40, 12);
$pdf->SetFont('dejavusans', 'B', 20);
$pdf->SetTextColor(0, 51, 102);
$pdf->Cell(0, 10, "Government of Maharashtra", 0, 1, 'L');

$pdf->SetXY(40, 22);
$pdf->SetFont('dejavusans', 'B', 16);
$pdf->SetTextColor(0, 0, 0);
$pdf->Cell(0, 8, "Gram Panchayat Mojpuri", 0, 1, 'L');

// Subtitle Line
$pdf->SetXY(40, 30);
$pdf->SetFont('dejavusans', '', 11);
$pdf->SetTextColor(80, 80, 80);
$pdf->Cell(0, 6, "Taluka: Jalna | District: Jalna | Maharashtra - India", 0, 1, 'L');

// Bottom Accent Line (Government Bar)
$pdf->SetDrawColor(0, 102, 204);
$pdf->SetLineWidth(1.5);
$pdf->Line(10, 42, 200, 42);

// Little 3D shadow bar
$pdf->SetDrawColor(180, 180, 180);
$pdf->SetLineWidth(0.6);
$pdf->Line(10, 44, 200, 44);

// gap
$pdf->Ln(10);

// ------------------ Government Style Payment Table ------------------
$pdf->SetFont('dejavusans', '', 12);

$html = "
<style>
.gov-table {
    width:100%;
    border-collapse:collapse;
    border:2px solid #000;
    font-size:12px;
}

.gov-table th {
    border:1px solid #000;
    padding:8px;
    text-align:center;
    font-size:13px;
    font-weight:bold;
    background:#f6f6f6;
    color:#000;
}

/* Tricolor Header Band */
.table-heading {
    text-align:center;
    font-weight:bold;
    padding:8px;
    border:1px solid #000;
    font-size:14px;
    color:#000;
    background: linear-gradient(#ff9933,#ffffff,#138808);
}

/* Left Column Label */
.gov-table td:first-child{
    background:#eaf1ff;
    font-weight:bold;
}

/* Right Column */
.gov-table td {
    border:1px solid #000;
    padding:7px;
    background:#ffffff;
}

.gov-title{
    text-align:center;
    color:#003366;
    font-size:18px;
    font-weight:bold;
}

</style>

<div class='ribbon top-ribbon'>Government of Maharashtra</div>
<div class='ribbon mid-ribbon'><b>Gram Panchayat Official Receipt</b></div>
<div class='ribbon bottom-ribbon'>Digital Payment Record</div>

<h3 class='gov-title'>Grampanchayat Tax Payment Receipt</h3>

<table class='gov-table'>
<tr>
<th width='35%'>Details</th>
<th>Information</th>
</tr>

<tr>
<td><b>Payment ID</b></td>
<td>$payment_id</td>
</tr>

<tr>
<td><b>Name</b></td>
<td>$name</td>
</tr>

<tr>
<td><b>Mobile</b></td>
<td>$mobile</td>
</tr>

<tr>
<td><b>Tax Type</b></td>
<td>$tax_type</td>
</tr>


<tr>
<td><b>Amount (₹)</b></td>
<td><b>$amount</b></td>
</tr>

<tr>
<td><b>Date</b></td>
<td>" . date('d-m-Y H:i:s') . "</td>
</tr>



</table>
";


// Write HTML table
$pdf->writeHTML($html, true, false, true, false, '');

// ------------------ Digital Signature Placeholder ------------------
$pdf->Ln(14);
$pdf->SetDrawColor(212, 175, 55);
$pdf->SetLineWidth(1);
$pdf->Line(120, 250, 195, 250);
$pdf->Image('tcpdf/images/sign3.jpg', 130, 220, 50, 25);
$pdf->Ln(15);
$pdf->SetFont('dejavusans', 'B', 11);
$pdf->SetTextColor(120, 98, 52);
$pdf->SetY(252);
$pdf->Cell(0, 6, "Authorized Digital Signature", 0, 1, 'R');
$pdf->Cell(0, 6, "Gram Panchayat Mojpuri", 0, 1, 'R');


// ------------------ Output PDF ------------------
$pdf->Output('Payment_Receipt_' . $payment_id . '.pdf', 'I');
