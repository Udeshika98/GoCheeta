<?php
header("Content-Type: application/json");

include '../model/customerModel.php';

$customerObj = new Customer($conn);


$allCustomer = $customerObj->readAllCustomers();

$parentArray = [];

while ($row = $allCustomer->fetch_assoc()) {
    array_push($parentArray, $row);
}

echo json_encode($parentArray);

//creare new file  and save
file_put_contents('../JSON/readCustomer.json', json_encode($parentArray));