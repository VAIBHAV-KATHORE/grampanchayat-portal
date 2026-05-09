<?php
include "../db.php";
?>
<!DOCTYPE html>
<html lang="mr">

<head>
    <meta charset="UTF-8">
    <title>Service Applications</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.3/css/dataTables.bootstrap5.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/3.0.1/css/buttons.bootstrap5.css">

    <style>
        body {
            background: linear-gradient(135deg, #ff9933, #ffffff, #128807);
            background-size: 400% 400%;
            animation: bgMove 10s infinite alternate;
        }

        @keyframes bgMove {
            0% {
                background-position: 0 0;
            }

            100% {
                background-position: 100% 100%;
            }
        }

        /* 3D Title */
        .title-box {
            background: #fff;
            padding: 18px;
            border-radius: 15px;
            box-shadow: 0px 10px 25px rgba(0, 0, 0, .2);
            border-left: 8px solid #ff6600;
            border-right: 8px solid #128807;
        }

        /* Glass Card */
        .card-gov {
            backdrop-filter: blur(10px);
            background: rgba(255, 255, 255, 0.85);
            border-radius: 20px;
            padding: 25px;
            box-shadow: 0 0 25px rgba(0, 0, 0, .3);
        }

        /* Table Style */
        .table-gov {
            width: 100%;
            border: 1px solid #000;
            border-collapse: collapse;
        }

        .table-gov th {
            background: linear-gradient(#ff9933, #ff6600);
            color: #000;
            border: 1px solid #000;
            text-align: center;
        }

        .table-gov td {
            border: 1px solid #000;
        }

        /* Multi Color Buttons */
        .dt-buttons .btn {
            border-radius: 50px !important;
            font-weight: bold;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, .4);
            transition: 0.3s;
        }

        .dt-button.buttons-copy {
            background: #1abc9c !important;
            color: #fff !important;
        }

        .dt-button.buttons-excel {
            background: #2ecc71 !important;
            color: #fff !important;
        }

        .dt-button.buttons-pdf {
            background: #e74c3c !important;
            color: #fff !important;
        }

        .dt-button.buttons-print {
            background: #3498db !important;
            color: #fff !important;
        }

        .dt-buttons .btn:hover {
            transform: scale(1.05);
        }

        /* Document Button */
        .doc-btn {
            background: linear-gradient(45deg, #3498db, #8e44ad);
            color: white !important;
            border-radius: 30px;
            padding: 5px 15px;
            box-shadow: 0px 5px 12px rgba(0, 0, 0, .5);
        }

        .doc-btn:hover {
            transform: scale(1.1);
        }

        .back-top-left {
            position: absolute;
            top: 15px;
            left: 15px;
            z-index: 999;
        }

        .gov-card {
            position: relative;
            /* important */
        }

        /* Back Button Style */
        .back-btn {
            background: linear-gradient(45deg, #ff512f, #f09819);
            color: #fff;
            border: none;
            border-radius: 35px;
            padding: 8px 22px;
            font-weight: 700;
            letter-spacing: 0.5px;
            box-shadow: 0 6px 0px #000;
            transition: 0.3s ease-in-out;
        }

        /* Hover Glow Effect */
        .back-btn:hover {
            color: #fff;
            background: linear-gradient(45deg, #f09819, #ff512f);
            transform: translateY(-3px) scale(1.03);
            box-shadow: 0 10px 18px rgba(0, 0, 0, 0.4);
        }

        /* Click Press Effect */
        .back-btn:active {
            transform: translateY(3px) scale(0.97);
            box-shadow: 0 2px 0px #000;
        }
    </style>
</head>

<body>

    <div class="container my-4">

        <div class="title-box text-center">
            <h3 class="text-success fw-bold">🏛️ सेवा अर्ज नोंदी (Admin Panel)</h3>
            <a href="../admin/dashboard.php" class="btn btn-gov back-btn back-top-left">⬅ मागे जा </a>
        </div>

        <div class="card-gov mt-4">

            <table id="serviceTable" class="table table-striped table-bordered table-gov">
                <thead>
                    <tr>
                        <th>Sr</th>
                        <th>नाव</th>
                        <th>मोबाइल</th>
                        <th>सेवा</th>
                        <th>Document</th>
                        <th>Date</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $i = 1;
                    $result = mysqli_query($conn, "SELECT * FROM service_applications ORDER BY id DESC");
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                        <tr>
                            <td><?php echo $i++; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['phone']; ?></td>
                            <td><?php echo $row['service']; ?></td>
                            <td>
                                <a href="../uploads/<?php echo $row['document']; ?>" class="doc-btn" target="_blank">
                                    View
                                </a>
                            </td>
                            <td><?php echo $row['submitted_at']; ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.0.3/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.3/js/dataTables.bootstrap5.js"></script>

    <script src="https://cdn.datatables.net/buttons/3.0.1/js/dataTables.buttons.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.1/js/buttons.bootstrap5.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>

    <script src="https://cdn.datatables.net/buttons/3.0.1/js/buttons.html5.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.1/js/buttons.print.js"></script>

    <script>
        new DataTable('#serviceTable', {
            layout: {
                topStart: {
                    buttons: [
                        'copy', 'excel', 'pdf', 'print'
                    ]
                }
            }
        });
    </script>

</body>

</html>