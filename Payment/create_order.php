<?php
include "config.php";
require('razorpay-php/src/Razorpay.php');

use Razorpay\Api\Api;

$name = $_POST['name'] ?? '';
$mobile = $_POST['mobile'] ?? '';
$amount = $_POST['amount'] ?? 0;

if (empty($name) || empty($mobile) || $amount <= 0) {
    echo json_encode(['status' => 'error', 'message' => 'सर्व फील्ड भरा']);
    exit;
}

// Razorpay keys
$keyId = 'rzp_test_S0KSRllFimS85k';
$keySecret = 'hf9Wl9ZeEudCyytHljV7Yp9r';
$api = new Api($keyId, $keySecret);

try {
    $orderData = [
        'receipt' => 'GP-' . time(),
        'amount' => $amount * 100,
        'currency' => 'INR',
        'payment_capture' => 1
    ];
    $order = $api->order->create($orderData);

    echo json_encode([
        'status' => 'success',
        'key' => $keyId,
        'amount' => $orderData['amount'],
        'currency' => 'INR',
        'order_id' => $order['id']
    ]);
} catch (Exception $e) {
    echo json_encode(['status' => 'error', 'message' => $e->getMessage()]);
}
