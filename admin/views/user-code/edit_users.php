<?php
// session_start();
// if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
//     header("Location: ../login.html");
//     exit();
// }

// require '../Database.php';

// $db = new Database();
// $conn = $db->getConnection();

// if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id'])) {
//     $id = $_GET['id'];
//     $query = "SELECT * FROM users WHERE id = ?";
//     $stmt = $conn->prepare($query);
//     $stmt->bind_param("i", $id);
//     $stmt->execute();
//     $result = $stmt->get_result();
//     $user = $result->fetch_assoc();
// }

// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     $id = $_POST['id'];
//     $username = trim($_POST['username']);
//     $name = trim($_POST['name']);
//     $email = trim($_POST['email']);
//     $role = trim($_POST['role']);

//     if (!empty($_POST['password'])) {
//         $password = password_hash(trim($_POST['password']), PASSWORD_DEFAULT);
//         $query = "UPDATE users SET username = ?, password = ?, name = ?, email = ?, role = ? WHERE id = ?";
//         $stmt = $conn->prepare($query);
//         $stmt->bind_param("sssssi", $username, $password, $name, $email, $role, $id);
//     } else {
//         $query = "UPDATE users SET username = ?, name = ?, email = ?, role = ? WHERE id = ?";
//         $stmt = $conn->prepare($query);
//         $stmt->bind_param("ssssi", $username, $name, $email, $role, $id);
//     }

//     $stmt->execute();
//     $stmt->close();
//     $conn->close();

//     header("Location: users.php");
//     exit();
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User - DevDotCode Portal</title>
    <link rel="stylesheet" href="../static/stylesheets/admin-style.css">
</head>
<body>
    <div class="admin-container">
        <h1>Edit User</h1>
        <nav>
            <ul>
                <li><a href="index.php">Dashboard</a></li>
                <li><a href="users.php">Manage Users</a></li>
                <li><a href="clients.php">Manage Clients</a></li>
                <!-- Add more links as needed -->
            </ul>
        </nav>
        <div class="admin-content">
            <form action="edit_user.php" method="post">
                <input type="hidden" name="id" value="<?php echo htmlspecialchars($user['id']); ?>">

