<?php require_once('config.php');?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<!-- For IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- For Resposive Device -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<title>RI Conferences</title>

		<!-- Favicon -->
		<link rel="icon" type="image/png" sizes="56x56" href="images/fav-icon/icon.png">


		<!-- Main style sheet -->
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/custom.css">
		<script src="assets/vendor/typed/typed.js" type="text/javascript"></script>
		<!-- responsive style sheet -->
		<link rel="stylesheet" type="text/css" href="css/responsive.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/styles/default.min.css">
  				
		<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
		<!-- GTM -->
		<!-- Google Tag Manager -->
			<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
			new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
			j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
			'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
			})(window,document,'script','dataLayer','GTM-PLZZW6N');</script>
			<!-- End Google Tag Manager -->
		<!-- End of GTM -->

		<!-- <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css"> -->
    <script>
        // Render the PayPal button

        paypal.Button.render({

            // Set your environment

            env: 'sandbox', // sandbox | production

            // Specify the style of the button

            style: {
                label: 'pay',
                size: 'small', // small | medium | large | responsive
                shape: 'rect', // pill | rect
                color: 'gold' // gold | blue | silver | black
            },

            // PayPal Client IDs - replace with your own
            // Create a PayPal app: https://developer.paypal.com/developer/applications/create

            client: {
                sandbox: 'AZDxjDScFpQtjWTOUtWKbyN_bDt4OgqaF4eYXlewfBP4-8aqX3PiV8e1GWU6liB2CUXlkA59kJXE7M6R',
                production: '<insert production client id>'
            },

            // Show the buyer a 'Pay Now' button in the checkout flow
            commit: true,

            // Wait for the PayPal button to be clicked

            payment: function(data, actions) {
                return actions.payment.create({
                    payment: {
                        transactions: [{
                            amount: {
                                total: '0.01',
                                currency: 'USD'
                            }
                        }]
                    }
                });
            },

            // Wait for the payment to be authorized by the customer

            onAuthorize: function(data, actions) {
                return actions.payment.execute().then(function() {
                    window.alert('Payment Complete!');
                    window.location = "/thank-you"
                });
            }

        }, '#paypal-button-container');
    </script>

		<!-- Fix Internet Explorer ______________________________________-->

		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
			<script src="vendor/html5shiv.js"></script>
			<script src="vendor/respond.js"></script>
		<![endif]-->


	</head>

	<body>
		<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns?id=GTM-PLZZW6N"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->
		<div class="main-page-wrapper">

			<!-- ===================================================
				Loading Transition
			==================================================== -->
			<div id="loader-wrapper">
				<div id="loader"></div>
			</div>



			<!--
			=============================================
				Theme Header
			==============================================
			-->
			<header class="theme-main-header">
				<div class="top-header">
					<div class="container">
						<div class="clearfix">
							<div class="float-left">
								<ul class="left-widget clearfix">
									<!--<li><a href="#" class="pl-0"><i class="fa fa-envelope" aria-hidden="true"> </i> riconferences@gmail.com</a></li>-->
									<li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i> +1 9173833144</a></li>
								</ul>
							</div>
							<div class="float-right">
								<ul class="right-widget clearfix">
									<li class="quote float-right"><a href="conferences">Register for an Event</a></li>
								</ul>
							</div>
						</div> <!-- /.clearfix -->
					</div> <!-- /.container -->
				</div> <!-- /.top-header -->



				<div class="main-menu-wrapper clearfix">
					<div class="container clearfix">
						<!-- Logo -->
						<div class="logo float-left"><a href="index"><img src="images/logo/logo.png" alt="Logo"></a></div>

						<!-- ============================ Theme Menu ========================= -->
						<nav class="navbar-expand-lg float-right navbar-light border-bottom" id="mega-menu-wrapper">
					    	<button class="navbar-toggler float-right clearfix" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					    		<i class="flaticon-menu-options"></i>
					    	</button>
					    	<div class="collapse navbar-collapse clearfix" id="navbarNav">
					    	  <ul class="navbar-nav nav">
					    	    <li class="nav-item active"><a class="nav-link" href="index">Home</a></li>
					    	    <li class="nav-item dropdown-holder">
					    	    	<a class="nav-link" href="conferences">Conferences</a>
					    	    	<ul class="sub-menu">
					    	    		<?php $sql = "select * from events";
                            $res = mysqli_query($conn,$sql);
                            while($result = mysqli_fetch_array($res)) {
                        ?>
                        <li><a href="conferenceinfo.php?id=<?php echo $result['eventid'];?>"><?php echo $result['title'];?></a></li>
                    <?php }?>
									</ul>
					    	    </li>
					    	    <li class="nav-item"><a class="nav-link" href="about-us">About Us</a>
					    	    </li>
					    	    <li class="nav-item dot-fix mr-0">
					    	    	<a class="nav-link" href="contact-us">Contact us</a>
					    	    </li>
					    	  </ul>
					    	</div>
						</nav>
					</div> <!-- /.container -->
				</div> <!-- /.main-menu-wrapper -->
			</header> <!-- /.theme-main-header -->


			<div class="jumbotron jumbotron-fluid bg-dark home-banner">
	            <div class="overlay">
	               <div class="container clearfix text-center">
	                  <h1 class="text-white" style="font-size:60px; letter-spacing: -3px; margin-top: 50px; margin-bottom:10px;line-height: 1;">Welcome to Research International Conferences</h1>
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





			<!--
			=============================================
				Feature Banner
			==============================================
			-->
			<div class="about">
				<div class="opacity overlay-one" style="padding-top: 20px;">
					<div class="container">
						<div class="theme-title text-center">
							<h2 style="margin-bottom: 20px;">ABOUT RICONFERENCES</h2>
						</div> <!-- /.theme-title -->
						<div class="row">
							<!--<div class="col-md-4">-->
							<!--	<ul class="list-group keytopics_main">-->
				   <!--               	<li  class="list-group-item fa fa-angle-right">	Agri & Aqua	</li>-->
							<!--		<li  class="list-group-item fa fa-angle-right">	Biochemistry	</li>-->
							<!--		<li  class="list-group-item fa fa-angle-right">	Biotechnology	</li>-->
							<!--		<li  class="list-group-item fa fa-angle-right">	Cardiology	</li>-->
							<!--		<li  class="list-group-item fa fa-angle-right">	Chemistry	</li>-->
							<!--		<li  class="list-group-item fa fa-angle-right">	Clinical	</li>-->
							<!--		<li  class="list-group-item fa fa-angle-right">	Dentistry	</li>-->
							<!--		<li  class="list-group-item fa fa-angle-right">	Dermatology	</li>-->
							<!--		<li  class="list-group-item fa fa-angle-right">	Diabetes & Endocrinology	</li>-->
							<!--		<li  class="list-group-item fa fa-angle-right">	Disease	</li>-->
							<!--		<li  class="list-group-item fa fa-angle-right">	Energy	</li>-->
							<!--		<li  class="list-group-item fa fa-angle-right">	Engineering	</li>-->
				   <!--            </ul>-->
							<!--</div>-->
							<!--<div class="col-md-4">-->
							<!--	<ul class="list-group keytopics_main">-->
							<!--		<li  class="list-group-item fa fa-angle-right">	Environmental Sciences	</li>-->
							<!--		<li  class="list-group-item fa fa-angle-right">	Food & Nutrition	</li>-->
							<!--		<li  class="list-group-item fa fa-angle-right">	Gastroenterology	</li>-->
							<!--		<li  class="list-group-item fa fa-angle-right">	Genetics & Molecular Biology	</li>-->
							<!--		<li  class="list-group-item fa fa-angle-right">	Gynaecology	</li>-->
							<!--		<li  class="list-group-item fa fa-angle-right">	HealthCare	</li>-->
							<!--		<li  class="list-group-item fa fa-angle-right">	Immunology	</li>-->
							<!--		<li  class="list-group-item fa fa-angle-right">	Materials Science	</li>-->
							<!--		<li  class="list-group-item fa fa-angle-right">	Medicine	</li>-->
							<!--		<li  class="list-group-item fa fa-angle-right">	Microbiology	</li>-->
							<!--		<li  class="list-group-item fa fa-angle-right">	Nanotechnology	</li>-->
							<!--		<li  class="list-group-item fa fa-angle-right">	Nephrology	</li>-->
							<!--	</ul>-->
							<!--</div>-->
							<!--<div class="col-md-4">-->
							<!--	<ul class="list-group keytopics_main">-->
							<!--		<li  class="list-group-item fa fa-angle-right">	Neuroscience	</li>-->
							<!--		<li  class="list-group-item fa fa-angle-right">	Nursing	</li>-->
							<!--		<li  class="list-group-item fa fa-angle-right">	Oncology	</li>-->
							<!--		<li  class="list-group-item fa fa-angle-right">	Ophthalmology	</li>-->
							<!--		<li  class="list-group-item fa fa-angle-right">	Orthopaedic	</li>-->
							<!--		<li  class="list-group-item fa fa-angle-right">	Pathology	</li>-->
							<!--		<li  class="list-group-item fa fa-angle-right">	Pediatrics	</li>-->
							<!--		<li  class="list-group-item fa fa-angle-right">	Pharmaceutical Sciences	</li>-->
							<!--		<li  class="list-group-item fa fa-angle-right">	Physics	</li>-->
							<!--		<li  class="list-group-item fa fa-angle-right">	Surgery	</li>-->
							<!--		<li  class="list-group-item fa fa-angle-right">	Veterinary	</li>-->
							<!--	</ul>-->
							<!--</div>-->

