<?php
class Database
{

    private $conn;
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $db = "gocheeta";

    public function __construct()
    {
        $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->db) or die("Connection Error");
    }

    public function getConnection()
    {
        return $this->conn;
    }
}

$db_obj = new Database();

$conn = $db_obj->getConnection();
