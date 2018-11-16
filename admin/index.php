<?php
require_once('../config.php');
if (isset($_POST['password']) && isset($_POST['username'])) {
    $sql = "select * from user where username='" . $_POST['username'] . "' and password='" . $_POST['password'] . "'";
    $login_check = mysqli_query($conn, $sql);
    if (!empty($login_check)) {
        $_SESSION['errormessage'] = '';
        header('Location: events.php');
    } else {
        $_SESSION['errormessage'] = 'Username and password not matching';
    }
}
?>
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
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <link rel="stylesheet" type="text/css" href="../css/custom.css">
        <!--<script src="assets/vendor/typed/typed.js" type="text/javascript"></script>-->
        <!-- responsive style sheet -->
        <link rel="stylesheet" type="text/css" href="../css/responsive.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/styles/default.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
    </head>
    <body>
        <div class="container">
            <form class=" col-md-4 col-sm-offset-4  form-signin" method="POST">
                <div class="row" style="padding-top:100px;">
                    <div class="logo" style="margin: 0 auto;"><a href="index"><img src="../images/logo/logo.png" alt="Logo"></a></div>
                    <br>
                    <div class="col-md-12">
                        <label for="inputUsername">Username</label>
                        <input type="text" name="username" id="inputUsername" class="form-control" name="usrname" required>
                    </div></br>
                    <div class="col-md-12">
                        <label for="inputPassword">Password</label>
                        <input type="password" name="password" id="inputPassword" class="form-control" na                                                                                me="password" required>
                    </div></br>
                    <div class="col-md-12">
                        <p style="color: red; text-align:center; "><?php echo isset($_SESSION['errormessage']) ? $_SESSION['errormessage'] : ''; ?></p>
                    </div></br>                
                    <div class="col-md-12" style="margin-top:20px;">
                        <button class="btn-login form-control btn-primary" style="border-radius:10px;" type="submit">Login</button>
                    </div></br>
                </div>
            </form>
        </div>
    </body>
</html>
