<?php
// session_start();
// if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
//     header("Location: ../login.html");
//     exit();
// }

// require '../database/db.php';

// $db = new Database();
// $conn = $db->getConnection();

// $query = "SELECT * FROM users";
// $result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management - DevDotCode Portal</title>
    <link rel="stylesheet" href="../static/stylesheets/admin-style.css">
</head>
<body>
    <div class="admin-container">
        <h1>User Management</h1>
        <nav>
            <ul>
                <li><a href="index.php">Dashboard</a></li>
                <li><a href="users.php">Manage Users</a></li>
                <li><a href="clients.php">Manage Clients</a></li>
                <!-- Add more links as needed -->
            </ul>
        </nav>
        <div class="admin-content">
            <h2>Users</h2>
            <a href="add_user.php" class="btn">Add New User</a>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php // while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php //echo htmlspecialchars($row['id']); ?> 1</td>
                        <td><?php //echo htmlspecialchars($row['username']); ?> username</td>
                        <td><?php //echo htmlspecialchars($row['name']); ?> name</td>
                        <td><?php //echo htmlspecialchars($row['email']); ?> email@gmail.com</td>
                        <td><?php //echo htmlspecialchars($row['role']); ?>role</td>
                        <td>
                            <a href="edit_user.php?id=<?php //echo $row['id']; ?>" class="btn btn-edit">Edit</a>
                            <a href="delete_user.php?id=<?php //echo $row['id']; ?>" class="btn btn-delete" onclick="return confirm('Are you sure you want to delete this user?');">Delete</a>
                        </td>
                    </tr>
                    <?php // endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>

<?php
// $conn->close();
?>