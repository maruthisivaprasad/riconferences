<?php
require_once('../config.php');
$sql1 = "select eventid, title from events";
$result1 = mysqli_query($conn, $sql1);
$sql = "select * from key_committe where id=" . $_GET['id'];
$organizeid = $_GET['id'];
$res = mysqli_query($conn, $sql);
$result = mysqli_fetch_object($res);
$eventid = $result->eventid;
if (isset($_POST) && !empty($_POST)) {
    $organizefile = '';
    if (isset($_FILES["key_image"]["name"]) && !empty($_FILES["key_image"]["name"])) {
        unlink($path . '/documents/key/'. $result->image);
        if (!file_exists($path . '/documents/' . $eventid))
            mkdir($path . '/documents/' . $eventid, 0777, true);
        if (!file_exists($path . '/documents/' . $eventid . '/key'))
            mkdir($path . '/documents/' . $eventid . '/key', 0777, true);

        $extension = pathinfo($_FILES["key_image"]["name"], PATHINFO_EXTENSION);
        $name = substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, '8');
        $target_file = $path . '/documents/' . $eventid . '/key/' . $name . "." . $extension;

        if (move_uploaded_file($_FILES["key_image"]["tmp_name"], $target_file))
            $organizefile = $name . '.' . $extension;
        $sql = "update key_committe set image='" . $organizefile . "' where id=" . $organizeid;
        mysqli_query($conn, $sql);
    }
    
    $sql = "update key_committe set name='" . $_POST['name'] . "', profession='" . $_POST['profession'] . "', "
            . "university='" . $_POST['university'] . "', city='" . $_POST['city'] . "', description='" . $_POST['description'] . "'"
            . " where id=" . $organizeid;
    mysqli_query($conn, $sql);
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
                <h2>Edit Key</h2>
            </div>
            <div class="row" style="padding-top: 20px;">   
                <form class="form add" id="form_company" method="post" enctype="multipart/form-data" action="editkey.php?id=<?php echo $_GET['id']; ?>">
                    
                    <div class="row">
                        <div class="col-md-3">
                            <label for="name">Event: <span class="required">*</span></label>
                        </div>
                        <div class="col-md-6">
                            <select name="eventname" id="eventname" class="form-control">
                                <?php while ($rec1 = mysqli_fetch_array($result1)) { ?>
                                <option value="<?php echo $rec1['eventid'];?>" <?php if($result->eventid == $rec1['eventid']) {?>selected<?php }?>><?php echo $rec1['title'];?></option>
                                <?php }?>
                            </select>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-3">
                            <label for="name">Name: <span class="required">*</span></label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="name" id="name" value="<?php echo $result->name; ?>" required>
                        </div>
                    </div>

                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-3">
                            <label for="profession">Profession:</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="profession" id="profession" value="<?php echo $result->profession; ?>">
                        </div>
                    </div>

                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-3">
                            <label for="university">University:</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="university" id="university" value="<?php echo $result->university; ?>">
                        </div>
                    </div>

                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-3">
                            <label for="city">City:</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="city" id="city" value="<?php echo $result->city; ?>">
                        </div>
                    </div>

                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-3">
                            <label for="key_image">Image: </label>
                        </div>
                        <div class="col-md-6">
                            <input type="file" class="form-control" name="key_image" id="key_image" value="">
                        </div>
                    </div>

                    <div class="row" style="padding-top: 10px;">
                        <button class="btn btn-success" type="submit" style="font-size: 14px;">Edit Key</button>
                    </div>
                </form> 
            </div>
        </div>    
    </div>
</body>    