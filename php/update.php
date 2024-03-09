<?php
$id = $_POST['id'];
$connection = new mysqli("localhost" , "root" , "" , "regstr");
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$address = $_POST["address"];
$country = $_POST["country"];
$gender = $_POST["gender"];
$email = $_POST["email"];
if (isset($_POST["skills"]) && is_array($_POST["skills"])) {
    $skills = "(" . implode("-", $_POST["skills"]) . ")";
} else {
    $skills = "No skills selected";
}
$dept = isset($_POST["dept"]) ? $_POST["dept"] : "Open Source";
if ($_POST["gender"] == 'female') {
    $gend = 'Miss';
} else {
    $gend = 'Mr';
}

$query = "update info 
SET fname = '$fname',
lname = '$lname',
address = '$address',
country = '$country',
gender = '$gender',
email = '$email',
skills = '$skills',
dept = '$dept'
WHERE id = $id";


$connection->query($query);

$connection->close();
require_once('../html/view.php');