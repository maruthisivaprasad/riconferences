<?php
require_once('../config.php');
function slugify($string) {
    // Make the whole string lowercase
    $slug = strtolower($string);
    // Replace utf-8 characters with 7-bit ASCII equivelants
    $slug = iconv("utf-8", "ascii//TRANSLIT", $slug);
    // Replace any number of non-alphanumeric characters with hyphens
    $slug = preg_replace("/[^a-z0-9-]+/", "-", $slug);
    // Remove any hyphens from the beginning & end of the string
    return trim($slug, "-");
}
if (isset($_POST) && !empty($_POST)) {
    $enddate = $earlydate = $regulardate = $onspotdate = '';
    if(isset($_POST['end_date']) && !empty($_POST['end_date']))
    {
        $enddate1 = explode("/", $_POST['end_date']);
        $enddate = $enddate1[2] . "-" . $enddate1[0] . "-" . $enddate1[1];
    }
    if(isset($_POST['earlydate']) && !empty($_POST['earlydate']))
    {
        $earlydate1 = explode("/", $_POST['earlydate']);
        $earlydate = $earlydate1[2] . "-" . $earlydate1[0] . "-" . $earlydate1[1];
    }
    if(isset($_POST['regulardate']) && !empty($_POST['regulardate']))
    {
        $regulardate1 = explode("/", $_POST['regulardate']);
        $regulardate = $regulardate1[2] . "-" . $regulardate1[0] . "-" . $regulardate1[1];
    }
    if(isset($_POST['onspotdate']) && !empty($_POST['onspotdate']))
    {
        $onspotdate1 = explode("/", $_POST['onspotdate']);
        $onspotdate = $onspotdate1[2] . "-" . $onspotdate1[0] . "-" . $onspotdate1[1];
    }
    $sql = "insert into events (title, slug, date, enddate, location, theme, description, key_topics, speaker_early_academic,"
            . "speaker_early_business, speaker_regular_academic, speaker_regular_business, speaker_onspot_academic,"
            . "speaker_onspot_business, student_early_academic, student_early_business, student_regular_academic,"
            . "student_regular_business, student_onspot_academic, student_onspot_business, delegate_early_academic,"
            . "delegate_early_business, delegate_regular_academic, delegate_regular_business, delegate_onspot_academic,"
            . "delegate_onspot_business, early_date, regular_date, organising_committee, onsport_date, speaker_accommodation,"
            . "student_accommodation, delegate_accommodation, hotel_name, hotel_address, hotel_phone) values "
            . "('" . $_POST['title'] . "', '" . slugify($_POST['slug']) . "', '" . $_POST['date'] . "', '" . $enddate . "', "
            . "'" . $_POST['location'] . "', '" . $_POST['theme'] . "', "
            . "'" . htmlentities(addslashes($_POST['description'])) . "', "
            . "'" . htmlentities(addslashes($_POST['key_topics'])) . "', '" . $_POST['speaker_early_academic'] . "', "
            . "'" . $_POST['speaker_early_business'] . "', '" . $_POST['speaker_regular_academic'] . "', "
            . "'" . $_POST['speaker_regular_business'] . "', '" . $_POST['speaker_onspot_academic'] . "', "
            . "'" . $_POST['speaker_onspot_business'] . "', '" . $_POST['student_early_academic'] . "', "
            . "'" . $_POST['student_early_business'] . "', '" . $_POST['student_regular_academic'] . "', "
            . "'" . $_POST['student_regular_business'] . "', '" . $_POST['student_onspot_academic'] . "', "
            . "'" . $_POST['student_onspot_business'] . "', '" . $_POST['delegate_early_academic'] . "', "
            . "'" . $_POST['delegate_early_business'] . "', '" . $_POST['delegate_regular_academic'] . "', "
            . "'" . $_POST['delegate_regular_business'] . "', '" . $_POST['delegate_onspot_academic'] . "', "
            . "'" . $_POST['delegate_onspot_business'] . "', '" . $earlydate . "', '" . $regulardate . "', "
            . "'" . htmlentities(addslashes($_POST['organising_committee'])) . "', '" . $onspotdate . "', "
            . "'" . $_POST['speaker_accommodation'] . "', '" . $_POST['student_accommodation'] . "', "
            . "'" . $_POST['delegate_accommodation'] . "', '" . $_POST['hotel_name'] . "', '" . $_POST['hotel_address'] . "',"
            . "'" . $_POST['hotel_phone'] . "')";
    mysqli_query($conn, $sql);
    $eventid = $conn->insert_id;
    $sliderfile = $brochurefile = $backgroundfile = $thumbfile = $schedulefile = $hotelfile = '';
    if ($eventid > 0) {
        if (isset($_FILES["program_schedule"]["name"]) && !empty($_FILES["program_schedule"]["name"])) {
            if (!file_exists($path . '/documents/' . $eventid))
                mkdir($path . '/documents/' . $eventid, 0777, true);
            if (!file_exists($path . '/documents/' . $eventid . '/schedule'))
                mkdir($path . '/documents/' . $eventid . '/schedule', 0777, true);

            $extension = pathinfo($_FILES["program_schedule"]["name"], PATHINFO_EXTENSION);
            $name = substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, '8');
            $target_file = $path . '/documents/' . $eventid . '/schedule/' . $name . "." . $extension;

            if (move_uploaded_file($_FILES["program_schedule"]["tmp_name"], $target_file))
                $schedulefile = 'schedule/' . $name . '.' . $extension;
        }
        
        if (isset($_FILES["thumb_image"]["name"]) && !empty($_FILES["thumb_image"]["name"])) {
            if (!file_exists($path . '/documents/' . $eventid))
                mkdir($path . '/documents/' . $eventid, 0777, true);
            if (!file_exists($path . '/documents/' . $eventid . '/thumb'))
                mkdir($path . '/documents/' . $eventid . '/thumb', 0777, true);

            $extension = pathinfo($_FILES["thumb_image"]["name"], PATHINFO_EXTENSION);
            $name = substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, '8');
            $target_file = $path . '/documents/' . $eventid . '/thumb/' . $name . "." . $extension;

            if (move_uploaded_file($_FILES["thumb_image"]["tmp_name"], $target_file))
                $thumbfile = 'thumb/' . $name . '.' . $extension;
        }
        
        if (isset($_FILES["brochure"]["name"]) && !empty($_FILES["brochure"]["name"])) {
            if (!file_exists($path . '/documents/' . $eventid))
                mkdir($path . '/documents/' . $eventid, 0777, true);
            if (!file_exists($path . '/documents/' . $eventid . '/brochure'))
                mkdir($path . '/documents/' . $eventid . '/brochure', 0777, true);

            $extension = pathinfo($_FILES["brochure"]["name"], PATHINFO_EXTENSION);
            $name = substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, '8');
            $target_file = $path . '/documents/' . $eventid . '/brochure/' . $name . "." . $extension;

            if (move_uploaded_file($_FILES["brochure"]["tmp_name"], $target_file))
                $brochurefile = 'brochure/' . $name . '.' . $extension;
        }

        if (isset($_FILES["background_image"]["name"]) && !empty($_FILES["background_image"]["name"])) {
            if (!file_exists($path . '/documents/' . $eventid))
                mkdir($path . '/documents/' . $eventid, 0777, true);
            if (!file_exists($path . '/documents/' . $eventid . '/background'))
                mkdir($path . '/documents/' . $eventid . '/background', 0777, true);

            $extension = pathinfo($_FILES["background_image"]["name"], PATHINFO_EXTENSION);
            $name = substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, '8');
            $target_file = $path . '/documents/' . $eventid . '/background/' . $name . "." . $extension;

            if (move_uploaded_file($_FILES["background_image"]["tmp_name"], $target_file))
                $backgroundfile = 'background/' . $name . '.' . $extension;
        }

        if (isset($_FILES["slider_images"]["name"]) && !empty($_FILES["slider_images"]["name"])) {
            foreach ($_FILES["slider_images"]["name"] as $key => $value) {
                if (!file_exists($path . '/documents/' . $eventid))
                    mkdir($path . '/documents/' . $eventid, 0777, true);
                if (!file_exists($path . '/documents/' . $eventid . '/slider'))
                    mkdir($path . '/documents/' . $eventid . '/slider', 0777, true);

                $extension = pathinfo($_FILES["slider_images"]["name"][$key], PATHINFO_EXTENSION);
                $name = substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, '8');
                $target_file = $path . '/documents/' . $eventid . '/slider/' . $name . "." . $extension;

                if (move_uploaded_file($_FILES["slider_images"]["tmp_name"][$key], $target_file))
                    $sliderfile .= 'slider/' . $name . '.' . $extension . ",";
            }
            if (!empty($sliderfile))
                $sliderfile = rtrim($sliderfile, ",");
        }
        
        if (isset($_FILES["hotel_images"]["name"]) && !empty($_FILES["hotel_images"]["name"])) {
            foreach ($_FILES["hotel_images"]["name"] as $key => $value) {
                if (!file_exists($path . '/documents/' . $eventid))
                    mkdir($path . '/documents/' . $eventid, 0777, true);
                if (!file_exists($path . '/documents/' . $eventid . '/hotel'))
                    mkdir($path . '/documents/' . $eventid . '/hotel', 0777, true);

                $extension = pathinfo($_FILES["hotel_images"]["name"][$key], PATHINFO_EXTENSION);
                $name = substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, '8');
                $target_file = $path . '/documents/' . $eventid . '/hotel/' . $name . "." . $extension;

                if (move_uploaded_file($_FILES["hotel_images"]["tmp_name"][$key], $target_file))
                    $hotelfile .= 'hotel/' . $name . '.' . $extension . ",";
            }
            if (!empty($hotelfile))
                $hotelfile = rtrim($hotelfile, ",");
        }
        $sql = "update events set thumb_image='" . $thumbfile . "', background_image='" . $backgroundfile . "', "
                . "brochure='" . $brochurefile . "', slider_images='" . $sliderfile . "', program_schedule='" . $schedulefile . "', "
                . "hotel_images='" . $hotelfile . "' where eventid=" . $eventid;
        mysqli_query($conn, $sql);
    }
    header("location: events.php");
}
require_once('head.php');
?>
<script>
    $(document).ready(function () {
        $('#example').DataTable();
    });
    $(function () {
        $("#datepicker").datepicker();
        $( "#earlydate" ).datepicker();
        $( "#regulardate" ).datepicker();
        $( "#onspotdate" ).datepicker();
    });
