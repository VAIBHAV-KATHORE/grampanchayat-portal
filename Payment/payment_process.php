<?php
// payment_process.php

// Include config for Panchayat name
include "config.php";

// Include Razorpay SDK
require('razorpay-php/src/Razorpay.php');

use Razorpay\Api\Api;

// -------------------------
// 1️⃣ Get POST data safely
// -------------------------
$name = isset($_POST['name']) ? trim($_POST['name']) : '';
$mobile = isset($_POST['mobile']) ? trim($_POST['mobile']) : '';
$taxType = isset($_POST['tax_type']) ? trim($_POST['tax_type']) : '';
$amount = isset($_POST['amount']) ? floatval($_POST['amount']) : 0;

if (empty($name) || empty($mobile) || empty($taxType) || $amount <= 0) {
    die("कृपया सर्व फील्ड व्यवस्थित भरा.");
}

// -------------------------
// 2️⃣ Razorpay API Keys
// -------------------------
$keyId = 'rzp_test_S0KSRllFimS85k';
$keySecret = 'hf9Wl9ZeEudCyytHljV7Yp9r';

$api = new Api($keyId, $keySecret);

// -------------------------
// 3️⃣ Create Razorpay Order
// -------------------------
$orderData = [
    'receipt'         => 'GP-' . time(),
    'amount'          => round($amount * 100),
    'currency'        => 'INR',
    'payment_capture' => 1
];

try {
    $order = $api->order->create($orderData);
    $orderId = $order['id'];
} catch (\Razorpay\Api\Errors\BadRequestError $e) {
    die("Razorpay Error: " . $e->getMessage());
} catch (Exception $e) {
    die("Error: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Processing Payment</title>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
</head>

<body>

    <h3 style="text-align:center;color:green;">Redirecting to Payment...</h3>

    <script>
        var options = {
            "key": "<?php echo $keyId; ?>",
            "amount": "<?php echo round($amount * 100); ?>",
            "currency": "INR",
            "name": "<?php echo $gpn_name; ?>",
            "description": "Online Tax Payment",
            "order_id": "<?php echo $orderId; ?>",

            // ✅ UPI Enabled + Other Methods (No Change to Others)
            "method": {
                "upi": true,
                "card": true,
                "netbanking": true,
                "wallet": true
            },

            "prefill": {
                "name": "<?php echo $name; ?>",
                "contact": "<?php echo $mobile; ?>",
                "tax_type": "<?php echo $tax_type; ?>"
            },

            "theme": {
                "color": "#28a745"
            },
            "handler": function(response) {

                console.log(response); // Debug

                window.location.href = "payment_success.php" +
                    "?payment_id=" + response.razorpay_payment_id +
                    "&order_id=" + response.razorpay_order_id +
                    "&razorpay_signature=" + response.razorpay_signature +
                    "&name=<?php echo urlencode($name); ?>" +
                    "&mobile=<?php echo urlencode($mobile); ?>" +
                    "&tax_type=<?php echo urlencode($tax_type); ?>" +
                    "&amount=<?php echo $amount; ?>";
            },



            "modal": {
                "ondismiss": function() {
                    alert("Payment Cancelled");
                    window.location.href = "index.php";
                }
            }
        };

        var rzp = new Razorpay(options);
        rzp.open();
    </script>

</body>

</html>