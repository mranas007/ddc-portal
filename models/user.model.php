<?php
class User
{
    private $conn;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function login($username, $password)
    {
        $query = "SELECT * FROM `users` WHERE username = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            if ($password === $user['password']) {
                session_start();
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['name'] = $user['name'];
                header("Location: ../views/dashboard.php");
                exit();
            } else {
                header("Location: ../../index.php?notfound=invalidpass");
            }
        } else {
            header("Location: ../../index.php?notfound=invaliduser");
        }
        $stmt->close();
        $this->conn->close();
    }
}