</script>
<style>    
    .form-control{
        font-size: 14px !important;
    }
</style>
<body style="font-size: 14px;">
    <div>
        <div class="col-md-2">
            <?php require_once('menu.php'); ?>
        </div>
        <div class="col-md-10" style="padding-top: 20px;">   
            <div class="row" style="padding-top: 20px;"> 
                <h2>Add Event</h2>
            </div>
            <div class="row" style="padding-top: 20px;">   
                <form class="form add" id="form_company" method="post" enctype="multipart/form-data" action="createevent.php">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="title">Title: <span class="required">*</span></label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="title" id="title" value="" required>
                        </div>
                    </div>
                    
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-3">
                            <label for="slug">Slug: <span class="required">*</span></label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="slug" id="slug" value="" required>
                        </div>
                    </div>
                    
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-3">
                            <label for="date">Date: <span class="required">*</span></label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="date" id="date" value="" required>
                        </div>
                    </div>

                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-3">
                            <label for="end_date">End Date: <span class="required">*</span></label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="end_date" id="datepicker" value="" required>
                        </div>
                    </div>

                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-3">
                            <label for="location">Location: <span class="required">*</span></label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="location" id="location" value="" required>
                        </div>
                    </div>

                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-3">
                            <label for="theme">Theme: <span class="required">*</span></label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="theme" id="theme" value="" required>
                        </div>
                    </div>

                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-3">
                            <label for="brochure">Brochure: </label>
                        </div>
                        <div class="col-md-6">
                            <input type="file" class="form-control" name="brochure" id="brochure" value="">
                        </div>
                    </div>
                    
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-3">
                            <label for="thumb_image">Thumb Image: </label>
                        </div>
                        <div class="col-md-6">
                            <input type="file" class="form-control" name="thumb_image" id="thumb_image" value="">
                        </div>
                    </div>
                    
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-3">
                            <label for="background_image">Background image: </label>
                        </div>
                        <div class="col-md-6">
                            <input type="file" class="form-control" name="background_image" id="background_image" value="">
                        </div>
                    </div>

                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-3">
                            <label for="slider_images">Slider images: </label>
                        </div>
                        <div class="col-md-6">
                            <input type="file" class="form-control" name="slider_images[]" id="slider_images" multiple="multiple" value="">
                        </div>
                    </div>

                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-3">
                            <label for="description">Description:</label>
                        </div>
                        <div class="col-md-6">
                            <textarea name="description" class="form-control" id="description"></textarea>
                            <script>
                                CKEDITOR.replace('description');
                            </script>
                        </div>
                    </div>

                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-3">
                            <label for="key_topics">Key Topics: </label>
                        </div>
                        <div class="col-md-6">
                            <textarea name="key_topics" class="form-control" id="key_topics"></textarea>
                            <script>
                                CKEDITOR.replace('key_topics');
                            </script>
                        </div>
                    </div>
                    
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-3">
                            <label for="organising_committee">Organising Committee: </label>
                        </div>
                        <div class="col-md-6">
                            <textarea name="organising_committee" class="form-control" id="organising_committee"></textarea>
                            <script>
                                CKEDITOR.replace('organising_committee');
                            </script>
                        </div>
                    </div>
                    
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-3">
                            <label for="program_schedule">Program Schedule: </label>
                        </div>
                        <div class="col-md-6">
                            <input type="file" class="form-control" name="program_schedule" id="program_schedule" value="">
                        </div>
                    </div>
                    
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-3">
                            <label for="speaker_early_academic">Speaker Early Academic: <span class="required">*</span></label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="speaker_early_academic" id="speaker_early_academic" value="" required>
                        </div>
                    </div>
                    
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-3">
                            <label for="speaker_early_business">Speaker Early Business: <span class="required">*</span></label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="speaker_early_business" id="speaker_early_business" value="" required>
                        </div>
                    </div>
                    
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-3">
                            <label for="speaker_regular_academic">Speaker Regular Academic: <span class="required">*</span></label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="speaker_regular_academic" id="speaker_regular_academic" value="" required>
                        </div>
                    </div>
                    
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-3">
                            <label for="speaker_regular_business">Speaker Regular Business: <span class="required">*</span></label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="speaker_regular_business" id="speaker_regular_business" value="" required>
                        </div>
                    </div>
                    
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-3">
                            <label for="speaker_onspot_academic">Speaker OnSpot Academic: <span class="required">*</span></label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="speaker_onspot_academic" id="speaker_onspot_academic" value="" required>
                        </div>
                    </div>
                    
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-3">
                            <label for="speaker_onspot_business">Speaker OnSpot Business: <span class="required">*</span></label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="speaker_onspot_business" id="speaker_onspot_business" value="" required>
                        </div>
                    </div>
                    
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-3">
                            <label for="student_early_academic">Student Early Academic: <span class="required">*</span></label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="student_early_academic" id="student_early_academic" value="" required>
                        </div>
                    </div>
                    
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-3">
                            <label for="student_early_business">Student Early Business: <span class="required">*</span></label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="student_early_business" id="student_early_business" value="" required>
                        </div>
                    </div>
                    
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-3">
                            <label for="student_regular_academic">Student Regular Academic: <span class="required">*</span></label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="student_regular_academic" id="student_regular_academic" value="" required>
                        </div>
                    </div>
                    
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-3">
                            <label for="student_regular_business">Student Regular Business: <span class="required">*</span></label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="student_regular_business" id="student_regular_business" value="" required>
                        </div>
                    </div>
                    
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-3">
                            <label for="student_onspot_academic">Student OnSpot Academic: <span class="required">*</span></label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="student_onspot_academic" id="student_onspot_academic" value="" required>
                        </div>
                    </div>
                    
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-3">
                            <label for="student_onspot_business">Student OnSpot Business: <span class="required">*</span></label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="student_onspot_business" id="student_onspot_business" value="" required>
                        </div>
                    </div>
                    
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-3">
                            <label for="delegate_early_academic">Delegate Early Academic: <span class="required">*</span></label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="delegate_early_academic" id="delegate_early_academic" value="" required>
                        </div>
                    </div>
                    
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-3">
                            <label for="delegate_early_business">Delegate Early Business: <span class="required">*</span></label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="delegate_early_business" id="delegate_early_business" value="" required>
                        </div>
                    </div>
                    
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-3">
                            <label for="delegate_regular_academic">Delegate Regular Academic: <span class="required">*</span></label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="delegate_regular_academic" id="delegate_regular_academic" value="" required>
                        </div>
                    </div>
                    
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-3">
                            <label for="delegate_regular_business">Delegate Regular Business: <span class="required">*</span></label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="delegate_regular_business" id="delegate_regular_business" value="" required>
                        </div>
                    </div>
                    
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-3">
                            <label for="delegate_onspot_academic">Delegate Onspot Academic: <span class="required">*</span></label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="delegate_onspot_academic" id="delegate_onspot_academic" value="" required>
                        </div>
                    </div>
                    
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-3">
                            <label for="delegate_onspot_business">Delegate Onspot Business: <span class="required">*</span></label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="delegate_onspot_business" id="delegate_onspot_business" value="" required>
                        </div>
                    </div>
                    
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-3">
                            <label for="earlydate">Early Date: <span class="required">*</span></label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="earlydate" id="earlydate" value="" required>
                        </div>
                    </div>
                    
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-3">
                            <label for="regulardate">Regular Date: <span class="required">*</span></label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="regulardate" id="regulardate" value="" required>
                        </div>
                    </div>
                    
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-3">
                            <label for="onspotdate">Onspot Date: <span class="required">*</span></label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="onspotdate" id="onspotdate" value="" required>
                        </div>
                    </div>
                    
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-3">
                            <label for="speaker_accommodation">Speaker Accommodation: <span class="required">*</span></label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="speaker_accommodation" id="speaker_accommodation" value="" required>
                        </div>
                    </div>
                    
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-3">
                            <label for="student_accommodation">Student Accommodation: <span class="required">*</span></label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="student_accommodation" id="student_accommodation" value="" required>
                        </div>
                    </div>
                    
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-3">
                            <label for="delegate_accommodation">Delegate Accommodation: <span class="required">*</span></label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="delegate_accommodation" id="delegate_accommodation" value="" required>
                        </div>
                    </div>
                    
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-3">
                            <label for="hotel_name">Hotel Name:</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="hotel_name" id="hotel_name" value="">
                        </div>
                    </div>
                    
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-3">
                            <label for="hotel_address">Hotel Address:</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="hotel_address" id="hotel_address" value="">
                        </div>
                    </div>
                    
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-3">
                            <label for="hotel_phone">Hotel Phone:</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="hotel_phone" id="hotel_phone" value="">
                        </div>
                    </div>
                    
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-3">
                            <label for="hotel_images">Hotel images: </label>
                        </div>
                        <div class="col-md-6">
                            <input type="file" class="form-control" name="hotel_images[]" id="hotel_images" multiple="multiple" value="">
                        </div>
                    </div>
                    
                    <div class="row" style="padding-top: 10px;">
                        <button class="btn btn-success" type="submit" style="font-size: 14px;">Add Event</button>
                    </div>
                </form> 
            </div>
        </div>
    </div>    
</body>