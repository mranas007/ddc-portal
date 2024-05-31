<?php
class Database
{
    private $hostname = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "ddcportal";
    private $conn;

    public function getConnection()
    {
        $this->conn = mysqli_connect($this->hostname, $this->username, $this->password, $this->database);

        if (!$this->conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        return $this->conn;
    }
}
