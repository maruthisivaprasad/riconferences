<?php
require_once('../config.php');
$sql = "delete from key_committe where id=".$_POST['id'];
mysqli_query($conn, $sql); 
return 1;
?>