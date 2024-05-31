<?php
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../login.html");
    exit();
}

require '../Database.php';

$db = new Database();
$conn = $db->getConnection();

// Fetch statistics
$clientCountQuery = "SELECT COUNT(*) AS total_clients FROM clients";
$clientCountResult = $conn->query($clientCountQuery);
$totalClients = $clientCountResult->fetch_assoc()['total_clients'];

$userCountQuery = "SELECT COUNT(*) AS total_users FROM users";
$userCountResult = $conn->query($userCountQuery);
$totalUsers = $userCountResult->fetch_assoc()['total_users'];

$recentActivitiesQuery = "SELECT * FROM activities ORDER BY created_at DESC LIMIT 5";
$recentActivitiesResult = $conn->query($recentActivitiesQuery);

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - DevDotCode Portal</title>
    <link rel="stylesheet" href="../static/stylesheets/admin-style.css">
</head>
<body class="admin-body">
    <div class="admin-container">
        <h1>Dashboard</h1>
        <nav>
            <ul>
                <li><a href="index.php">Dashboard</a></li>
                <li><a href="users.php">Manage Users</a></li>
                <li><a href="clients.php">Manage Clients</a></li>
            </ul>
        </nav>
        <div class="admin-content">
            <div class="summary-cards">
                <div class="card">
                    <h3>Total Clients</h3>
                    <p><?php //echo $totalClients; ?></p>
                </div>
                <div class="card">
                    <h3>Total Users</h3>
                    <p><?php //echo $totalUsers; ?></p>
                </div>
            </div>
            <div class="recent-activities">
                <h2>Recent Activities</h2>
                <ul>
                    <?php //while ($activity = $recentActivitiesResult->fetch_assoc()): ?>
                        <li><?php //echo htmlspecialchars($activity['activity_description']); ?> - <?php //echo htmlspecialchars($activity['created_at']); ?>LI</li>
                    <?php //endwhile; ?>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>
