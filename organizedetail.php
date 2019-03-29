<?php 
require_once('config.php');
$sql = "select * from organizing_committe where id=".$_POST['id'];
$res = mysqli_query($conn, $sql);
$result = mysqli_fetch_object($res);
?>
<div class="container">
        <div class="row">
            <div class="col-md-3"><img src="documents/organize/<?php echo $rec->image;?>" class="mb-2"></div>
            <div class="col-md-3">
                <p><?php echo $rec->name;?></p>
                <p><?php echo $rec->profession;?><?php echo $rec->university;?></p>
                <p><?php echo $rec->city;?></p>
            </div>
            <div class="col-md-3"><?php echo $rec->description;?></div>
        </div>
</div>