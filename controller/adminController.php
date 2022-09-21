<?php

require_once("../model/adminModel.php");

class AdminController extends Admin
{
    public function createAdmin($adminName, $adminEmail, $adminTelephone, $adminPassword)
    {
        $result = parent::setAdmin($adminName, $adminEmail, $adminTelephone, $adminPassword);
        return $result;
    }

    public function adminLogin($adminName, $adminPassword)
    {
        $result = parent::getAdmin_by_username($adminName);

        if ($result) {
            if ($result->num_rows > 0) {
                $adminDetails = $result->fetch_assoc();
                $passwordDB = $adminDetails['password'];
                if (md5($adminPassword) == $passwordDB) {
                    header("Location: ../view/adminPage.php");
                } else {
                    $response = "Login failed";
                    header("Location: ../view/admin.php?reponse=$response");
                }
            } else {
                $response = "Please signup first";
                header("Location: ../view/admin.php?reponse=$response");
            }
        } else {
            $response = "Error Login";
            header("Location: ../view/admin.php?reponse=$response");
        }
    }
}

$adminController_obj = new AdminController($conn);
$request = isset($_GET["type"]) ? $_GET["type"] : "";

switch ($request) {
    case 'addNewAdmin':
        $adminName = $_POST["adminName"];
        $adminEmail = $_POST["adminEmail"];
        $adminTelephone = $_POST["adminTelephone"];
        $adminPassword = md5($_POST["adminPassword"]);

        $result = $adminController_obj->createAdmin($adminName, $adminEmail, $adminTelephone, $adminPassword);

        if ($result) {
            $response = "Success!";
        } else {
            $response = "Error!";
        }

        header("location: ../view/adminPage.php?response=$response");
        break;
        //form  action name
    case 'adminLogin':
        $adminName = $_POST["adminName"];
        $adminPassword = $_POST["adminPassword"];

        $adminController_obj->adminLogin($adminName, $adminPassword);
        break;
}
