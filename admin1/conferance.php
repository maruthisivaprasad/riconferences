<?php 
require_once('../config.php');
require_once('head.php');
$sql = "select * from submit_conferance";
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
                            <th>Event Name</th>
                            <th>User Name</th>
                            <th>User Email</th>
                            <th>Contact Number</th>
                            <th>User Presentation</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($rec = mysqli_fetch_array($result)) {
                            if($rec['eventid'] > 0) {
                                $sql1 = "select * from events where eventid=".$rec['eventid'];
                                $res1 = mysqli_query($conn,$sql1);
                                $result1 = mysqli_fetch_object($res1);
                            }
                            ?>
                        <tr>
                            <td><?php echo $result1->title;?></td>
                            <td><?php echo $rec['user_name'];?></td>
                            <td><?php echo $rec['user_email'];?></td>
                            <td><?php echo $rec['contact_number'];?></td>
                            <td><?php echo $rec['user_presentation'];?></td>
                            <td><a href="viewconferance.php?id=<?php echo $rec['id'];?>"><button type="button" class="btn btn-primary" id="view_event">View</button></a></td>
                        </tr>
                    <?php }?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>    
</body>
