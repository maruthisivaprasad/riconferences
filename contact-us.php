<?php include_once 'header.php'; ?>
<title>Contact us | RI Conferences</title>

<!-- 
=============================================
        Theme Inner Banner
============================================== 
-->
<div class="inner-banner">
        <div class="overlay">
                <div class="container clearfix">
                        <h2>Stay With us</h2>
                        <ul>
                                <li><a href="index.html">Home</a></li>
                                <li>/</li>
                                <li>Contact us</li>
                        </ul>
                </div> <!-- /.container -->
        </div> <!-- /.overlay -->
</div> <!-- /.inner-banner -->


<!-- 
=============================================
        Contact Us
============================================== 
-->
<div class="contact-us">
    <div class="container">
        <div class="row" style="margin-bottom: 50px;">
            <?php echo ($_SESSION['message']) ? $_SESSION['message'] : '';?>
            <div class="col-lg-7 col-12">
                <div class="contact-us-form">
                    <form action="sendemail.php" method="post" class="form-validation form-styl-two" autocomplete="off">
                        <div class="row">
                            <div class="col-sm-6 col-12"><input type="text" placeholder="Your Name*" name="name" required=""></div>
                            <div class="col-sm-6 col-12"><input type="email" placeholder="Email Address*" name="email" required=""></div>
                        </div>
                        <input type="text" placeholder="Subject*" name="sub">
                        <input type="hidden" name="redirect" value="contact">
                        <textarea placeholder="Your Message" name="message"></textarea>
                        <input type="submit" value="Send Message">
                    </form>
                </div> <!-- /.contact-us-form -->
            </div> <!-- /.col- -->
            <div class="col-lg-5 col-12">
                <div class="contact-address">
                    <h4><b>Our Global communication support</b></h4>
                    <p><b>John David</b><br>
                    Conferences Mnanager<br>
                    E: <a href="mailto:riconferences178@gmail.com">riconferences178@gmail.com</a><br>
                    Ph: +1 (917)-383-3144</p>
                    <p><b>Stella</b><br>
                    Business Development Manager<br>
                    E: <a href="mailto:riconferences@aol.com">riconferences@aol.com</a><br>
                    Ph: +1 (917)-383-3144</p>
                    <ul>
                        <li><a href="" class="tran3s"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="" class="tran3s"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="" class="tran3s"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                        <li><a href="" class="tran3s"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    </ul>
                </div> <!-- /.contact-address -->
            </div> <!-- /.col- -->
        </div> <!-- /.row -->
    </div> <!-- /.conatiner -->
    <?php include_once 'footer.php'; ?>
    <!-- Optional JavaScript _____________________________  -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- jQuery -->
        <script src="vendor/jquery.2.2.3.min.js"></script>
        <!-- Popper js -->
        <script src="vendor/popper.js/popper.min.js"></script>
        <!-- Bootstrap JS -->
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
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
        <!-- Validation -->
        <script type="text/javascript" src="vendor/contact-form/validate.js"></script>
        <script type="text/javascript" src="vendor/contact-form/jquery.form.js"></script>
        <!-- Google map js -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjQLCCbRKFhsr8BY78g2PQ0_bTyrm_YXU" type="text/javascript"></script>
        <script src="vendor/sanzzy-map/dist/snazzy-info-window.min.js"></script>

        <!-- Theme js -->
        <script src="js/theme.js"></script>
        <script src="js/map-script.js"></script>
</div> <!-- /.main-page-wrapper -->
</body>
</html>