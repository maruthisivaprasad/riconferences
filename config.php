<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "thecliof_usersdata";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

$path = 'C:/xampp/htdocs/riconferences';
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}