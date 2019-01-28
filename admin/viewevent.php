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
                <div class="col-md-2">Organising Committee</div>
                <div class="col-md-8"><?php echo $result->organising_committee; ?></div>
            </div>
            <hr>
            
            <div class="row">
                <div class="col-md-2">Speaker Early Academic</div>
                <div class="col-md-8"><?php echo $result->speaker_early_academic; ?></div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-2">Speaker Early Business</div>
                <div class="col-md-8"><?php echo $result->speaker_early_business; ?></div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-2">Speaker Regular Academic</div>
                <div class="col-md-8"><?php echo $result->speaker_regular_academic; ?></div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-2">Speaker Regular Business</div>
                <div class="col-md-8"><?php echo $result->speaker_regular_business; ?></div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-2">Speaker OnSpot Academic</div>
                <div class="col-md-8"><?php echo $result->speaker_onspot_academic; ?></div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-2">Speaker OnSpot Business</div>
                <div class="col-md-8"><?php echo $result->speaker_onspot_business; ?></div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-2">Student Early Academic</div>
                <div class="col-md-8"><?php echo $result->student_early_academic; ?></div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-2">Student Early Business</div>
                <div class="col-md-8"><?php echo $result->student_early_business; ?></div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-2">Student Regular Academic</div>
                <div class="col-md-8"><?php echo $result->student_regular_academic; ?></div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-2">Student Regular Business</div>
                <div class="col-md-8"><?php echo $result->student_regular_business; ?></div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-2">Student OnSpot Academic</div>
                <div class="col-md-8"><?php echo $result->student_onspot_academic; ?></div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-2">Student OnSpot Business</div>
                <div class="col-md-8"><?php echo $result->student_onspot_business; ?></div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-2">Delegate Early Academic</div>
                <div class="col-md-8"><?php echo $result->delegate_early_academic; ?></div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-2">Delegate Early Business</div>
                <div class="col-md-8"><?php echo $result->delegate_early_business; ?></div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-2">Delegate Regular Academic</div>
                <div class="col-md-8"><?php echo $result->delegate_regular_academic; ?></div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-2">Delegate Regular Business</div>
                <div class="col-md-8"><?php echo $result->delegate_regular_business; ?></div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-2">Delegate Onspot Academic</div>
                <div class="col-md-8"><?php echo $result->delegate_onspot_academic; ?></div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-2">Delegate Onspot Business</div>
                <div class="col-md-8"><?php echo $result->delegate_onspot_business; ?></div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-2">Early  date</div>
                <div class="col-md-8"><?php echo $result->early_date; ?></div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-2">Regular Date</div>
                <div class="col-md-8"><?php echo $result->regular_date; ?></div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-2">Onspot date</div>
                <div class="col-md-8"><?php echo $result->onsport_date; ?></div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-2">Speaker Accommodation</div>
                <div class="col-md-8"><?php echo $result->speaker_accommodation; ?></div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-2">Student Accommodation</div>
                <div class="col-md-8"><?php echo $result->student_accommodation; ?></div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-2">Delegate Accommodation</div>
                <div class="col-md-8"><?php echo $result->delegate_accommodation; ?></div>
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