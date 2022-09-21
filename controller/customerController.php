<?php

require_once("../model/customerModel.php");

class CustomerController extends Customer
{
    public function createCustomer($username, $email, $telephone, $password)
    {
        $result = parent::setCustomer($username, $email, $telephone, $password);
        return $result;
    }

    public function login($username, $password)
    {
        $result = parent::getCustomer_by_username($username);

        if ($result) {
            if ($result->num_rows > 0) {
                $custormerDetails = $result->fetch_assoc();
                $passwordDB = $custormerDetails['password'];
                if (md5($password) == $passwordDB) {
                    header("Location: ../view/customerPage.php");
                } else {
                    $response = "Login failed";
                    header("Location: ../view/login.php?reponse=$response");
                }
            } else {
                $response = "Please signup first";
                header("Location: ../view/login.php?reponse=$response");
            }
        } else {
            $response = "Error Login";
            header("Location: ../view/login.php?reponse=$response");
        }
    }
}

$customerController_obj = new CustomerController($conn);
$request = isset($_GET["type"]) ? $_GET["type"] : "";

switch ($request) {
    case 'addNewCustomer':
        $username = $_POST["username"];
        $email = $_POST["email"];
        $telephone = $_POST["telephone"];
        $password = md5($_POST["password"]);

        $result = $customerController_obj->createCustomer($username, $email, $telephone, $password);

        if ($result) {
            $response = "Success!";
        } else {
            $response = "Error!";
        }

        header("location: ../view/signup.php?response=$response");
        break;
        //form  action name
    case 'login':
        $username = $_POST["username"];
        $password = $_POST["password"];

        $customerController_obj->login($username, $password);

        
        break;
}
