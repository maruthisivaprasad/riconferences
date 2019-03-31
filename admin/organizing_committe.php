<?php
require_once('../config.php');
$sql = "select eventid, title from events";
$result = mysqli_query($conn, $sql);
if (isset($_POST) && !empty($_POST)) {
    $sql = "insert into organizing_committe (eventid, name, profession, university, city) values ('" . $_POST['eventname'] . "', '" . $_POST['name'] . "', "
            . "'" . $_POST['profession'] . "', '" . $_POST['university'] . "', '" . $_POST['city'] . "')";
    mysqli_query($conn, $sql);
    $organizeid = $conn->insert_id;
    $organizefile = '';
    if ($organizeid > 0) {
        if (isset($_FILES["organize_image"]["name"]) && !empty($_FILES["organize_image"]["name"])) {
            if (!file_exists($path . '/documents/' . $_POST['eventname']))
                mkdir($path . '/documents/' . $_POST['eventname'], 0777, true);
            if (!file_exists($path . '/documents/' . $_POST['eventname'] . '/organize'))
                mkdir($path . '/documents/' . $_POST['eventname'] . '/organize', 0777, true);

            $extension = pathinfo($_FILES["organize_image"]["name"], PATHINFO_EXTENSION);
            $name = substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, '8');
            $target_file = $path . '/documents/' . $_POST['eventname'] . '/organize/' . $name . "." . $extension;

            if (move_uploaded_file($_FILES["organize_image"]["tmp_name"], $target_file))
                $organizefile = $name . '.' . $extension;
        }
        $sql = "update organizing_committe set image='" . $organizefile . "' where id=" . $organizeid;
        mysqli_query($conn, $sql);
    }
    header("location: organizecommitte.php");
}
require_once('head.php');
?>
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
                <h2>Add Organize</h2>
            </div>
            <div class="row" style="padding-top: 20px;">   
                <form class="form add" id="form_company" method="post" enctype="multipart/form-data" action="organizing_committe.php">
                    
                    <div class="row">
                        <div class="col-md-3">
                            <label for="name">Event: <span class="required">*</span></label>
                        </div>
                        <div class="col-md-6">
                            <select name="eventname" id="eventname" class="form-control">
                                <?php while ($rec = mysqli_fetch_array($result)) { ?>
                                <option value="<?php echo $rec['eventid'];?>"><?php echo $rec['title'];?></option>
                                <?php }?>
                            </select>
                        </div>
                    </div>
                    
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-3">
                            <label for="name">Name: <span class="required">*</span></label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="name" id="name" value="" required>
                        </div>
                    </div>

                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-3">
                            <label for="profession">Profession:</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="profession" id="profession" value="">
                        </div>
                    </div>

                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-3">
                            <label for="university">University:</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="university" id="university" value="">
                        </div>
                    </div>

                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-3">
                            <label for="city">City:</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="city" id="city" value="">
                        </div>
                    </div>

                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-3">
                            <label for="organize_image">Image: </label>
                        </div>
                        <div class="col-md-6">
                            <input type="file" class="form-control" name="organize_image" id="organize_image" value="">
                        </div>
                    </div>

                    <div class="row" style="padding-top: 10px;">
                        <button class="btn btn-success" type="submit" style="font-size: 14px;">Add Organize</button>
                    </div>
                </form> 
            </div>
        </div>    
    </div>
</body>    