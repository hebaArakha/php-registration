<?php
$connection = new mysqli("localhost", "root", "", "regstr");

if ($connection->connect_errno) {
    echo "Failed to connect to MySQL: " . $connection->connect_error;
    exit();
}

$query = "select * from info where id={$_GET['id']}";
$result = $connection->query("$query");
$result = $result->fetch_assoc();

$id = $result["id"];
$fname = $result["fname"];
$lname = $result["lname"];
$address = $result["address"];
$country = $result["country"];
$gender = $result["gender"];
$email = $result["email"];
$skills = $result["skills"];
$dept = isset($result["dept"]) ? $result["dept"] : "Open Source";


require_once('../html/edit-form.php');

