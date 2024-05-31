<?php
require '../database/db.php';
require '../models/user.model.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if (!empty($username) && !empty($password)) {
        $database = new Database;
        $db = $database->getConnection();

        $user = new User($db);
        $user->login($username, $password);
    }  
} else {
    echo "Please fill in all fields.";
}