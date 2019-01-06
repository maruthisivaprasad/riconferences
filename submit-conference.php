<?php include_once 'header.php';
require_once('config.php');
$sql = "select * from events where slug='".$_GET['id']."'";
$res = mysqli_query($conn,$sql);
$result = mysqli_fetch_object($res);
$eventid = $result->eventid;
?>
<title>Submit Abstract | RI Conferences</title>
   <div class="jumbotron jumbotron-fluid bg-dark conference-banner">
      <div class="overlay">
         <div class="container clearfix text-center">
            <h5 class="text-white">Submit Abstract</h5>
            <h2><?php echo $result->title;?></h2>
            <h5 class="text-white"><?php echo $result->date;?> <?php echo $result->location;?></h5>
            <h6 class="mt-3 text-white">Theme: <?php echo $result->theme;?></h6>
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
                    <form action="<?php echo $urlpath;?>/submitcon.php" method="post" enctype="multipart/form-data">
                       <div class="form-group">
                          <label for="exampleInputname">Name</label>
                          <input type="text" class="form-control" name="user_name" id="exampleInputname" placeholder="Enter name" required="">
                       </div>
                      
                       <div class="form-group">
                          <label for="exampleInputEmail1">Email address</label>
                          <input type="email" class="form-control" name="user_email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required="">
                          <small id="emailHelp" class="form-text text-muted">Well never share your email with anyone else.</small>
                       </div>
                        <div class="form-group">
                          <label for="exampleInputNumber">Contact number</label>
                          <input type="number" class="form-control" name="contact_number" id="exampleInputNumber" placeholder="Enter contact number" required="">
                         
                       </div>
                       <div class="form-group">
                             <label for="inputPresentation">Type</label>
                             <select id="inputPresentation" name="user_presentation" class="form-control">
                                <option selected>Choose...</option>
                                <option>Oral</option>
                                <option>Poster</option>
                             </select>
                          </div>
                       <input type="hidden" class="form-control" name="eventid" value="<?php echo $result->eventid;?>">
                       
                       <div class="form-group">
                          <label for="exampleFormControlFile1">Upload your Absract here.</label>
                          <input type="file" name="uploadfile" class="form-control-file" id="exampleFormControlFile1">
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
                             <select class="form-control" id="inputCountry" name="user_country" required="">
                                <option value="">Select country</option>
                                <option value="United States">United States</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="Afghanistan">Afghanistan</option>
                                <option value="Albania">Albania</option>
                                <option value="Algeria">Algeria</option>
                                <option value="American Samoa">American Samoa</option>
                                <option value="Andorra">Andorra</option>
                                <option value="Angola">Angola</option>
                                <option value="Anguilla">Anguilla</option>
                                <option value="Antarctica">Antarctica</option>
                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                <option value="Argentina">Argentina</option>
                                <option value="Armenia">Armenia</option>
                                <option value="Aruba">Aruba</option>
                                <option value="Australia">Australia</option>
                                <option value="Austria">Austria</option>
                                <option value="Azerbaijan">Azerbaijan</option>
                                <option value="Bahamas">Bahamas</option>
                                <option value="Bahrain">Bahrain</option>
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="Barbados">Barbados</option>
                                <option value="Belarus">Belarus</option>
                                <option value="Belgium">Belgium</option>
                                <option value="Belize">Belize</option>
                                <option value="Benin">Benin</option>
                                <option value="Bermuda">Bermuda</option>
                                <option value="Bhutan">Bhutan</option>
                                <option value="Bolivia">Bolivia</option>
                                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                <option value="Botswana">Botswana</option>
                                <option value="Bouvet Island">Bouvet Island</option>
                                <option value="Brazil">Brazil</option>
                                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                <option value="Brunei Darussalam">Brunei Darussalam</option>
                                <option value="Bulgaria">Bulgaria</option>
                                <option value="Burkina Faso">Burkina Faso</option>
                                <option value="Burundi">Burundi</option>
                                <option value="Cambodia">Cambodia</option>
                                <option value="Cameroon">Cameroon</option>
                                <option value="Canada">Canada</option>
                                <option value="Canadian Nunavut Territory">Canadian Nunavut Territory</option>
                                <option value="Cape Verde">Cape Verde</option>
                                <option value="Cayman Islands">Cayman Islands</option>
                                <option value="Central African Republic">Central African Republic</option>
                                <option value="Chad">Chad</option>
                                <option value="Chile">Chile</option>
                                <option value="China">China</option>
                                <option value="Christmas Island">Christmas Island</option>
                                <option value="Cocos (Keeling Islands)">Cocos (Keeling Islands)</option>
                                <option value="Colombia">Colombia</option>
                                <option value="Comoros">Comoros</option>
                                <option value="Congo">Congo</option>
                                <option value="Cook Islands">Cook Islands</option>
                                <option value="Costa Rica">Costa Rica</option>
                                <option value="Cote D'Ivoire (Ivory Coast)">Cote D'Ivoire (Ivory Coast)</option>
                                <option value="Croatia (Hrvatska)">Croatia (Hrvatska)</option>
                                <option value="Cuba">Cuba</option>
                                <option value="Cyprus">Cyprus</option>
                                <option value="Czech Republic">Czech Republic</option>
                                <option value="Denmark">Denmark</option>
                                <option value="Djibouti">Djibouti</option>
                                <option value="Dominica">Dominica</option>
                                <option value="Dominican Republic">Dominican Republic</option>
                                <option value="East Timor">East Timor</option>
                                <option value="Ecuador">Ecuador</option>
                                <option value="Egypt">Egypt</option>
                                <option value="El Salvador">El Salvador</option>
                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                <option value="Eritrea">Eritrea</option>
                                <option value="Estonia">Estonia</option>
                                <option value="Ethiopia">Ethiopia</option>
                                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                <option value="Faroe Islands">Faroe Islands</option>
                                <option value="Fiji">Fiji</option>
                                <option value="Finland">Finland</option>
                                <option value="France">France</option>
                                <option value="France, Metropolitan">France, Metropolitan</option>
                                <option value="French Guiana">French Guiana</option>
                                <option value="French Polynesia">French Polynesia</option>
                                <option value="French Southern Territories">French Southern Territories</option>
                                <option value="Gabon">Gabon</option>
                                <option value="Gambia">Gambia</option>
                                <option value="Georgia">Georgia</option>
                                <option value="Germany">Germany</option>
                                <option value="Ghana">Ghana</option>
                                <option value="Gibraltar">Gibraltar</option>
                                <option value="Greece">Greece</option>
                                <option value="Greenland">Greenland</option>
                                <option value="Grenada">Grenada</option>
                                <option value="Guadeloupe">Guadeloupe</option>
                                <option value="Guam">Guam</option>
                                <option value="Guatemala">Guatemala</option>
                                <option value="Guinea">Guinea</option>
                                <option value="Guinea-Bissau">Guinea-Bissau</option>
                                <option value="Guyana">Guyana</option>
                                <option value="Haiti">Haiti</option>
                                <option value="Heard and McDonald Islands">Heard and McDonald Islands</option>
                                <option value="Honduras">Honduras</option>
                                <option value="Hong Kong">Hong Kong</option>
                                <option value="Hungary">Hungary</option>
                                <option value="Iceland">Iceland</option>
                                <option value="India">India</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="Iran">Iran</option>
                                <option value="Iraq">Iraq</option>
                                <option value="Ireland">Ireland</option>
                                <option value="Israel">Israel</option>
                                <option value="Italy">Italy</option>
                                <option value="Jamaica">Jamaica</option>
                                <option value="Japan">Japan</option>
                                <option value="Jordan">Jordan</option>
                                <option value="Kazakhstan">Kazakhstan</option>
                                <option value="Kenya">Kenya</option>
                                <option value="Kiribati">Kiribati</option>
                                <option value="Korea (North)">Korea (North)</option>
                                <option value="Korea (South)">Korea (South)</option>
                                <option value="Kuwait">Kuwait</option>
                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                <option value="Laos">Laos</option>
                                <option value="Latvia">Latvia</option>
                                <option value="Lebanon">Lebanon</option>
                                <option value="Lesotho">Lesotho</option>
                                <option value="Liberia">Liberia</option>
                                <option value="Libya">Libya</option>
                                <option value="Liechtenstein">Liechtenstein</option>
                                <option value="Lithuania">Lithuania</option>
                                <option value="Luxembourg">Luxembourg</option>
                                <option value="Macau">Macau</option>
                                <option value="Macedonia">Macedonia</option>
                                <option value="Madagascar">Madagascar</option>
                                <option value="Malawi">Malawi</option>
                                <option value="Malaysia">Malaysia</option>
                                <option value="Maldives">Maldives</option>
                                <option value="Mali">Mali</option>
                                <option value="Malta<">Malta</option>
                                <option value="Marshall Islands">Marshall Islands</option>
                                <option value="Martinique">Martinique</option>
                                <option value="Mauritania">Mauritania</option>
                                <option value="Mauritius">Mauritius</option>
                                <option value="Mayotte">Mayotte</option>
                                <option value="Mexico">Mexico</option>
                                <option value="Micronesia">Micronesia</option>
                                <option value="Moldova">Moldova</option>
                                <option value="Monaco">Monaco</option>
                                <option value="Mongolia">Mongolia</option>
                                <option value="Montserrat">Montserrat</option>
                                <option value="Morocco">Morocco</option>
                                <option value="Mozambique">Mozambique</option>
                                <option value="Myanmar">Myanmar</option>
                                <option value="Namibia">Namibia</option>
                                <option value="Nauru">Nauru</option>
                                <option value="Nepal">Nepal</option>
                                <option value="Netherlands">Netherlands</option>
                                <option value="Netherlands Antilles">Netherlands Antilles</option>
                                <option value="New Caledonia">New Caledonia</option>
                                <option value="New Zealand">New Zealand</option>
                                <option value="Nicaragua">Nicaragua</option>
                                <option value="Niger">Niger</option>
                                <option value="Nigeria">Nigeria</option>
                                <option value="Niue">Niue</option>
                                <option value="Norfolk Island">Norfolk Island</option>
                                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                <option value="Norway">Norway</option>
                                <option value="Oman">Oman</option>
                                <option value="Pakistan">Pakistan</option>
                                <option value="Palestine">Palestine</option>
                                <option value="Palau">Palau</option>
                                <option value="Palestine">Palestine</option>
                                <option value="Panama">Panama</option>
                                <option value="Papua New Guinea">Papua New Guinea</option>
                                <option value="Paraguay">Paraguay</option>
                                <option value="Peru">Peru</option>
                                <option value="Philippines">Philippines</option>
                                <option value="Pitcairn">Pitcairn</option>
                                <option value="Poland">Poland</option>
                                <option value="Portugal">Portugal</option>
                                <option value="Qatar">Qatar</option>
                                <option value="Reunion">Reunion</option>
                                <option value="Romania">Romania</option>
                                <option value="Russian Federation">Russian Federation</option>
                                <option value="Rwanda">Rwanda</option>
                                <option value="S. Georgia and S. Sandwich Isls.">S. Georgia and S. Sandwich Isls.</option>
                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                <option value="Saint Lucia">Saint Lucia</option>
                                <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                                <option value="Samoa">Samoa</option>
                                <option value="San Marino">San Marino</option>
                                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                <option value="Saudi Arabia">Saudi Arabia</option>
                                <option value="Senegal">Senegal</option>
                                <option value="Serbia">Serbia</option>
                                <option value="Seychelles">Seychelles</option>
                                <option value="Sierra Leone">Sierra Leone</option>
                                <option value="Singapore">Singapore</option>
                                <option value="Slovak Republic">Slovak Republic</option>
                                <option value="Slovenia">Slovenia</option>
                                <option value="Solomon Islands">Solomon Islands</option>
                                <option value="Somalia">Somalia</option>
                                <option value="South Africa">South Africa</option>
                                <option value="Spain">Spain</option>
                                <option value="Sri Lanka">Sri Lanka</option>
                                <option value="St. Helena">St. Helena</option>
                                <option value="St. Pierre and Miquelon">St. Pierre and Miquelon</option>
                                <option value="Sudan">Sudan</option>
                                <option value="Suriname">Suriname</option>
                                <option value="Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands</option>
                                <option value="Swaziland">Swaziland</option>
                                <option value="Sweden">Sweden</option>
                                <option value="Switzerland">Switzerland</option>
                                <option value="Syria">Syria</option>
                                <option value="Taiwan">Taiwan</option>
                                <option value="Tajikistan">Tajikistan</option>
                                <option value="Tanzania">Tanzania</option>
                                <option value="Thailand">Thailand</option>
                                <option value="Togo">Togo</option>
                                <option value="Tokelau">Tokelau</option>
                                <option value="Tonga">Tonga</option>
                                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                <option value="Tunisia">Tunisia</option>
                                <option value="Turkey">Turkey</option>
                                <option value="Turkmenistan">Turkmenistan</option>
                                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                <option value="Tuvalu">Tuvalu</option>
                                <option value="US Minor Outlying Islands">US Minor Outlying Islands</option>
                                <option value="Uganda">Uganda</option>
                                <option value="Ukraine">Ukraine</option>
                                <option value="United Arab Emirates">United Arab Emirates</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="United States">United States</option>
                                <option value="Uruguay">Uruguay</option>
                                <option value="Uzbekistan">Uzbekistan</option>
                                <option value="Vanuatu">Vanuatu</option>
                                <option value="Vatican City State (Holy See)">Vatican City State (Holy See)</option>
                                <option value="Venezuela">Venezuela</option>
                                <option value="Viet Nam">Viet Nam</option>
                                <option value="Virgin Islands (British)">Virgin Islands (British)</option>
                                <option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option>
                                <option value="Western Sahara">Western Sahara</option>
                                <option value="Yemen">Yemen</option>
                                <option value="Yugoslavia">Yugoslavia</option>
                                <option value="Zaire">Zaire</option>
                                <option value="Zambia">Zambia</option>
                                <option value="Zimbabwe">Zimbabwe</option>
                        </select>
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
         <script src="<?php echo $urlpath;?>/vendor/jquery.2.2.3.min.js"></script>
         <script src="<?php echo $urlpath;?>/js/jquery.min.js"></script>
         <!-- Popper js -->
         <script src="<?php echo $urlpath;?>/vendor/popper.js/popper.min.js"></script>
         <!-- Bootstrap JS -->
         <script src="<?php echo $urlpath;?>/vendor/bootstrap/js/bootstrap.min.js"></script>
         <!-- Camera Slider -->
         <script src='<?php echo $urlpath;?>/vendor/Camera-master/scripts/jquery.mobile.customized.min.js'></script>
         <script src='<?php echo $urlpath;?>/vendor/Camera-master/scripts/jquery.easing.1.3.js'></script>
         <script src='<?php echo $urlpath;?>/vendor/Camera-master/scripts/camera.min.js'></script>
         <!-- Language Stitcher -->
         <script src="<?php echo $urlpath;?>/vendor/language-switcher/jquery.polyglot.language.switcher.js"></script>
         <!-- Mega menu  -->
         <script src="<?php echo $urlpath;?>/vendor/bootstrap-mega-menu/js/menu.js"></script>
         <!-- WOW js -->
         <script src="<?php echo $urlpath;?>/vendor/WOW-master/dist/wow.min.js"></script>
         <!-- owl.carousel -->
         <script src="<?php echo $urlpath;?>/vendor/owl-carousel/owl.carousel.min.js"></script>
         <!-- js count to -->
         <script src="<?php echo $urlpath;?>/vendor/jquery.appear.js"></script>
         <script src="<?php echo $urlpath;?>/vendor/jquery.countTo.js"></script>
         <!-- Fancybox -->
         <script src="<?php echo $urlpath;?>/vendor/fancybox/dist/jquery.fancybox.min.js"></script>
         <script src="<?php echo $urlpath;?>/js/hs.core.js"></script>
         <script src="<?php echo $urlpath;?>/js/hs.sticky-block.js"></script>
         <!-- Theme js -->
         <script src="<?php echo $urlpath;?>/js/theme.js"></script>
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
