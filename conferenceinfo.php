<?php 
//echo "<pre>";print_r($_SERVER);exit;
if($_SERVER['REQUEST_URI'] == '/')
    header("location: index.php");
if($_SERVER['REQUEST_URI'] == '/admin/?id=admin')
    header("location: index.php");
include_once 'conferenceheader.php';
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
    <div class="main-page-wrapper">

      <!-- ===================================================
        Loading Transition
      ==================================================== -->
      <div id="loader-wrapper">
        <div id="loader"></div>
      </div>

        <div class="main-menu-wrapper clearfix">
          <div class="container clearfix">
            <!-- Logo -->
            <div class="logo float-left"><a href="<?php echo $urlpath;?>/index.php"><img src="<?php echo $urlpath;?>/images/logo/logo.png" alt="Logo"></a></div>

            <!-- ============================ Theme Menu ========================= -->
            <nav class="navbar-expand-lg float-right navbar-light border-bottom" id="mega-menu-wrapper">
                <button class="navbar-toggler float-right clearfix" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <i class="flaticon-menu-options"></i>
                </button>
                <div class="collapse navbar-collapse clearfix" id="navbarNav">
                  <ul class="navbar-nav nav">
                    
                    <li class="list-inline-item"><a class="" href="<?php echo $urlpath;?>/<?php echo $result->slug;?>.php">Home</a></li>
                            <li class="nav-item"><a href="schedule.php?id=<?php echo $result->slug;?>">Program Schedule</a></li>
                            <li class="nav-item"><a href="register.php?id=<?php echo $result->slug;?>">Register Now</a></li>
                            <li class="nav-item dot-fix"><a href="submit-abstract/<?php echo $result->slug;?>.php">Submit Abstract</a></li>
                  </ul>
                </div>
            </nav>
            
          </div> <!-- /.container -->
        </div> <!-- /.main-menu-wrapper -->
        </div>
           <div class="jumbotron jumbotron-fluid bg-dark conference-banner-dental">
            <div class="overlay2">
               <div class="container clearfix text-center">
                  <h1 class="text-white" "><?php echo $result->title;?></h1>
                  <h5 class="text-white"><?php echo $result->date;?> <?php echo $result->location;?></h5>
                  <h6 class="mt-2 font-size-18 text-white animated fadeIn slower delay-2s">Theme: <?php echo $result->theme;?>	</h6>
                  <div class="action-items">
                     <ul class="list-inline">
                        <!--<li class="list-inline-item mt-2"><a href="committee.php?id=<?php echo $result->slug;?>"><button class="btn btn-sm btn-info"> Organizing Committee</button></a></li>-->
                        <li class="list-inline-item mt-2"><a href="schedule.php?id=<?php echo $result->slug;?>"><button class="btn btn-sm btn-primary"> Program Schedule</button></a></li>
                        <li class="list-inline-item mt-2"><a href="register.php?id=<?php echo $result->slug;?>"><button class="btn btn-sm btn-warning" >Register Now</button></a></li>
                        <li class="list-inline-item mt-2"><a href="submit-abstract/<?php echo $result->slug;?>.php"><button class=" btn btn-sm btn-danger"> Submit Abstract </button></a></li>
                        <?php if(!empty($result->brochure)) {?><li class="list-inline-item mt-2"><a href="documents/<?php echo $result->eventid;?>/<?php echo $result->brochure;?>" target="_blank"><button class=" btn btn-sm btn-success">Event Brochure</button></a></li><?php }?>
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

         <div class="mb-10 blog-details mt-10">
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
                     <!-- Tabs ending -->
               </div>
               <!-- Sidebar STarting -->
               <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8 col-12 blog-sidebar">
                  <div class="sidebar-box blog-categories bg-customjs-sticky-block g-sticky-block--lg" id="stickyblock-start">
                     <h3 class="margin-bottom: 20px;">Quick Links</h3>
                     <ul>
                        <!--<li class="mt-1"><a href="committee.php?id=<?php echo $result->slug;?>"><button class="btn btn-sm btn-info"> Organizing Committee</button></a></li>-->
                        <li class="mt-1"><a href="schedule.php?id=<?php echo $result->slug;?>"><button class="btn btn-sm btn-primary"> Program Schedule</button></a></li>
                        <li class="mt-1"><a href="register.php?id=<?php echo $result->slug;?>"><button class="btn btn-sm btn-warning">Register Now</button></a></li>
                        <li class="mt-1"><a href="submit-abstract/<?php echo $result->slug;?>.php"><button class=" btn btn-sm btn-danger"> Submit Abstract </button></a></li>
                        <?php if(!empty($result->brochure)) {?><li class="mt-1"><a href="documents/<?php echo $result->eventid;?>/<?php echo $result->brochure;?>" target="_blank"><button class=" btn btn-sm btn-success">Event Brochure</button></a></li><?php }?>
                     </ul>
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
      <div class="container mb-3">
        <div class="theme-title text-center"><h2 class="font-size-30 text-center mt-10 mb-20"><?php echo $result->theme;?></h2></div>
             <!-- Tabs starting -->
             <div class="sidebar-box blog-categories">
               <?php echo html_entity_decode($result->description);?>
             </div>
      </div>
     <section style="background-color:#f5f6f8;padding-bottom:30px;padding-top:20px;">
      <div class="container">
         <div class="keytopics">
         <div class="theme-title text-center mb-2">
            <h2 style="font-size:30px;">Call for submissions</h2>
            </div>
         <?php echo html_entity_decode($result->key_topics);?>
       </div>
     </div>
     </section>
     <?php if(!empty($result->hotel_name)) {?> 
     <div class="container mb-5">
     <div class="mt-2">
        <div class="container">
            <div class="theme-title text-center">
                <h2 style="font-size:30px;">Venue & Hospitality</h2>
            </div>
            <p class="text-center" style="font-weight:bold;"><b>Hotel Name:</b> <?php echo $result->hotel_name;?></p>
            <p class="text-center"><b>Address:</b> <?php echo $result->hotel_address;?></p>
            <div class="container">
                <?php if(!empty($result->hotel_images)) {
                        $hotelimages = explode(",", $result->hotel_images);?>
                <div class="row image-gallery wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                    <?php if(!empty($hotelimages[0])) {?>
                    <div class="col-md-4 col-12">
                        <?php if(!empty($hotelimages[0])) {?><img src="documents/<?php echo $result->eventid;?>/<?php echo $hotelimages[0];?>" class="mb-2"><?php }?>
                        <?php if(!empty($hotelimages[1])) {?><img src="documents/<?php echo $result->eventid;?>/<?php echo $hotelimages[1];?>" class="mb-2"><?php }?>
                    </div>
                    <?php } if(!empty($hotelimages[2])) {?>
                    <div class="col-md-4 col-12">
                        <?php if(!empty($hotelimages[2])) {?><img src="documents/<?php echo $result->eventid;?>/<?php echo $hotelimages[2];?>" class="mb-2"><?php }?>
                        <?php if(!empty($hotelimages[3])) {?><img src="documents/<?php echo $result->eventid;?>/<?php echo $hotelimages[3];?>" class="mb-2"><?php }?>
                    </div>
                    <?php } if(!empty($hotelimages[4])) {?>
                    <div class="col-md-4 col-12">
                        <?php if(!empty($hotelimages[4])) {?><img src="documents/<?php echo $result->eventid;?>/<?php echo $hotelimages[4];?>" class="mb-2"><?php }?>
                        <?php if(!empty($hotelimages[5])) {?><img src="documents/<?php echo $result->eventid;?>/<?php echo $hotelimages[5];?>" class="mb-2"><?php }?>
                    </div>
                    <?php }?>
                </div> <!-- /.image-gallery -->
                <?php }?>
					
            </div>
        </div>
     </div>
     </div>
     <?php }?> 
     <nav class="floating-menu">
        <ul class="main-menu">
            <li>
                <p>WhatsApp contact: <?php echo $result->hotel_phone;?><p>
            </li>
        </ul>
        <div class="menu-bg"></div>
    </nav>
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
      <script type="text/javascript">
			// ------------------------------- Partner Slider
        var pSlider = $ (".partner-slider");
        if(pSlider.length) {
            pSlider.owlCarousel({
              loop:true,
              nav:false,
              dots:false,
              autoplay:true,
              autoplayTimeout:4000,
              smartSpeed:1200,
              autoplayHoverPause:true,
              lazyLoad:true,
              responsive:{
                    0:{
                        items:2
                    },
                    768:{
                        items:3
                    },
                    992:{
                        items:4
                    },
                    1200:{
                        items:6
                    }
                },
          })
        }
		</script>
   </body>
</html>
