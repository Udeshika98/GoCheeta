<?php
require_once("../config/Database.php");

class Customer
{

    private $conn;
    private $table = "customers";

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    protected function setCustomer($username, $email, $telephone, $password)
    {
        $sql = "INSERT INTO $this->table (username,email,telephone_number,password) values ('$username','$email', $telephone,'$password')";

        $result = $this->conn->query($sql) or $this->conn->error();

        return $result;
    }

    protected function getCustomer_by_username($username)
    {
        $sql = "SELECT * FROM $this->table WHERE username = '$username'";
        $result = $this->conn->query($sql) or $this->conn->error();

        return $result;
    }

    protected function getAllCustomers()
    {
        $sql = "SELECT * FROM $this->table";
        $result = $this->conn->query($sql) or $this->conn->error();

        return $result;
    }

    //public access
    public function readAllCustomers()
    {
        $result = $this->getAllCustomers();
        return $result;
    }
}
