<?php
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../login.html");
    exit();
}

require '../Database.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id'])) {
    $id = $_GET['id'];

    $db = new Database();
    $conn = $db->getConnection();

    $query = "DELETE FROM clients WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $id);
    $stmt->execute();

    $stmt->close();
    $conn->close();

    header("Location: clients.php");
    exit();
}
?>
