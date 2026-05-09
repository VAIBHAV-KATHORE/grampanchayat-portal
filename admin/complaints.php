<?php
include("../db.php");

// Handle inline status update
if (isset($_GET['update_status']) && isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $newStatus = mysqli_real_escape_string($conn, $_GET['update_status']);
    mysqli_query($conn, "UPDATE complaints SET status='$newStatus' WHERE id=$id");
    header("Location: " . $_SERVER['PHP_SELF'] . "?page=" . $_GET['page'] . "&search=" . $_GET['search'] . "&status=" . $_GET['status']);
    exit;
}

// Pagination setup
$limit = 10; // complaints per page
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
$start = ($page - 1) * $limit;

// Search and Filter
$search = isset($_GET['search']) ? mysqli_real_escape_string($conn, $_GET['search']) : '';
$filter = isset($_GET['status']) ? mysqli_real_escape_string($conn, $_GET['status']) : '';

// Build SQL query
$where = [];
if ($search != '') $where[] = "(name LIKE '%$search%' OR phone LIKE '%$search%' OR complaint LIKE '%$search%')";
if ($filter != '') $where[] = "status='$filter'";

$whereSQL = $where ? 'WHERE ' . implode(' AND ', $where) : '';

$totalQuery = mysqli_query($conn, "SELECT COUNT(*) as total FROM complaints $whereSQL");
$totalData = mysqli_fetch_assoc($totalQuery);
$totalPages = ceil($totalData['total'] / $limit);

$dataQuery = mysqli_query($conn, "SELECT * FROM complaints $whereSQL ORDER BY id DESC LIMIT $start, $limit");
?>

<!DOCTYPE html>
<html lang="mr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>तक्रारी – Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background: #f1f5f9;
            font-family: Arial, sans-serif;
        }

        h2 {
            text-align: center;
            margin: 30px 0;
            color: #164a41;
            font-weight: 700;
        }

        .table-wrapper {
            background: #fff;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        th {
            background-color: #14734a;
            color: #fff;
            text-align: center;
        }

        td {
            text-align: center;
        }

        tr:hover {
            background-color: #e6f2f2;
        }

        .status {
            padding: 5px 10px;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
        }

        .status-pending {
            background-color: #ffcc00;
            color: #333;
        }

        .status-resolved {
            background-color: #28a745;
            color: #fff;
        }

        .status-inprogress {
            background-color: #17a2b8;
            color: #fff;
        }

        .filter-form .form-control {
            width: auto;
            display: inline-block;
            margin-right: 10px;
        }

        .back-btn {
            margin-bottom: 20px;
            position: fixed;
            color: #000;
            left: 50px;
            margin-right: 10px;

        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <h2>📋 तक्रारी व्यवस्थापन</h2>



        <!-- Search and Filter Form -->
        <form method="GET" class="filter-form text-center mb-4">
            <input type="text" name="search" value="<?= htmlspecialchars($search) ?>" class="form-control" placeholder="नाव, फोन, किंवा तक्रार शोधा">
            <select name="status" class="form-control">
                <option value="">सर्व स्थिती</option>
                <option value="Pending" <?= $filter == 'Pending' ? 'selected' : '' ?>>Pending</option>
                <option value="InProgress" <?= $filter == 'InProgress' ? 'selected' : '' ?>>In Progress</option>
                <option value="Resolved" <?= $filter == 'Resolved' ? 'selected' : '' ?>>Resolved</option>
            </select>
            <button class="btn btn-success"><i class="fa fa-search"></i> शोधा</button>
        </form>

        <div class="table-wrapper table-responsive">
            <table class="table table-bordered table-hover align-middle">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>नाव</th>
                        <th>फोन</th>
                        <th>तक्रार</th>
                        <th>स्थिती</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($r = mysqli_fetch_assoc($dataQuery)):
                        $statusClass = strtolower($r['status']) == 'pending' ? 'status-pending' : (strtolower($r['status']) == 'resolved' ? 'status-resolved' : 'status-inprogress');
                    ?>
                        <tr>
                            <td><?= $r['id'] ?></td>
                            <td><?= $r['name'] ?></td>
                            <td><?= $r['phone'] ?></td>
                            <td><?= $r['complaint'] ?></td>
                            <td>
                                <div class="dropdown">
                                    <span class="status <?= $statusClass ?> dropdown-toggle" data-bs-toggle="dropdown"><?= $r['status'] ?></span>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="?update_status=Pending&id=<?= $r['id'] ?>&page=<?= $page ?>&search=<?= urlencode($search) ?>&status=<?= urlencode($filter) ?>">Pending</a></li>
                                        <li><a class="dropdown-item" href="?update_status=InProgress&id=<?= $r['id'] ?>&page=<?= $page ?>&search=<?= urlencode($search) ?>&status=<?= urlencode($filter) ?>">In Progress</a></li>
                                        <li><a class="dropdown-item" href="?update_status=Resolved&id=<?= $r['id'] ?>&page=<?= $page ?>&search=<?= urlencode($search) ?>&status=<?= urlencode($filter) ?>">Resolved</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <nav aria-label="Page navigation example" class="mt-3">
            <ul class="pagination justify-content-center">
                <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                    <li class="page-item <?= $i == $page ? 'active' : '' ?>">
                        <a class="page-link" href="?page=<?= $i ?>&search=<?= urlencode($search) ?>&status=<?= urlencode($filter) ?>"><?= $i ?></a>
                    </li>
                <?php endfor; ?>
            </ul>
        </nav>
    </div>
    <!-- Back Button -->
    <a href="dashboard.php" class="btn btn-secondary back-btn"><i class="fa fa-arrow-left"></i> Back</a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>