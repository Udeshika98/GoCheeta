<?php
require_once("../config/Database.php");

class Admin
{

    private $conn;
    private $table = "admin";

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    protected function setAdmin($adminName, $adminEmail, $adminTelephone, $adminPassword)
    {
        $sql = "INSERT INTO $this->table (username,email,telephone_number,password) values ('$adminName', '$adminEmail', $adminTelephone, '$adminPassword')";

        $result = $this->conn->query($sql) or $this->conn->error();

        return $result;
    }

    protected function getAdmin_by_username($adminName)
    {
        $sql = "SELECT * FROM $this->table WHERE username = '$adminName'";
        $result = $this->conn->query($sql) or $this->conn->error();

        return $result;
    }
}
