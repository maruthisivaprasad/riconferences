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
$sql = "select * from events where eventid=" . $_GET['id'];
$eventid = $_GET['id'];
$res = mysqli_query($conn, $sql);
$result = mysqli_fetch_object($res);
$enddate = $earlydate = $regulardate = $onspotdate = '';
if (!empty($result->enddate)) {
    $enddate1 = explode("-", $result->enddate);
    $enddate = $enddate1[1] . "/" . $enddate1[2] . "/" . $enddate1[0];
}
if (!empty($result->early_date)) {
    $earlydate1 = explode("-", $result->early_date);
    $earlydate = $earlydate1[1] . "/" . $earlydate1[2] . "/" . $earlydate1[0];
}
if (!empty($result->regular_date)) {
    $regulardate1 = explode("-", $result->regular_date);
    $regulardate = $regulardate1[1] . "/" . $regulardate1[2] . "/" . $regulardate1[0];
}
if (!empty($result->onsport_date)) {
    $onspotdate1 = explode("-", $result->onsport_date);
    $onspotdate = $onspotdate1[1] . "/" . $onspotdate1[2] . "/" . $onspotdate1[0];
}
if (isset($_POST) && !empty($_POST)) {
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
    $sliderfile = $brochurefile = $backgroundfile = $thumbfile = $schedulefile = '';
    
    if (isset($_FILES["program_schedule"]["name"]) && !empty($_FILES["program_schedule"]["name"])) {
        unlink($path . '/documents/' . $eventid . '/' . $result->program_schedule);
        if (!file_exists($path . '/documents/' . $eventid))
            mkdir($path . '/documents/' . $eventid, 0777, true);
        if (!file_exists($path . '/documents/' . $eventid . '/thumb'))
            mkdir($path . '/documents/' . $eventid . '/schedule', 0777, true);

        $extension = pathinfo($_FILES["program_schedule"]["name"], PATHINFO_EXTENSION);
        $name = substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, '8');
        $target_file = $path . '/documents/' . $eventid . '/schedule/' . $name . "." . $extension;

        if (move_uploaded_file($_FILES["program_schedule"]["tmp_name"], $target_file))
            $schedulefile = 'schedule/' . $name . '.' . $extension;
        $sql = "update events set program_schedule='" . $schedulefile . "' where eventid=" . $eventid;
        mysqli_query($conn, $sql);
    }
    
    if (isset($_FILES["thumb_image"]["name"]) && !empty($_FILES["thumb_image"]["name"])) {
        unlink($path . '/documents/' . $eventid . '/' . $result->thumb_image);
        if (!file_exists($path . '/documents/' . $eventid))
            mkdir($path . '/documents/' . $eventid, 0777, true);
        if (!file_exists($path . '/documents/' . $eventid . '/thumb'))
            mkdir($path . '/documents/' . $eventid . '/thumb', 0777, true);

        $extension = pathinfo($_FILES["thumb_image"]["name"], PATHINFO_EXTENSION);
        $name = substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, '8');
        $target_file = $path . '/documents/' . $eventid . '/thumb/' . $name . "." . $extension;

        if (move_uploaded_file($_FILES["thumb_image"]["tmp_name"], $target_file))
            $thumbfile = 'thumb/' . $name . '.' . $extension;
        $sql = "update events set thumb_image='" . $thumbfile . "' where eventid=" . $eventid;
        mysqli_query($conn, $sql);
    }
    
    if (isset($_FILES["brochure"]["name"]) && !empty($_FILES["brochure"]["name"])) {
        unlink($path . '/documents/' . $eventid . '/' . $result->brochure);
        if (!file_exists($path . '/documents/' . $eventid))
            mkdir($path . '/documents/' . $eventid, 0777, true);
        if (!file_exists($path . '/documents/' . $eventid . '/brochure'))
            mkdir($path . '/documents/' . $eventid . '/brochure', 0777, true);

        $extension = pathinfo($_FILES["brochure"]["name"], PATHINFO_EXTENSION);
        $name = substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, '8');
        $target_file = $path . '/documents/' . $eventid . '/brochure/' . $name . "." . $extension;

        if (move_uploaded_file($_FILES["brochure"]["tmp_name"], $target_file))
            $brochurefile = 'brochure/' . $name . '.' . $extension;
        $sql = "update events set brochure='" . $brochurefile . "' where eventid=" . $eventid;
        mysqli_query($conn, $sql);
    }
    
    if (isset($_FILES["background_image"]["name"]) && !empty($_FILES["background_image"]["name"])) {
        unlink($path . '/documents/' . $eventid . '/' . $result->background_image);
        if (!file_exists($path . '/documents/' . $eventid))
            mkdir($path . '/documents/' . $eventid, 0777, true);
        if (!file_exists($path . '/documents/' . $eventid . '/background'))
            mkdir($path . '/documents/' . $eventid . '/background', 0777, true);

        $extension = pathinfo($_FILES["background_image"]["name"], PATHINFO_EXTENSION);
        $name = substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, '8');
        $target_file = $path . '/documents/' . $eventid . '/background/' . $name . "." . $extension;

        if (move_uploaded_file($_FILES["background_image"]["tmp_name"], $target_file))
            $backgroundfile = 'background/' . $name . '.' . $extension;
        $sql = "update events set background_image='" . $backgroundfile . "' where eventid=" . $eventid;
        mysqli_query($conn, $sql);
    }

    if (isset($_FILES["slider_images"]["name"][0]) && !empty($_FILES["slider_images"]["name"][0])) {
        $sliderimages = explode(",", $result->slider_images);
        foreach ($sliderimages as $key => $value)
            unlink($path . '/documents/' . $eventid . '/' . $value);
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
        $sql = "update events set slider_images='" . $sliderfile . "' where eventid=" . $eventid;
        mysqli_query($conn, $sql);
    }

    $sql = "update events set title='" . $_POST['title'] . "', slug='" . slugify($_POST['slug']) . "', "
            . "date='" . $_POST['date'] . "', enddate='" . $enddate . "', location='" . $_POST['location'] . "', "
            . "theme='" . $_POST['theme'] . "', description='" . htmlentities(addslashes($_POST['description'])) . "',"
            . " key_topics='" . htmlentities(addslashes($_POST['key_topics'])) . "', "
            . "speaker_early_academic='".$_POST['speaker_early_academic']."', speaker_early_business='".$_POST['speaker_early_business']."', "
            . "speaker_regular_academic='".$_POST['speaker_regular_academic']."', speaker_regular_business='".$_POST['speaker_regular_business']."', "
            . "speaker_onspot_academic='".$_POST['speaker_onspot_academic']."', speaker_onspot_business='".$_POST['speaker_onspot_business']."', "
            . "student_early_academic='".$_POST['student_early_academic']."', student_early_business='".$_POST['student_early_business']."', "
            . "student_regular_academic='".$_POST['student_regular_academic']."', student_regular_business='".$_POST['student_regular_business']."', "
            . "student_onspot_academic='".$_POST['student_onspot_academic']."', student_onspot_business='".$_POST['student_onspot_business']."', "
            . "delegate_early_academic='".$_POST['delegate_early_academic']."', delegate_early_business='".$_POST['delegate_early_business']."', "
            . "delegate_regular_academic='".$_POST['delegate_regular_academic']."', delegate_regular_business='".$_POST['delegate_regular_business']."', "
            . "delegate_onspot_academic='".$_POST['delegate_onspot_academic']."', delegate_onspot_business='".$_POST['delegate_onspot_business']."',"
            . "early_date='".$earlydate."', regular_date='".$regulardate."', onsport_date='".$onspotdate."'"
            . "organising_committee='".$_POST['organising_committee']."' where eventid=" . $eventid;
    //echo $sql;exit;
    mysqli_query($conn, $sql);
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
<body>
    <div style="font-size: 14px;">
        <div class="col-md-2">
