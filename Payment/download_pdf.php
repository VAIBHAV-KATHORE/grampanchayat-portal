<?php
include "config.php";
require('tcpdf/tcpdf.php');

$order_id = $_GET['order_id'] ?? '';
$payment_id = $_GET['payment_id'] ?? '';
$name = $_GET['name'] ?? '';
$mobile = $_GET['mobile'] ?? '';
$tax_type = $_GET['tax_type'] ?? '';
$amount = $_GET['amount'] ?? 0;

if (empty($order_id) || empty($payment_id) || empty($name)) {
    die("Invalid request");
}

// TCPDF
$pdf = new TCPDF();
$pdf->SetCreator('ग्रामपंचायत');
$pdf->SetAuthor($gpn_name);
$pdf->SetTitle('Payment Receipt');
$pdf->SetHeaderData('', 0, $gpn_name, 'Online Payment Receipt');
$pdf->setHeaderFont(['dejavusans', '', 12]);
$pdf->setFooterFont(['dejavusans', '', 10]);
$pdf->SetMargins(15, 30, 15);
$pdf->SetAutoPageBreak(true, 20);
$pdf->AddPage();

$html = "
<h2 style='text-align:center;'>💳 Payment Receipt</h2>
<p>ग्राहक नाव: <b>$name</b></p>
<p>मोबाइल: <b>$mobile</b></p>
<p>सेवा: <b>$tax_type</b></p>
<p>रक्कम: <b>₹$amount</b></p>
<p>Razorpay Order ID: <b>$order_id</b></p>
<p>Payment ID: <b>$payment_id</b></p>
<p>ग्रामपंचायत: <b>$gpn_name</b></p>
<p>दिनांक: <b>" . date('d-m-Y') . "</b></p>
";

$pdf->writeHTML($html, true, false, true, false, '');
$pdf->Output("Receipt_GP_" . time() . ".pdf", "D");
