<?php 
require_once('../config.php');
$path = 'C:/xampp/htdocs/riconferences';
$sql = "select * from events where eventid=".$_GET['id'];
$res = mysqli_query($conn,$sql);
$result = mysqli_fetch_object($res);
$enddate = '';
if(!empty($result->enddate))
{
  $enddate1 = explode("-", $result->enddate);
  $enddate = $enddate1[1]."/".$enddate1[2]."/".$enddate1[0];
}
if(isset($_POST) && !empty($_POST))
{
    $enddate1 = explode("/", $_POST['end_date']);
    $enddate = $enddate1[2]."-".$enddate1[0]."-".$enddate1[1];
    $sliderfile = $brochurefile = $backgroundfile = '';
    if(isset($_FILES["brochure"]["name"]) && !empty($_FILES["brochure"]["name"]))
    {
        unlink($path.'/documents/'.$eventid.'/brochure/'.$result->brochure);
        if (!file_exists($path.'/documents/'.$eventid))
            mkdir($path.'/documents/'.$eventid, 0777, true);
        if (!file_exists($path.'/documents/'.$eventid.'/brochure'))
           mkdir($path.'/documents/'.$eventid.'/brochure', 0777, true);

        $extension = pathinfo($_FILES["brochure"]["name"], PATHINFO_EXTENSION);
        $name = substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, '8');
        $target_file = $path.'/documents/'.$eventid.'/brochure/'.$name.".".$extension;
        
        if(move_uploaded_file($_FILES["brochure"]["tmp_name"], $target_file))
            $brochurefile = 'brochure/'.$name.'.'.$extension;
    }

    if(isset($_FILES["background_image"]["name"]) && !empty($_FILES["background_image"]["name"]))
    {
        unlink($path.'/documents/'.$eventid.'/background/'.$result->background_image);
        if (!file_exists($path.'/documents/'.$eventid))
            mkdir($path.'/documents/'.$eventid, 0777, true);
        if (!file_exists($path.'/documents/'.$eventid.'/background'))
           mkdir($path.'/documents/'.$eventid.'/background', 0777, true);

        $extension = pathinfo($_FILES["background_image"]["name"], PATHINFO_EXTENSION);
        $name = substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, '8');
        $target_file = $path.'/documents/'.$eventid.'/background/'.$name.".".$extension;
        
        if(move_uploaded_file($_FILES["background_image"]["tmp_name"], $target_file))
            $backgroundfile = 'background/'.$name.'.'.$extension;
    }

    if(isset($_FILES["slider_images"]["name"]) && !empty($_FILES["slider_images"]["name"]))
    {
        $sliderimages = explode(",", $result->slider_images);
        foreach($sliderimages as $key=>$value)
          unlink($path.'/documents/'.$eventid.'/slider/'.$value);
        foreach($_FILES["slider_images"]["name"] as $key=>$value)
        {
            if (!file_exists($path.'/documents/'.$eventid))
                mkdir($path.'/documents/'.$eventid, 0777, true);
            if (!file_exists($path.'/documents/'.$eventid.'/slider'))
               mkdir($path.'/documents/'.$eventid.'/slider', 0777, true);

            $extension = pathinfo($_FILES["slider_images"]["name"][$key], PATHINFO_EXTENSION);
            $name = substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, '8');
            $target_file = $path.'/documents/'.$eventid.'/slider/'.$name.".".$extension;
            
            if(move_uploaded_file($_FILES["slider_images"]["tmp_name"][$key], $target_file))
                $sliderfile .= 'slider/'.$name.'.'.$extension.",";
        }
        if(!empty($sliderfile))
            $sliderfile = rtrim($sliderfile, ",");
    }  

    $sql = "update events set title='".$_POST['title']."', date='".$_POST['date']."', enddate='".$_POST['enddate']."', location='".$_POST['location']."', theme='".$_POST['theme']."', description='".$_POST['description']."', key_topics='".$_POST['key_topics']."', background_image='".$backgroundfile."', brochure='".$brochurefile."', slider_images='".$sliderfile."' where eventid=".$eventid;
    mysqli_query($conn, $sql); 
    header("location: events.php");
}
require_once('head.php');?>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    } );
    $( function() {
        $( "#datepicker" ).datepicker();
      } );
