<?php
$connection = new mysqli("localhost", "root", "", "regstr");


if ($connection->connect_errno) {
    echo "Failed to connect to MySQL: " . $connection->connect_error;
    exit();
}

$query = "delete from info where id={$_GET['id']}";
$connection->query("$query");

$connection->close();


header("Location:../html/list.php?db");