<?php
require_once('../config.php');
$sql = "select * from organizing_committe where id=" . $_GET['id'];
$organizeid = $_GET['id'];
$res = mysqli_query($conn, $sql);
$result = mysqli_fetch_object($res);
if (isset($_POST) && !empty($_POST)) {
    $organizefile = '';
    if (isset($_FILES["organize_image"]["name"]) && !empty($_FILES["organize_image"]["name"])) {
        unlink($path . '/documents/organize/'. $result->image);
        if (!file_exists($path . '/documents/organize'))
            mkdir($path . '/documents/organize', 0777, true);

        $extension = pathinfo($_FILES["organize_image"]["name"], PATHINFO_EXTENSION);
        $name = substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, '8');
        $target_file = $path . '/documents/organize/' . $name . "." . $extension;

        if (move_uploaded_file($_FILES["organize_image"]["tmp_name"], $target_file))
            $organizefile = $name . '.' . $extension;
        $sql = "update organizing_committe set image='" . $organizefile . "' where id=" . $organizeid;
        mysqli_query($conn, $sql);
    }
    
    $sql = "update organizing_committe set name='" . $_POST['name'] . "', profession='" . $_POST['profession'] . "', "
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
                <h2>Add Event</h2>
            </div>
            <div class="row" style="padding-top: 20px;">   
                <form class="form add" id="form_company" method="post" enctype="multipart/form-data" action="editorganize.php?id=<?php echo $_GET['id']; ?>">
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
                            <label for="profession">Profession: <span class="required">*</span></label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="profession" id="profession" value="<?php echo $result->profession; ?>" required>
                        </div>
                    </div>

                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-3">
                            <label for="university">University: <span class="required">*</span></label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="university" id="university" value="<?php echo $result->university; ?>" required>
                        </div>
                    </div>

                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-3">
                            <label for="city">City: <span class="required">*</span></label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="city" id="city" value="<?php echo $result->city; ?>" required>
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
                            <label for="organize_image">Image: </label>
                        </div>
                        <div class="col-md-6">
                            <input type="file" class="form-control" name="organize_image" id="organize_image" value="">
                        </div>
                    </div>

                    <div class="row" style="padding-top: 10px;">
                        <button class="btn btn-success" type="submit" style="font-size: 14px;">Edit Organize</button>
                    </div>
                </form> 
            </div>
        </div>    
    </div>
</body>    