<?php require_once('menu.php'); ?>
        </div>
        <div class="col-md-10" style="padding-top: 20px;">   
            <div class="row" style="padding-top: 20px;"> 
                <h2>Edit Event</h2>
            </div>
            <div class="row" style="padding-top: 20px;">   
                <form class="form add" id="form_company" method="post" enctype="multipart/form-data" action="editevent.php?id=<?php echo $_GET['id']; ?>">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="title">Title: <span class="required">*</span></label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="title" id="title" value="<?php echo $result->title; ?>" required>
                        </div>
                    </div>
                    
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-3">
                            <label for="slug">Slug: <span class="required">*</span></label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="slug" id="slug" value="<?php echo $result->slug; ?>" required>
                        </div>
                    </div>
                    
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-3">
                            <label for="date">Date: <span class="required">*</span></label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="date" id="date" value="<?php echo $result->date; ?>" required>
                        </div>
                    </div>

                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-3">
                            <label for="end_date">End Date: <span class="required">*</span></label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="end_date" id="datepicker" value="<?php echo $enddate; ?>" required>
                        </div>
                    </div>

                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-3">
                            <label for="location">Location: <span class="required">*</span></label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="location" id="location" value="<?php echo $result->location; ?>" required>
                        </div>
                    </div>

                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-3">
                            <label for="theme">Theme: <span class="required">*</span></label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="theme" id="theme" value="<?php echo $result->theme; ?>" required>
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
                            <textarea name="description" class="form-control" id="description"><?php echo $result->description; ?></textarea>
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
                            <textarea name="key_topics" class="form-control" id="key_topics"><?php echo $result->key_topics; ?></textarea>
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
                            <textarea name="organising_committee" class="form-control" id="organising_committee"><?php echo $result->organising_committee; ?></textarea>
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
                            <input type="text" class="form-control" name="speaker_early_academic" id="speaker_early_academic" value="<?php echo $result->speaker_early_academic; ?>" required>
                        </div>
                    </div>
                    
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-3">
                            <label for="speaker_early_business">Speaker Early Business: <span class="required">*</span></label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="speaker_early_business" id="speaker_early_business" value="<?php echo $result->speaker_early_business; ?>" required>
                        </div>
                    </div>
                    
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-3">
                            <label for="speaker_regular_academic">Speaker Regular Academic: <span class="required">*</span></label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="speaker_regular_academic" id="speaker_regular_academic" value="<?php echo $result->speaker_regular_academic; ?>" required>
                        </div>
                    </div>
                    
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-3">
                            <label for="speaker_regular_business">Speaker Regular Business: <span class="required">*</span></label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="speaker_regular_business" id="speaker_regular_business" value="<?php echo $result->speaker_regular_business; ?>" required>
                        </div>
                    </div>
                    
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-3">
                            <label for="speaker_onspot_academic">Speaker OnSpot Academic: <span class="required">*</span></label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="speaker_onspot_academic" id="speaker_onspot_academic" value="<?php echo $result->speaker_onspot_academic; ?>" required>
                        </div>
                    </div>
                    
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-3">
                            <label for="speaker_onspot_business">Speaker OnSpot Business: <span class="required">*</span></label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="speaker_onspot_business" id="speaker_onspot_business" value="<?php echo $result->speaker_onspot_business; ?>" required>
                        </div>
                    </div>
                    
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-3">
                            <label for="student_early_academic">Student Early Academic: <span class="required">*</span></label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="student_early_academic" id="student_early_academic" value="<?php echo $result->student_early_academic; ?>" required>
                        </div>
                    </div>
                    
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-3">
                            <label for="student_early_business">Student Early Business: <span class="required">*</span></label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="student_early_business" id="student_early_business" value="<?php echo $result->student_early_business; ?>" required>
                        </div>
                    </div>
                    
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-3">
                            <label for="student_regular_academic">Student Regular Academic: <span class="required">*</span></label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="student_regular_academic" id="student_regular_academic" value="<?php echo $result->student_regular_academic; ?>" required>
                        </div>
                    </div>
                    
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-3">
                            <label for="student_regular_business">Student Regular Business: <span class="required">*</span></label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="student_regular_business" id="student_regular_business" value="<?php echo $result->student_regular_business; ?>" required>
                        </div>
                    </div>
                    
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-3">
                            <label for="student_onspot_academic">Student OnSpot Academic: <span class="required">*</span></label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="student_onspot_academic" id="student_onspot_academic" value="<?php echo $result->student_onspot_academic; ?>" required>
                        </div>
                    </div>
                    
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-3">
                            <label for="student_onspot_business">Student OnSpot Business: <span class="required">*</span></label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="student_onspot_business" id="student_onspot_business" value="<?php echo $result->student_onspot_business; ?>" required>
                        </div>
                    </div>
                    
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-3">
                            <label for="delegate_early_academic">Delegate Early Academic: <span class="required">*</span></label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="delegate_early_academic" id="delegate_early_academic" value="<?php echo $result->delegate_early_academic; ?>" required>
                        </div>
                    </div>
                    
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-3">
                            <label for="delegate_early_business">Delegate Early Business: <span class="required">*</span></label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="delegate_early_business" id="delegate_early_business" value="<?php echo $result->delegate_early_business; ?>" required>
                        </div>
                    </div>
                    
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-3">
                            <label for="delegate_regular_academic">Delegate Regular Academic: <span class="required">*</span></label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="delegate_regular_academic" id="delegate_regular_academic" value="<?php echo $result->delegate_regular_academic; ?>" required>
                        </div>
                    </div>
                    
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-3">
                            <label for="delegate_regular_business">Delegate Regular Business: <span class="required">*</span></label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="delegate_regular_business" id="delegate_regular_business" value="<?php echo $result->delegate_regular_business; ?>" required>
                        </div>
                    </div>
                    
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-3">
                            <label for="delegate_onspot_academic">Delegate Onspot Academic: <span class="required">*</span></label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="delegate_onspot_academic" id="delegate_onspot_academic" value="<?php echo $result->delegate_onspot_academic; ?>" required>
                        </div>
                    </div>
                    
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-3">
                            <label for="delegate_onspot_business">Delegate Onspot Business: <span class="required">*</span></label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="delegate_onspot_business" id="delegate_onspot_business" value="<?php echo $result->delegate_onspot_business; ?>" required>
                        </div>
                    </div>
                    
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-3">
                            <label for="earlydate">Early Date: <span class="required">*</span></label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="earlydate" id="earlydate"  value="<?php echo $earlydate; ?>" required>
                        </div>
                    </div>
                    
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-3">
                            <label for="regulardate">Regular Date: <span class="required">*</span></label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="regulardate" id="regulardate" value="<?php echo $regulardate; ?>" required>
                        </div>
                    </div>
                    
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-3">
                            <label for="onspotdate">Onspot Date: <span class="required">*</span></label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="onspotdate" id="onspotdate" value="<?php echo $onspotdate; ?>" required>
                        </div>
                    </div>
                    
                    <div class="row" style="padding-top: 10px;">
                        <button class="btn btn-success" type="submit" style="font-size:14px;">Edit Event</button>
                    </div>
                </form> 
            </div>
        </div>
    </div>    
</body>