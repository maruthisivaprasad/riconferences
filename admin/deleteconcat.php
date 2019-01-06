<?php
require_once('../config.php');
$sql = "delete from contacts where concatid=".$_POST['id'];
mysqli_query($conn, $sql); 
return 1;
?>