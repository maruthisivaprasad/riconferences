<?php
require_once('../config.php');
require_once('head.php');
$sql = "select * from submit_conferance where id=" . $_GET['id'];
$res = mysqli_query($conn, $sql);
$result = mysqli_fetch_object($res);
if ($result->eventid > 0) {
    $sql1 = "select * from events where eventid=" . $result->eventid;
    $res1 = mysqli_query($conn, $sql1);
    $result1 = mysqli_fetch_object($res1);
}
?>
<style type="text/css">
    .row > .col-md-2, h2{
        font-weight: bold;
    }
</style>
<body style="font-size: 14px;">
    <div>
        <div class="col-md-2">
            <?php require_once('menu.php'); ?>
        </div>
        <div class="col-md-10" style="padding-top: 20px;">   
            <div class="row" style="padding-top: 20px;"> 
                <h2>View Conferance</h2>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-2">Event Name</div>
                <div class="col-md-4"><?php echo $result1->title; ?></div>
                <div class="col-md-2">User Name</div>
                <div class="col-md-4"><?php echo $result->user_name; ?></div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-2">User Email</div>
                <div class="col-md-4"><?php echo $result->user_email; ?></div>
                <div class="col-md-2">Contact Number</div>
                <div class="col-md-4"><?php echo $result->contact_number; ?></div>
            </div>	
            <hr>
            <div class="row">
                <div class="col-md-2">User Presentation</div>
                <div class="col-md-4"><?php echo $result->user_presentation; ?></div>
                <div class="col-md-2">Address1</div>
                <div class="col-md-4"><?php echo $result->user_address1; ?></div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-2">Address2</div>
                <div class="col-md-4"><?php echo $result->user_address2; ?></div>
                <div class="col-md-2">City</div>
                <div class="col-md-4"><?php echo $result->user_city; ?></div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-2">State</div>
                <div class="col-md-4"><?php echo $result->user_state; ?></div>
                <div class="col-md-2">Country</div>
                <div class="col-md-4"><?php echo $result->user_country; ?></div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-2">Zip</div>
                <div class="col-md-4"><?php echo $result->user_zip; ?></div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-2">Upload File</div>
                <div class="col-md-4">
                    <?php if (!empty($result->uploadfile)) { ?><a href="../documents/<?php echo $result->eventid; ?>/<?php echo $result->uploadfile; ?>" target="_blank"><button class=" btn btn-sm btn-success"> Download File</button></a><?php } ?>
                </div>
            </div>
        </div>
    </div>
</body>  	