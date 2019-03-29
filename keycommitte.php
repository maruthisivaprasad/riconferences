<?php include_once 'header.php';
require_once('config.php');
$sql = "select * from organizing_committe";
$result = mysqli_query($conn, $sql);
?>
<title>Key Committe | RI Conferences</title>
<div class="inner-banner">
    <div class="overlay">
        <div class="container clearfix">
            <h2>Key Committe</h2>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li>/</li>
                <li>Key Committe</li>
            </ul>
        </div> <!-- /.container -->
    </div> <!-- /.overlay -->
</div> <!-- /.inner-banner -->

<div class="container">
        <?php $i = 0; while ($rec = mysqli_fetch_array($result)) { ?>
        <?php if($i==0) {?><div class="row"><?php }?>
        <div class="col-md-3">
            <a href="keydetail.php"><img src="documents/key/<?php echo $rec->image;?>" class="mb-2"></a>
            <p><?php echo $rec->name;?></p>
            <p><?php echo $rec->profession;?><?php echo $rec->university;?></p>
            <p><?php echo $rec->city;?></p>
        </div>
        <?php $i++; if($i>3) { $i=0; }?>
        <?php if($i==0) {?></div><?php }}?>
</div>
<?php include_once 'footer.php'; ?>
<script src="vendor/jquery.2.2.3.min.js"></script>
<script src="vendor/popper.js/popper.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/language-switcher/jquery.polyglot.language.switcher.js"></script>
<script src="vendor/bootstrap-mega-menu/js/menu.js"></script>
<script src="vendor/WOW-master/dist/wow.min.js"></script>
<script src="vendor/owl-carousel/owl.carousel.min.js"></script>
<script src="vendor/jquery.appear.js"></script>
<script src="vendor/jquery.countTo.js"></script>
<script src="vendor/fancybox/dist/jquery.fancybox.min.js"></script>
<script src="js/theme.js"></script>
</div> <!-- /.main-page-wrapper -->
</body>
</html>