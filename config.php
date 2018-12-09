<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "thecliof_usersdata";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

$path = 'C:/xampp/htdocs/riconferences';
$paypalURL = 'https://www.sandbox.paypal.com/cgi-bin/webscr'; //Test PayPal API URL
$paypalID = 'vkmsivaprasad@gmail.com'; //Business Email
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}