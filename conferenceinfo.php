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
                        <!-- <li class="mt-2"><a href="#team"><button class="btn btn-sm btn-primary"> Organizing Committee</button></a></li> -->
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
         <!-- /.inner-banner -->
         <!--
            =============================================
              Conference Details
            ==============================================
            -->

         <!--
            =============================================
            	Conference Details
            ==============================================
            -->

         <div class="mb-50 blog-details mt-100">
            <div class="container">
               <div class="row">
                  <div class="col-xl-9 col-lg-8 col-12">
                     <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                           <?php if(!empty($result->slider_images)) {
                               $sliderimages = explode(",", $result->slider_images);
                                if($sliderimages > 0) {$a = 0;
                                    foreach($sliderimages as $key=>$value) {
                                       if(!empty($value)) {
                                       ?>
                                       <div class="carousel-item <?php if($a==0) {?>active<?php }?>">
                                        <a href="submit-abstract/<?php echo $result->slug;?>.php"><img class="d-block w-100" src="documents/<?php echo $result->eventid;?>/<?php echo $value;?>" alt="First slide"></a>
                                        </div>
                            <?php $a++;}}}}?>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                        </a>
                     </div>
                     <!-- team image starting -->
                     <!-- /.col- -->
                     <div class="theme-title text-center"><h2 class="font-size-30 text-center mt-50 mb-50"><?php echo $result->theme;?></h2></div>
                     <!-- Tabs starting -->
                     <div class="sidebar-box blog-categories">
                       <?php echo html_entity_decode($result->description);?>
                     </div>
                     <!-- Tabs ending -->
               </div>
               <!-- Sidebar STarting -->
               <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8 col-12 blog-sidebar">
                  <div class="sidebar-box blog-categories bg-customjs-sticky-block g-sticky-block--lg" id="stickyblock-start">
                     <h3 class="margin-bottom: 20px;">Quick Links</h3>
                     <ul>
                        <!-- <li class="mt-2"><a href="#team"><button class="btn btn-sm btn-primary"> Organizing Committee</button></a></li> -->
                        <li class="mt-2"><a href="submit-abstract/<?php echo $result->slug;?>.php"><button class=" btn btn-sm btn-danger"> Submit Abstract </button></a></li>
                        <li class="mt-2"><a href="register.php?id=<?php echo $result->slug;?>"><button class=" btn btn-sm btn-warning">Register Now  @99</button></a></li>
                        <li class="mt-2"><a href="documents/dental-brochure.pdf" target="_blank"><button class=" btn btn-sm btn-success">Download Brochure </button></a></li>
                     </ul>
                  </div>
                  <div class="mt-2">
                    <div class="container">
                      <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Friconferences%2F&tabs=timeline&width=255&height=400&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=false&appId=731985673803404" width="255" height="400" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                    </div>
                  </div>
               </div>
               <!-- /.blog-sidebar -->
            </div>
            <!-- /.row -->
         </div>
         <!-- /.container -->
      </div>
      <!-- /.our-blog -->
      <!-- Icons Text STarting -->
      <div class="container mb-5">
         <div class="">
         <?php echo html_entity_decode($result->key_topics);?>
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
