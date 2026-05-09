<?php include "config.php"; ?>
<!DOCTYPE html>
<html lang="mr">

<head>
    <meta charset="UTF-8">
    <title><?php echo $gpn_name = "ग्रामपंचायत मोजपुरी, ता. जालना, जि. जालना"; ?> – Online Payment</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <style>
        body {
            background: linear-gradient(135deg, #ff9933, #ffffff, #138808);
            background-attachment: fixed;
        }

        /* Government Digital Portal Look */

        .gov-box {
            max-width: 700px;
            margin: auto;
            padding: 25px;
            border-radius: 18px;
            border: 3px solid #000;
            background: linear-gradient(135deg, #ffffffdd, #ffffffaa), url('https://i.ibb.co/5LhxW7r/indian-pattern.png');
            background-size: cover;
            box-shadow: 0 0 35px rgba(0, 0, 0, 0.6);
            transform: perspective(800px) rotateX(2deg);
        }

        /* Header */
        .gov-header {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 10px;
            border-radius: 10px;
            background: linear-gradient(90deg, #ff9933, #ffffff, #138808);
            border: 2px solid #000;
        }

        .gov-header img {
            width: 55px;
        }

        .gov-header h2 {
            margin: 0;
            font-size: 20px;
            font-weight: 900;
        }

        .gov-header p {
            margin: 0;
            font-size: 14px;
        }

        /* Title */
        .title {
            margin-top: 15px;
            text-align: center;
            font-weight: 900;
            color: #1c6b1c;
        }

        /* Inputs */
        .form-control {
            border: 2px solid #000;
            padding: 9px;
            border-radius: 8px;
            margin-bottom: 12px;
        }

        /* Button */
        .pay-btn {
            width: 100%;
            background: linear-gradient(90deg, #ff9933, #138808);
            color: white;
            font-size: 18px;
            font-weight: 900;
            border: 2px solid #000;
            border-radius: 10px;
            padding: 10px;
            box-shadow: 0 5px 0 #000;
            transition: 0.2s;
        }

        .pay-btn:active {
            transform: translateY(3px);
            box-shadow: 0 2px 0 #000;
        }

        /* ================= Mobile Responsive ================= */
        @media(max-width:768px) {
            .gov-box {
                padding: 18px;
                border-width: 2px;
            }

            .gov-header h2 {
                font-size: 14px;
            }

            .gov-header p {
                font-size: 11px;
            }

            .title {
                font-size: 18px;
            }
        }
    </style>
</head>

<body class="bg-light">
    <div class="container my-5">
        <div class="gov-box">

            <!-- Header -->
            <div class="gov-header">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1e/Emblem_of_India.svg/1200px-Emblem_of_India.svg.png">
                <div>
                    <h2>भारत सरकार | Government of India</h2>
                    <p>🌾 ग्रामपंचायत मोजपुरी, ता. जालना, जि. जालना</p>
                </div>
            </div>

            <h3 class="title">💳 Online Tax Payment</h3>

            <form id="paymentForm">
                <label>नाव *</label>
                <input type="text" name="name" id="name" class="form-control" required>

                <label>मोबाइल *</label>
                <input type="text" name="mobile" id="mobile" class="form-control" required>
                <label>Tax Type *</label>
                <select name="tax_type" id="tax_type" class="form-control" required>
                    <option value="">-- Select Tax Type --</option>
                    <option value="House Tax">House Tax</option>
                    <option value="Water Tax">Water Tax</option>
                </select>


                <label>रक्कम (₹)*</label>
                <input type="number" name="amount" id="amount" class="form-control" required>

                <button type="button" id="rzpButton" class="pay-btn">
                    Proceed to Pay ₹
                </button>
            </form>

        </div>
    </div>


    <script>
        document.getElementById('rzpButton').onclick = function() {

            var name = document.getElementById('name').value;
            var mobile = document.getElementById('mobile').value;
            var amount = document.getElementById('amount').value;
            var taxType = document.getElementById('tax_type').value;

            if (!name || !mobile || !amount || !taxType) {
                alert("Please fill all required fields!");
                return;
            }

            var options = {
                "key": "rzp_test_S0KSRllFimS85k",
                "amount": amount * 100,
                "currency": "INR",
                "name": "Gram Panchayat Mojpuri",
                "description": taxType + " Payment",
                "handler": function(response) {

                    window.location.href =
                        "payment_success.php?" +
                        "payment_id=" + response.razorpay_payment_id +
                        "&name=" + encodeURIComponent(name) +
                        "&mobile=" + encodeURIComponent(mobile) +
                        "&tax_type=" + encodeURIComponent(taxType) +
                        "&amount=" + encodeURIComponent(amount);
                },
                "prefill": {
                    "name": name,
                    "contact": mobile
                },
                "theme": {
                    "color": "#138808"
                }
            };

            var rzp = new Razorpay(options);
            rzp.open();
        };
    </script>

</body>

</html>