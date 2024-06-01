<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    require '../database/db.php';

    $db = new Database();
    $conn = $db->getConnection();

    $user = new User($db);
    $user->login($username, $password);
}