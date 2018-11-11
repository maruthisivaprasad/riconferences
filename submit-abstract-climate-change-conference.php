hid  <?php include_once 'header.php'; ?>
  <title>Submit Abstract - Climate Change | RI Conferences</title>


         
         <div class="jumbotron jumbotron-fluid bg-dark conference-banner">
            <div class="overlay">
               <div class="container clearfix text-center">
                  <h5 class="text-white">Submit Abstract</h5>
                  <h2>World Congress Climate Change</h2>
                  <h5 class="text-white">August 28-29, 2019 Dubai, UAE</h5>
                  <h6 class="mt-3 text-white">Theme: Climate Change and Sustainable Futures</h6>
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
         <div class="our-blog blog-details mt-100">
            <div class="container">
               <div class="row">
                  <div class="col-xl-9 col-lg-8 col-12">
                    <form action="insert_data.php" method="post" enctype="multipart/form-data">
                             <div class="form-group">
                          <label for="exampleInputname">Name</label>
                          <input type="text" class="form-control" name="user_name" id="exampleInputname" placeholder="Enter name">
                         
                       </div>
                      
                       <div class="form-group">
                          <label for="exampleInputEmail1">Email address</label>
                          <input type="email" class="form-control" name="user_email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                          <small id="emailHelp" class="form-text text-muted">Well never share your email with anyone else.</small>
                       </div>
                        <div class="form-group">
                          <label for="exampleInputNumber">Contact number</label>
                          <input type="number" class="form-control" name="contact_number" id="exampleInputNumber" placeholder="Enter contact number">
                         
                       </div>
                       <div class="form-group">
                             <label for="inputPresentation">Type</label>
                             <select id="inputPresentation" name="user_presentation" class="form-control">
                                <option selected>Choose...</option>
                                <option>Oral</option>
                                <option>Poster</option>
                             </select>
                          </div>
                       <input type="hidden" class="form-control" name="conference" value="Climate change">
                       
                       <div class="form-group">
                          <label for="exampleFormControlFile1">Upload your Absract here.</label>
                          <input type="file" name="myfile" class="form-control-file" id="exampleFormControlFile1">
                       </div>
                       <div class="form-group">
                          <label for="inputAddress">Address</label>
                          <input type="text" class="form-control" name="user_address1" id="inputAddress" placeholder="1234 Main St">
                       </div>
                       <div class="form-group">
                          <label for="inputAddress2">Address 2</label>
                          <input type="text" class="form-control" name="user_address2" id="inputAddress2" placeholder="Apartment, studio, or floor">
                       </div>
                       <div class="form-group">
                             <label for="inputCity">City</label>
                             <input type="text" name="user_city" class="form-control" id="inputCity">
                          </div>
                       <div class="form-group">
                             <label for="inputState">State</label>
                             <input type="text" id="inputState" name="user_state" class="form-control">
                          </div>
                          <div class="form-group">
                             <label for="inputCountry">Country</label>
                             <input type="text" id="inputCountry" name="user_state" class="form-control">
                          </div>
                          <div class="form-group">
                             <label for="inputZip">Zip</label>
                             <input type="text" class="form-control" name="user_zip" id="inputZip">
                          </div>
                          <div class="form-check text-center">
                             <input type="checkbox" class="form-check-input" id="exampleCheck1">
                             <label class="form-check-label" for="exampleCheck1">Agree to terms and conditions</label>
                          </div>
                          <div class="form-submit text-center">
                           <input type="submit" class="btn btn-primary w-50 text-center" value="Submit">
                          </div>

                    </form>
                  </div>
                  <!-- Sidebar STarting -->
                  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8 col-12 blog-sidebar">
                     <!-- <div class="sidebar-box sidebar-search">
                        <form action="#">
                        	<input type="text" placeholder="Search..">
                        	<button><i class="fa fa-search" aria-hidden="true"></i></button>
                        </form>
                        </div> --> <!-- /.sidebar-search -->
                     <div class="sidebar-box blog-categories bg-customjs-sticky-block g-sticky-block--lg" id="stickyblock-start" data-start-point="#stickyblock-start" data-end-point="#stickyblock-end">
                      
                     </div>
                     <!-- /.blog-categories -->

                     <!-- /.sidebar-recent-post -->
                     <!-- <div class="sidebar-keyword">
                        <h3>Keyword</h3>
                        <ul class="clearfix">
                        	<li><a href="#">Ideas </a></li>
                        	<li><a href="#">Education </a></li>
                        	<li><a href="#">design </a></li>
                        	<li><a href="#">animation </a></li>
                        	<li><a href="#">book </a></li>
                        </ul>
                        </div>  --><!-- /.sidebar-keyword -->
                  </div>
                  <!-- /.blog-sidebar -->
               </div>
               <!-- /.row -->
            </div>
            <!-- /.container -->
         </div>
         <!-- /.our-blog -->
         <div id="stickyblock-end"></div>
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
         <script type="text/javascript">
            $(window).on('load', function () {
                   // initialization of sticky blocks
                   $.HSCore.components.HSStickyBlock.init('.js-sticky-block');
                 });
         </script>
      </div>
      <!-- /.main-page-wrapper -->
   </body>
</html>
