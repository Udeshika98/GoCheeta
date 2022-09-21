<?php

require_once("../model/driverModel.php");

class DriverController extends Driver
{
    public function createDriver($driverName, $driverEmail, $driverTelephone, $driverPassword)
    {
        $result = parent::setDriver($driverName, $driverEmail, $driverTelephone, $driverPassword);
        return $result;
    }

    public function updateDriver($driverId, $driverName, $driverEmail, $driverTelephone)
    {
        $result = parent::editDriver($driverId, $driverName, $driverEmail, $driverTelephone);

        return $result;
    }

    public function driverLogin($driverName, $driverPassword)
    {
        $result = parent::getDriver_by_username($driverName);

        if ($result) {
            if ($result->num_rows > 0) {
                $driverDetails = $result->fetch_assoc();
                $passwordDB = $driverDetails['password'];
                if (md5($driverPassword) == $passwordDB) {
                    header("Location: ../view/driver.php");
                } else {
                    $response = "Login failed";
                    header("Location: ../view/driverLogin.php?reponse=$response");
                }
            } else {
                $response = "Please signup first";
                header("Location: ../view/driverLogin.php?reponse=$response");
            }
        } else {
            $response = "Error Login";
            header("Location: ../view/driverLogin.php?reponse=$response");
        }
    }

    public function deleteDriver($driverId)
    {
        $result = $this->removeDriver($driverId);

        return $result;
    }

    // public function getDriverDetails($driverName, $driverEmail, $driverTelephone, $driverPassword) {
    //     $result = parent::getDriver_by_all($driverName, $driverEmail, $driverTelephone, $driverPassword);


    //     if($result->num_rows > 0){
    //         while($row = $result->fetch_assoc()){

    //         }
    //     } else{
    //         $response = "Error";
    //         header("Location: ../view/adminPage.php?reponse=$response");
    //     }
    // }


}

$driverController_obj = new DriverController($conn);
$request = isset($_GET["type"]) ? $_GET["type"] : "";

switch ($request) {
    case 'addNewDriver':
        $driverName = $_POST["driverName"];
        $driverEmail = $_POST["driverEmail"];
        $driverTelephone = $_POST["driverTelephone"];
        $driverPassword = md5($_POST["driverPassword"]);

        $result = $driverController_obj->createDriver($driverName, $driverEmail, $driverTelephone, $driverPassword);

        if ($result) {
            $response = "Success!";
        } else {
            $response = "Error!";
        }

        header("location: ../view/adminPage.php?response=$response");
        break;

    case 'editDriver':
        $driverId = $_POST["driverId"];
        $driverName = $_POST["driverName"];
        $driverEmail = $_POST["driverEmail"];
        $driverTelephone = $_POST["driverTelephone"];

        $result = $driverController_obj->updateDriver($driverId, $driverName, $driverEmail, $driverTelephone);

        if ($result) {
            $response = "Success!";
        } else {
            $response = "Error!";
        }


        $driverId = base64_encode($driverId);

        header("Location: ../view/edit_driver.php?response=$response&driverId=$driverId");

        break;
    case 'deleteDriver':
        $driverId =  base64_decode($_GET["driverId"]);
      
        $result = $driverController_obj->deleteDriver($driverId);

        if ($result) {
            $response = "Success!";
        } else {
            $response = "Error!";
        }

        header("Location: ../view/adminPage.php?response=$response");
        break;

        //form  action name
    case 'driverLogin':
        $driverName = $_POST["driverName"];
        $driverPassword = $_POST["driverPassword"];

        $driverController_obj->driverLogin($driverName, $driverPassword);
        break;

        // case 'getDriverDetails':
        //     $driverName = $_POST["driverName"];
        //     $driverEmail = $_POST["driverEmail"];
        //     $driverTelephone = $_POST["driverTelephone"];
        //     $driverPassword = md5($_POST["driverPassword"]);

        //     $driverController_obj->getDriverDetails($driverName, $driverEmail, $driverTelephone, $driverPassword);
        //     break;
}
