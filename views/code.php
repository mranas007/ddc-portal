<?php
session_start();
require 'db.php';

$result = $conn->query("SELECT * FROM clients");
$clients = $result->fetch_all(MYSQLI_ASSOC);

echo json_encode($clients);





session_start();
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $client_name = $_POST['client_name'];
    $contact_person = $_POST['contact_person'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $assigned_friend = $_POST['assigned_friend'];

    $stmt = $conn->prepare("INSERT INTO clients (client_name, contact_person, email, phone, address, assigned_friend) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $client_name, $contact_person, $email, $phone, $address, $assigned_friend);
    $stmt->execute();

    header('Location: clients.html');
}
