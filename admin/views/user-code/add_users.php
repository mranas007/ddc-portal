<?php
// session_start();
// if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
//     header("Location: ../login.html");
//     exit();
// }

// require '../Database.php';

// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     $username = trim($_POST['username']);
//     $password = password_hash(trim($_POST['password']), PASSWORD_DEFAULT);
//     $name = trim($_POST['name']);
//     $email = trim($_POST['email']);
//     $role = trim($_POST['role']);

//     $db = new Database();
//     $conn = $db->getConnection();

//     $query = "INSERT INTO users (username, password, name, email, role) VALUES (?, ?, ?, ?, ?)";
//     $stmt = $conn->prepare($query);
//     $stmt->bind_param("sssss", $username, $password, $name, $email, $role);
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
    <title>Add User - DevDotCode Portal</title>
    <link rel="stylesheet" href="../static/stylesheets/admin-style.css">

</head>
<body>

    <div class="admin-container">
        <h1>Add User</h1>
        <nav>
            <ul>
                <li><a href="index.php">Dashboard</a></li>
                <li><a href="users.php">Manage Users</a></li>
                <li><a href="clients.php">Manage Clients</a></li>
                <!-- Add more links as needed -->
            </ul>
        </nav>
        <div class="admin-content">
            <form action="add_user.php" method="post">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" required>

                <label for="password">Password</label>
                <input type="password" name="password" id="password" required>

                <label for="name">Full Name</label>
                <input type="text" name="name" id="name" required>

                <label for="email">Email</label>
                <input type="email" name="email" id="email" required>

                <label for="role">Role</label>
                <select name="role" id="role" required>
                    <option value="user">User</option>
                    <option value="admin">Admin</option>
                </select>

                <button type="submit" class="btn">Add User</button>
            </form>
        </div>
    </div>

</body>
</html>
