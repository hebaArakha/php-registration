<?php

//variable declaration
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

// Safe info to file
$data = implode(", ", [$fname, $lname, $gender, $address, $country, $email, $skills, $dept]) . "\n";
file_put_contents("../applicants.txt", $data, FILE_APPEND);


//SAfe info to database
$connection = new mysqli("localhost", "root", "", "regstr");

if ($connection->connect_errno) {
    echo "Failed to connect to MySQL: " . $connection->connect_error;
    exit();
}

$query = "insert into 
  info (fname , lname , address , country , gender , email , skills , dept)
  values ('{$fname}' , '{$lname}', '{$address}' , '{$country}' ,  '{$gender}'  , '{$email}' , '{$skills}' , '{$dept}')
  ";

//   echo $query;
$connection->query($query);

$connection->close();

require_once('../html/view.php');