<?php
//echo "<pre>";print_r($_POST);exit;
require_once('config.php');
$sql = "insert into orderhistory (title, name, email, phone, country, address, amount, eventid) values "
        . "('".$_POST['title']."', '".$_POST['name']."', '".$_POST['email']."', '".$_POST['phone']."', "
        . "'".$_POST['country']."', '".$_POST['address']."', '".$_POST['amount']."', '".$_POST['eventid']."')";
mysqli_query($conn, $sql);
header("location: index.php");