<?php
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../login.html");
    exit();
}

require '../Database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $address = trim($_POST['address']);

    $db = new Database();
    $conn = $db->getConnection();

    $query = "INSERT INTO clients (name, email, phone, address) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ssss", $name, $email, $phone, $address);
    $stmt->execute();

    $stmt->close();
    $conn->close();

    header("Location: clients.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Client - DevDotCode Portal</title>
    <link rel="stylesheet" href="../static/stylesheets/admin-style.css">
</head>
<body>
    <div class="admin-container">
        <h1>Add Client</h1>
        <nav>
            <ul>
                <li><a href="index.php">Dashboard</a></li>
                <li><a href="users.php">Manage Users</a></li>
                <li><a href="clients.php">Manage Clients</a></li>
            </ul>
        </nav>
        <div class="admin-content">
            <form action="add_client.php" method="post">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" required>

                <label for="email">Email</label>
                <input type="email" name="email" id="email" required>

                <label for="phone">Phone</label>
                <input type="text" name="phone" id="phone" required>

                <label for="address">Address</label>
                <input type="text" name="address" id="address" required>

                <button type="submit" class="btn">Add Client</button>
            </form>
        </div>
    </div>
</body>
</html>
