<?php
// session_start();
// if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
//     header("Location: ../login.html");
//     exit();
// }

// require '../Database.php';

// $db = new Database();
// $conn = $db->getConnection();

// $query = "SELECT * FROM clients";
// $result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Management - DevDotCode Portal</title>
    <link rel="stylesheet" href="../static/stylesheets/admin-style.css">

</head>

<body class="admin-body">

    
    <div class="admin-container">
        <nav>
            <ul>
                <li><a href="index.php">Dashboard</a></li>
                <li><a href="users.php">Manage Users</a></li>
                <li><a href="clients.php">Manage Clients</a></li>
            </ul>
        </nav>
        <h1>Client Management</h1>
        <div class="admin-content">
            <h2>Clients</h2>
            <a href="add_client.php" class="btn">Add New Client</a>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php //while ($row = $result->fetch_assoc()) : ?>
                        <tr>
                            <td><?php //echo htmlspecialchars($row['id']); ?>1</td>
                            <td><?php //echo htmlspecialchars($row['name']); ?>name</td>
                            <td><?php //echo htmlspecialchars($row['email']); ?>email@gmail.com</td>
                            <td><?php //echo htmlspecialchars($row['phone']); ?>0342342309</td>
                            <td><?php //echo htmlspecialchars($row['address']);  ?>address</td>
                            <td>
                                <a href="edit_client.php?id=<?php //echo $row['id']; ?>" class="btn btn-edit">Edit</a>
                                <a href="delete_client.php?id=<?php //echo $row['id']; ?>" class="btn btn-delete" onclick="return confirm('Are you sure you want to delete this client?');">Delete</a>
                            </td>
                        </tr>
                    <?php //endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>

<?php
// $conn->close();
?>