<?php
require_once('../config.php');
require_once('head.php');
$sql = "select * from events where eventid=" . $_GET['id'];
$eventid = $_GET['id'];
$res = mysqli_query($conn, $sql);
$result = mysqli_fetch_object($res);
?>
<style type="text/css">
    .row > .col-md-2, h2{
        font-weight: bold;
    }
</style>
<body>
    <div style="font-size: 14px;">
        <div class="col-md-2">
            <?php require_once('menu.php'); ?>
        </div>
        <div class="col-md-10" style="padding-top: 20px;">   
            <div class="row" style="padding-top: 20px;"> 
                <h2>View Event</h2>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-2">Title</div>
                <div class="col-md-4"><?php echo $result->title; ?></div>
                <div class="col-md-2">Date</div>
                <div class="col-md-4"><?php echo $result->date; ?></div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-2">Location</div>
                <div class="col-md-4"><?php echo $result->location; ?></div>
                <div class="col-md-2">Theme</div>
                <div class="col-md-4"><?php echo $result->theme; ?></div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-2">Description</div>
                <div class="col-md-8"><?php echo $result->description; ?></div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-2">Key Topics</div>
                <div class="col-md-8"><?php echo $result->key_topics; ?></div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-2">Brochure</div>
                <div class="col-md-8"><?php if (!empty($result->brochure)) { ?><li class="mt-2"><a href="../documents/<?php echo $result->eventid; ?>/<?php echo $result->brochure; ?>" target="_blank"><button class=" btn btn-sm btn-success"> Download Brochure</button></a><?php } ?></div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-2">Thumb Image</div>
                <div class="col-md-8"><?php if (!empty($result->thumb_image)) { ?><img src="../documents/<?php echo $result->eventid; ?>/<?php echo $result->thumb_image; ?>" alt=""><?php } ?></div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-2">Background Image</div>
                <div class="col-md-4"><?php if (!empty($result->background_image)) { ?><img src="../documents/<?php echo $result->eventid; ?>/<?php echo $result->background_image; ?>" alt=""><?php } ?></div>
            </div>
            <hr>        
            <div class="row">
                <div class="col-md-2">Slider Images</div>
                <div class="col-md-4">
                    <?php
                    if (!empty($result->slider_images)) {
                        $sliderimages = explode(",", $result->slider_images);
                        if ($sliderimages > 0) {
                            foreach ($sliderimages as $key => $value) {
                                if (!empty($value)) {
                                    ?>
                                    <img src="../documents/<?php echo $result->eventid; ?>/<?php echo $value; ?>" alt="First slide">
                                    <?php
                                }
                            }
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</body> 