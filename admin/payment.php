<?php
include("../db.php");
?>

<!DOCTYPE html>
<html lang="mr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ग्रामपंचायत Payment Records</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.bootstrap5.min.css">

    <style>
        body {
            background: linear-gradient(120deg, #33eeffff, #ffcc66);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .header-logo {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }

        .header-logo img {
            height: 80px;
            margin-right: 20px;
        }

        h3 {
            color: #003366;
            text-shadow: 1px 1px 2px #fff;
        }

        .table-container {
            background: #fff;
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }

        thead th {
            background: linear-gradient(to right, #003366, #0055a5);
            color: #fff;
            text-align: center;
        }

        tbody tr {
            transition: transform 0.3s, box-shadow 0.3s;
            cursor: pointer;
        }

        tbody tr:hover {
            transform: scale(1.02);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
            background: #f0f8ff;
        }

        tbody td {
            text-align: center;
            vertical-align: middle;
            font-weight: 500;
        }

        tbody tr:nth-child(odd) {
            background: #fdf5e6;
        }

        tbody tr:nth-child(even) {
            background: #fff0f5;
        }

        .btn-custom {
            background: linear-gradient(to right, #33ff74ff, #ff6600);
            color: #fff;
            font-weight: bold;
            border-radius: 50px;
            padding: 6px 20px;
            transition: 0.3s;
        }

        .btn-custom:hover {
            background: linear-gradient(to right, #0bcbc2ff, #ff9933);
            color: #fff;
        }

        .back-btn {
            margin-bottom: 15px;
        }
    </style>
</head>

<body class="p-3">

    <div class="container">

        <!-- Header with Logo -->
        <div class="header-logo">
            <img src="../images/ashok_stambh.png" alt="Ashok Stambh Logo">
            <h3>💳 ग्रामपंचायत Payment Records</h3>
        </div>

        <!-- Back Button -->
        <a href="../admin/dashboard.php" class="btn btn-custom back-btn">🔙 मागे जा</a>

        <!-- Table Container -->
        <div class="table-container">
            <div class="table-responsive">
                <table id="paymentTable" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>आयडी</th>
                            <th>नाव</th>
                            <th>मोबाइल</th>
                            <th>कर प्रकार</th>
                            <th>रक्कम (₹)</th>
                            <th>पेमेंट आयडी</th>
                            <th>दिनांक</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = "SELECT * FROM gp_payment ORDER BY id DESC";
                        $result = mysqli_query($conn, $query);

                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>
                                    <td>{$row['id']}</td>
                                    <td>{$row['name']}</td>
                                    <td>{$row['mobile']}</td>
                                    <td>{$row['tax_type']}</td>
                                    <td>{$row['amount']}</td>
                                    <td>{$row['payment_id']}</td>
                                    <td>{$row['created_at']}</td>
                                </tr>";
                            }
                        } else {
                            echo "<tr><td colspan='6' class='text-center text-danger'>कोणतीही नोंद आढळली नाही</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.bootstrap5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.print.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#paymentTable').DataTable({
                dom: 'Bfrtip',
                buttons: [{
                        extend: 'excelHtml5',
                        text: 'Excel डाउनलोड',
                        className: 'btn btn-success'
                    },
                    {
                        extend: 'pdfHtml5',
                        text: 'PDF डाउनलोड',
                        className: 'btn btn-danger'
                    }
                ],
                language: {
                    search: "शोधा:",
                    lengthMenu: "_MENU_ रेकॉर्ड दाखवा",
                    info: "दर्शवलेले _START_ ते _END_ रेकॉर्ड, एकूण _TOTAL_",
                    infoEmpty: "दर्शवलेले 0 ते 0 रेकॉर्ड, एकूण 0",
                    infoFiltered: "(एकूण _MAX_ मधून शोधले)",
                    zeroRecords: "सापडले नाही",
                    paginate: {
                        first: "प्रथम",
                        last: "शेवट",
                        next: "पुढे",
                        previous: "मागे"
                    }
                }
            });
        });
    </script>

</body>

</html>