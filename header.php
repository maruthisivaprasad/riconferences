<?php require_once('config.php');?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- For Resposive Device -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="56x56" href="images/fav-icon/icon.png">


    <!-- Main style sheet -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- responsive style sheet -->
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://www.paypalobjects.com/api/checkout.js"></script>
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

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PLZZW6N');</script>
<!-- End Google Tag Manager -->
  </head>

  <body>
      <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PLZZW6N"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
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
            <div class="logo float-left"><a href="index"><img src="images/logo/logo.png" alt="Logo"></a></div>

            <!-- ============================ Theme Menu ========================= -->
            <nav class="navbar-expand-lg float-right navbar-light border-bottom" id="mega-menu-wrapper">
                <button class="navbar-toggler float-right clearfix" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <i class="flaticon-menu-options"></i>
                </button>
                <div class="collapse navbar-collapse clearfix" id="navbarNav">
                  <ul class="navbar-nav nav">
                    <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item dropdown-holder">
                      <a class="nav-link" href="conferences.php">Conferences</a>
                      <ul class="sub-menu">
                        <?php $sql = "select * from events";
                            $res = mysqli_query($conn,$sql);
                            while($result = mysqli_fetch_array($res)) {
                        ?>
                        <li><a href="conferenceinfo.php?id=<?php echo $result['eventid'];?>"><?php echo $result['title'];?></a></li>
                    <?php }?>
                  </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="about-us.php">About Us</a>
                    </li>
                    <li class="nav-item dot-fix mr-0">
                      <a class="nav-link" href="contact-us.php">Contact us</a>
                    </li>
                  </ul>
                </div>
            </nav>
          </div> <!-- /.container -->
        </div> <!-- /.main-menu-wrapper -->
      </header> <!-- /.theme-main-header -->