</script>
<body>
    <div class="row">
      <div class="col-md-2">
          <?php require_once('menu.php');?>
      </div>
      <div class="col-md-10" style="padding-top: 20px;">   
        <div class="row" style="padding-top: 20px;"> 
          <h2>Edit company</h2>
        </div>
        <div class="row" style="padding-top: 20px;">   
          <form class="form add" id="form_company" method="post" enctype="multipart/form-data" action="createevent.php">
            <div class="row">
              <div class="col-md-3">
                <label for="title">Title: <span class="required">*</span></label>
              </div>
              <div class="col-md-6">
                <input type="text" class="form-control" name="title" id="title" value="<?php echo $result->title;?>" required>
              </div>
            </div>

            <div class="row" style="padding-top: 10px;">
              <div class="col-md-3">
                <label for="date">Date: <span class="required">*</span></label>
              </div>
              <div class="col-md-6">
                <input type="text" class="form-control" name="date" id="date" value="<?php echo $result->date;?>" required>
              </div>
            </div>

            <div class="row" style="padding-top: 10px;">
              <div class="col-md-3">
                <label for="end_date">End Date: <span class="required">*</span></label>
              </div>
              <div class="col-md-6">
                <input type="text" class="form-control" name="end_date" id="datepicker" value="<?php echo $enddate;?>" required>
              </div>
            </div>

            <div class="row" style="padding-top: 10px;">
              <div class="col-md-3">
                <label for="location">Location: <span class="required">*</span></label>
              </div>
              <div class="col-md-6">
                <input type="text" class="form-control" name="location" id="location" value="<?php echo $result->location;?>" required>
              </div>
            </div>

            <div class="row" style="padding-top: 10px;">
              <div class="col-md-3">
                <label for="theme">Theme: <span class="required">*</span></label>
              </div>
              <div class="col-md-6">
                <input type="text" class="form-control" name="theme" id="theme" value="<?php echo $result->theme;?>" required>
              </div>
            </div>
            
            <div class="row" style="padding-top: 10px;">
              <div class="col-md-3">
                <label for="brochure">Brochure: <span class="required">*</span></label>
              </div>
              <div class="col-md-6">
                <input type="file" class="form-control" name="brochure" id="brochure" value="">
              </div>
            </div>

            <div class="row" style="padding-top: 10px;">
              <div class="col-md-3">
                <label for="background_image">Background image: <span class="required">*</span></label>
              </div>
              <div class="col-md-6">
                <input type="file" class="form-control" name="background_image" id="background_image" value="">
              </div>
            </div>

            <div class="row" style="padding-top: 10px;">
              <div class="col-md-3">
                <label for="slider_images">Slider images: <span class="required">*</span></label>
              </div>
              <div class="col-md-6">
                <input type="file" class="form-control" name="slider_images[]" id="slider_images" value="">
              </div>
            </div>

            <div class="row" style="padding-top: 10px;">
              <div class="col-md-3">
                <label for="description">Description: <span class="required">*</span></label>
              </div>
              <div class="col-md-6">
                <textarea name="description" class="form-control" id="description"><?php echo $result->description;?></textarea>
                <script>
                    CKEDITOR.replace('description');
                </script>
              </div>
            </div>

            <div class="row" style="padding-top: 10px;">
              <div class="col-md-3">
                <label for="key_topics">Key Topics: <span class="required">*</span></label>
              </div>
              <div class="col-md-6">
                <textarea name="key_topics" class="form-control" id="key_topics"><?php echo $result->key_topics;?></textarea>
                <script>
                    CKEDITOR.replace('key_topics');
                </script>
              </div>
            </div>

            <div class="row" style="padding-top: 10px;">
              <button class="btn btn-success" type="submit">Edit company</button>
            </div>
          </form> 
        </div>
      </div>
    </div>    
</body>