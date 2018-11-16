<?php
require_once('../config.php');
$sql = "delete from events where eventid=".$_POST['id'];
mysqli_query($conn, $sql); 
return 1;
?>