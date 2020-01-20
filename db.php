<?php

$servername = "localhost";
$username = "root";
$password = "root";
$db = "onlineshop";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>

commnt if you can cange password;

and you can cange commit
