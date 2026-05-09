<?php
if (!isset($_GET['payment_id'])) {
    die("Payment Failed");
}

$payment_id = $_GET['payment_id'];
$order_id   = $_GET['order_id'];

$name   = $_GET['name'];
$mobile = $_GET['mobile'];
$tax_type = $_GET['tax_type'];
$amount = $_GET['amount'];

header("Location: receipt.php?pid=$payment_id&name=$name&mobile=$mobile&tax_type=$tax_type&amount=$amount");
exit;