<p class="text-center">The Riconferences is expert-driven and is initiated to organize and facilitate proficient and international conferences worldwide with associating the world class researchers. The Riconferences is establishing outstanding, direct communication between the researchers whether they are working in the similar field or in interdisciplinary research activities.The Riconferences provides an international forum for the appearance and discussion of cutting edge research in the science, medical, clinical, technology, engineering, life sciences and their related researches. In this regard, meet Inspiring Speakers and Experts at our universal meetings inclusive all  conferences, workshops and symposiums annually on Science, Technology, Medical, Pharma, Clinical, Engineering and Business Riconferences is provider of information, solutions to enhance the performance and progress of science, medical, health, clinical, engineering and technology professionals, and is empowering them to make better decisions, deliver better care, and sometimes make groundbreaking discoveries, that advance the boundaries of knowledge and human progress.
</p>
						</div> <!-- /.row -->
					</div> <!-- /.container -->
				</div> <!-- /.opacity -->
			</div> <!-- /.feature-banner -->

			<!--
			=====================================================
				Consultation Form
			=====================================================
			-->
			<div class="consultation-form bg-white">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 col-12">
							<div class="form-wrapper">
								<div class="theme-title">
									<h2>Contact us more information</h2>
								</div> <!-- /.theme-title -->
								<form action="#">
									<div class="row">
										<div class="col-md-6 order-md-last">
											<textarea placeholder="Message*"></textarea>
										</div>
										<div class="col-md-6 order-md-first">
											<input type="text" placeholder="Username*">
											<input type="email" placeholder="Email*">
											<select class="form-control" id="exampleSelect1">
										      <option>About conferences</option>
										      <option>About Speakers</option>
										      <option>Discounts</option>
										      <option>Others</option>
										    </select>
										    <button class="form-button">Get Free Consultation</button>
										</div>
									</div>
								</form>
							</div>
						</div>
						<div class="col-lg-4 col-12">
							<div class="container">
			                      <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Friconferences%2F&tabs=timeline&width=340&height=400&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=731985673803404" width="340" height="400" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
			                    </div>
						</div>
					</div>
				</div> <!-- /.container -->
			</div> <!-- /.consultation-form -->


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
