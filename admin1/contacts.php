<?php 
require_once('../config.php');
require_once('head.php');
$sql = "select * from contacts";
$result=mysqli_query($conn,$sql);
?>
<script>
    $(document).ready(function() {
        $('#concat').DataTable();
    } );
</script>
<body>
    <div class="row">
        <div class="col-md-2">
            <?php require_once('menu.php');?>
        </div>
        <div class="col-md-10" style="padding-top: 20px;">   
            <div class="row" style="padding-top: 20px;">     
                <table id="concat" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Message</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($rec = mysqli_fetch_array($result)) {?>
                        <tr>
                            <td><?php echo $rec['name'];?></td>
                            <td><?php echo $rec['email'];?></td>
                            <td><?php echo $rec['subject'];?></td>
                            <td><?php echo $rec['message'];?></td>
                        </tr>
                    <?php }?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>    
</body>
