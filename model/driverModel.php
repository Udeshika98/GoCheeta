<?php
require_once("../config/Database.php");

class Driver
{

    private $conn;
    private $table = "driver";

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    protected function setDriver($driverName, $driverEmail, $driverTelephone, $driverPassword)
    {
        $sql = "INSERT INTO $this->table (username,email,telephone_number,password) values ('$driverName', '$driverEmail', $driverTelephone, '$driverPassword')";

        $result = $this->conn->query($sql) or $this->conn->error();

        return $result;
    }

    protected function getDriver_by_driverId($driverId)
    {
        $sql = "SELECT * FROM $this->table WHERE driver_id = $driverId";
        $result = $this->conn->query($sql) or $this->conn->error();

        return $result;
    }



    protected function editDriver($driverId, $driverName, $driverEmail, $driverTelephone)
    {
        $sql = "UPDATE $this->table SET username = '$driverName', email = '$driverEmail', telephone_number = $driverTelephone " .
            "WHERE driver_id = $driverId";

        $result =  $this->conn->query($sql) or die($this->conn->error);

        return $result;
    }


    protected function getDriver_by_username($driverName)
    {
        $sql = "SELECT * FROM $this->table WHERE username = '$driverName'";
        $result = $this->conn->query($sql) or $this->conn->error();

        return $result;
    }

    protected function getAllDrivers()
    {
        $sql = "SELECT * FROM driver;";
        $result = $this->conn->query($sql);

        return $result;
    }


    protected function removeDriver($driverId)
    {
        $sql = "DELETE FROM $this->table WHERE driver_id = $driverId";
        $result = $this->conn->query($sql) or $this->conn->error();

        return $result;
    }

    //public  function
    public function readAllDrivers()
    {
        $result = $this->getAllDrivers();

        return $result;
    }

    public function readDriver_by_driverId($driverId)
    {
        $result = $this->getDriver_by_driverId($driverId);

        return $result;
    }

   
}
