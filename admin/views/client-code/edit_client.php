<?php
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../login.html");
    exit();
}

require '../Database.php';

$db = new Database();
$conn = $db->getConnection();

if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM clients WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $client = $result->fetch_assoc();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $address = trim($_POST['address']);

    $query = "UPDATE clients SET name = ?, email = ?, phone = ?, address = ? WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ssssi", $name, $email, $phone, $address, $id);

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
    <title>Edit Client - DevDotCode Portal</title>
    <link rel="stylesheet" href="../static/stylesheets/admin-style.css">
</head>
<body>
    <div class="admin-container">
        <h1>Edit Client</h1>
        <nav>
            <ul>
                <li><a href="index.php">Dashboard</a></li>
                <li><a href="users.php">Manage Users</a></li>
                <li><a href="clients.php">Manage Clients</a></li>
            </ul>
        </nav>
        <div class="admin-content">
            <form action="edit_client.php" method="post">
                <input type="hidden" name="id" value="<?php echo htmlspecialchars($client['id']); ?>">

                <label for="name">Name</label>
                <input type="text" name="name" id="name" value="<?php echo htmlspecialchars($client['name']); ?>" required>

                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="<?php echo htmlspecialchars($client['email']); ?>" required>

                <label for="phone">Phone</label>
                <input type="text" name="phone" id="phone" value="<?php echo htmlspecialchars($client['phone']); ?>" required>

                <label for="address">Address</label>
                <input type="text" name="address" id="address" value="<?php echo htmlspecialchars($client['address']); ?>" required>

                <button type="submit" class="btn">Update Client</button>
            </form>
        </div>
    </div>
</body>
</html>
