<?php 

$data = [
    "fullName" => $_POST['fullNameValue'],
    "phoneNumber" => $_POST['phoneNumberValue'],
    "email" => $_POST['emailValue']
];


$connection = new PDO('https://60376bfd5435040017722533.mockapi.io/form');
var_dump($connection);
$result = $connection->execute($data);
var_dump($result);

?>