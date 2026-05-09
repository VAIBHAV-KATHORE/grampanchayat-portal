<?php
$conn = new mysqli("localhost", "root", "", "panchayat_db");
$limit = 10;
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$start = ($page - 1) * $limit;
$search = isset($_GET['search']) ? $_GET['search'] : "";

$query = "SELECT * FROM contact_messages 
WHERE name LIKE '%$search%' OR phone LIKE '%$search%' 
ORDER BY id DESC LIMIT $start,$limit";
$result = $conn->query($query);
$total = $conn->query("SELECT COUNT(*) as total FROM contact_messages")->fetch_assoc()['total'];
$pages = ceil($total / $limit);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Admin Messages</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            background: #0b1220;
            color: white;
            font-family: Arial;
        }

        .container {
            width: 90%;
            margin: 20px auto;
        }

        h2 {
            text-align: center;
        }

        input {
            padding: 8px;
            width: 250px;
            border-radius: 5px;
            border: 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }

        table th,
        table td {
            padding: 10px;
            border: 1px solid #444;
        }

        table th {
            background: #1e293b;
        }

        .row {
            background: #111827;
        }

        .pagination a {
            padding: 8px 12px;
            background: #1f2937;
            margin: 3px;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .pagination a:hover {
            background: #4b5563;
        }
    </style>
</head>

<body>
    <div class="container">

        <h2>📨 Contact Messages</h2>

        <form method="GET">
            <input type="text" name="search" placeholder="Search..." value="<?= $search ?>">
            <button>Search</button>
        </form>

        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Message</th>
                <th>Date</th>
            </tr>

            <?php while ($row = $result->fetch_assoc()) { ?>
                <tr class="row">
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['name'] ?></td>
                    <td><?= $row['email'] ?></td>
                    <td><?= $row['phone'] ?></td>
                    <td><?= $row['message'] ?></td>
                    <td><?= $row['created_at'] ?></td>
                </tr>
            <?php } ?>
        </table>

        <div class="pagination">
            <?php for ($i = 1; $i <= $pages; $i++) { ?>
                <a href="?page=<?= $i ?>&search=<?= $search ?>"><?= $i ?></a>
            <?php } ?>
        </div>

    </div>
</body>

</html>