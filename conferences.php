<?php 
include_once 'header.php'; 
require_once('config.php');
?>
<title>All Conferences | RI Conferences</title>
<div class="jumbotron jumbotron-fluid bg-dark home-banner">
    <div class="overlay">
       <div class="container clearfix text-center">
          <h1 class="text-white" style="font-size:60px; letter-spacing: -3px; margin-top: 50px; margin-bottom:10px;line-height: 1;">Research International Conferences</h1>
          <h5 style="margin-bottom: 50px;" class="text-white">Conferences and open discussions based on science field</h5>
       </div>
       <!-- /.container -->
    </div>
<!-- /.overlay -->
</div>
<!--
=============================================
        Our Service
==============================================
-->
<div class="our-service pt-50 pb-50 bg-custom">
    <div class="container">
        <div class="home-title text-center pb-50">
            <h2>RI Conferences</h2>
            <p>List of upcoming conferences organized by RI Conferences.</p>
        </div> <!-- /.theme-title -->
        <div class="row">
            <?php $sql = "select * from events";
                $res = mysqli_query($conn,$sql);
                while($result = mysqli_fetch_array($res)) {
            ?>
                <div class="col-lg-3 col-6">
                    <div class="single-service">
                        <div class="image-box"><a href="conferenceinfo.php?id=<?php echo $result['eventid'];?>"><img src="documents/<?php echo $result['eventid'];?>/<?php echo $result['background_image'];?>" alt=""></a></div>
                        <div class="text">
                            <h4><a href="conferenceinfo.php?id=<?php echo $result['eventid'];?>"><?php echo $result['title'];?></a></h4>
                            <p><?php echo $result['theme'];?></p>
                        </div> <!-- /.text -->
                    </div> <!-- /.single-service -->
                </div> <!-- /.col- -->
            <?php }?>
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</div> <!-- /.our-service -->
<?php include_once 'footer.php'; ?>
<!-- Optional JavaScript _____________________________  -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://www.paypalobjects.com/api/checkout.js"></script>
<script src="vendor/jquery.2.2.3.min.js"></script>
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

<!-- Theme js -->
<script src="js/theme.js"></script>
</div> <!-- /.main-page-wrapper -->
</body>
</html>
