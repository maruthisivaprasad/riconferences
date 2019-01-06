<?php 
//echo "<pre>";print_r($_SERVER);exit;
if($_SERVER['REQUEST_URI'] == '/riconferences/')
    header("location: index.php");
if($_SERVER['REQUEST_URI'] == '/riconferences/admin/?id=admin')
    header("location: index.php");
include_once 'header.php';
require_once('config.php');
$sql = "select * from events where slug='".$_GET['id']."'";
$res = mysqli_query($conn,$sql);
$result = mysqli_fetch_object($res);
$eventid = $result->eventid;
if(!empty($result->background_image))
   $banner = "documents/".$result->eventid."/".$result->background_image;
else
   $banner = 'images/banners/dentalcare.jpg';
?>
<style type="text/css">
   .conference-banner-dental {
    background: url('<?php echo $banner;?>') no-repeat center !important;
 }
</style>
    <title><?php echo $result->title;?> | RI Conferences</title>
    <div class="jumbotron jumbotron-fluid bg-dark conference-banner-dental">
        <div class="overlay">
           <div class="container clearfix text-center">
              <h1 class="text-white" "><?php echo $result->title;?></h1>
              <h5 class="text-white"><?php echo $result->date;?> <?php echo $result->location;?></h5>
              <h6 class="mt-3 font-size-18 text-white animated fadeIn slower delay-2s">Theme: <?php echo $result->theme;?>	</h6>
              <div class="action-items">
                 <ul class="list-inline">
                    <li class="mt-2"><a href="committee.php?id=<?php echo $result->slug;?>"><button class="btn btn-sm btn-primary"> Organizing Committee</button></a></li>
                    <li class="mt-2"><a href="schedule.php?id=<?php echo $result->slug;?>"><button class="btn btn-sm btn-primary"> Program Schedule</button></a></li>
                    <li class="mt-2"><a href="submit-abstract/<?php echo $result->slug;?>.php"><button class=" btn btn-sm btn-danger"> Submit Abstract </button></a></li>
                    <li class="mt-2 g-mx-5"><a href="register.php?id=<?php echo $result->slug;?>"><button class="btn btn-lg btn-warning">Register Now  @99</button></a></li>
                    <?php if(!empty($result->brochure)) {?><li class="mt-2"><a href="documents/<?php echo $result->eventid;?>/<?php echo $result->brochure;?>" target="_blank"><button class=" btn btn-sm btn-success"> Download Brochure</button></a></li><?php }?>
                 </ul>
              </div>
           </div>
           <!-- /.container -->
        </div>
        <!-- /.overlay -->
     </div>
    <div class="mb-50 blog-details mt-100">
        <div class="container">
           <div class="row">
                  <?php $file = $urlpath.'/documents/'.$result->eventid.'/'.$result->program_schedule;?>
               <iframe src="<?php echo $file;?>" style="width:900px; height:500px;" frameborder="0"></iframe>
           </div>
        </div>
    </div>  
     <!-- Icons Starting -->
          <?php include_once 'footer.php'; ?>

         <!-- Optional JavaScript _____________________________  -->
         <!-- jQuery first, then Popper.js, then Bootstrap JS -->
         <!-- jQuery -->
         <script src="vendor/jquery.2.2.3.min.js"></script>
         <script src="js/jquery.min.js"></script>
         <!-- Popper js -->
         <script src="vendor/popper.js/popper.min.js"></script>
         <!-- Bootstrap JS -->
         <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
         <!-- Camera Slider -->
         <script src='vendor/Camera-master/scripts/jquery.mobile.customized.min.js'></script>
         <script src='vendor/Camera-master/scripts/jquery.easing.1.3.js'></script>
         <script src='vendor/Camera-master/scripts/camera.min.js'></script>
         <!-- Language Stitcher -->
         <script src="vendor/language-switcher/jquery.polyglot.language.switcher.js"></script>
         <!-- Mega menu  -->
         <script src="vendor/bootstrap-mega-menu/js/menu.js"></script>
         <!-- WOW js -->
         <script src="vendor/WOW-master/dist/wow.min.js"></script>
         <!-- owl.carousel -->
         <script src="vendor/owl-carousel/owl.carousel.min.js"></script>
         <!-- js count to -->
         <script src="vendor/jquery.appear.js"></script>
         <script src="vendor/jquery.countTo.js"></script>
         <!-- Fancybox -->
         <script src="vendor/fancybox/dist/jquery.fancybox.min.js"></script>
         <script src="js/hs.core.js"></script>
         <script src="js/hs.sticky-block.js"></script>
         <!-- Theme js -->
         <script src="js/theme.js"></script>

         <script src="js/gsap/TweenLite.js"></script>
         <script src="js/gsap/plugins/CSSPlugin.js"></script>
         <script src="js/gsap/easing/EasePack.js"></script>
         <script src="js/custom.js"></script>

      </div>
      <!-- /.main-page-wrapper -->
   </body>
</html>