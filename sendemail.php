<?php
require_once('config.php');
$sql = "insert into contacts (name, email, subject, message) values ('".$_POST['name']."', '".$_POST['email']."', "
        . "'".$_POST['sub']."', '".mysql_real_escape_string($_POST['message'])."')";
    mysqli_query($conn, $sql);
$to = "someone@yahoo.com";
$from = $_POST['email'];
$name = $_POST['name'];
$headers = "From: $from";
$subject = $_POST['sub'];
$body = $_POST['message'];
$send = mail($to, $subject, $body, $headers);
?>