<?php
require_once('config.php');
$sql = "insert into submit_conferance (eventid, user_name, user_email, contact_number, user_presentation, user_address1, user_address2, user_city, user_state, user_country, user_zip, aggrement) values ('".$_POST['eventid']."', '".$_POST['user_name']."', '".$_POST['user_email']."', '".$_POST['contact_number']."', '".$_POST['user_presentation']."', '".$_POST['user_address1']."', '".$_POST['user_address2']."', '".$_POST['user_city']."', '".$_POST['user_state']."', '".$_POST['user_country']."', '".$_POST['user_zip']."', '".$_POST['aggrement']."')";
mysqli_query($conn, $sql);
$confid = $conn->insert_id;
$conferancefile = '';
if(isset($_FILES["uploadfile"]["name"]) && !empty($_FILES["uploadfile"]["name"]))
{
    if (!file_exists($path.'/documents/'.$_POST['eventid']))
        mkdir($path.'/documents/'.$_POST['eventid'], 0777, true);
    if (!file_exists($path.'/documents/'.$_POST['eventid'].'/conferance'))
       mkdir($path.'/documents/'.$_POST['eventid'].'/conferance', 0777, true);

    $extension = pathinfo($_FILES["uploadfile"]["name"], PATHINFO_EXTENSION);
    $name = substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, '8');
    $target_file = $path.'/documents/'.$_POST['eventid'].'/conferance/'.$name.".".$extension;
    
    if(move_uploaded_file($_FILES["uploadfile"]["tmp_name"], $target_file))
        $conferancefile = 'conferance/'.$name.'.'.$extension;
    $sql = "update submit_conferance set uploadfile='".$conferancefile."' where id=".$confid;
  	mysqli_query($conn, $sql); 
}
header("location: submit-conference.php?id=".$_POST['eventid']);
?>