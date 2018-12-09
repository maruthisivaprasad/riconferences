<?php
require_once('../config.php');
require_once('head.php');
$sql = "select * from orderhistory";
$result = mysqli_query($conn, $sql);
?>
<script>
    $(document).ready(function () {
        $('#concat').DataTable();
    });
</script>
<body>
    <div>
        <div class="col-md-2">
            <?php require_once('menu.php'); ?>
        </div>
        <div class="col-md-10" style="padding-top: 20px;">   
            <div class="row table-responsive" style="padding-top: 20px;">     
                <table id="concat" class="display table" style="width:100%">
                    <thead>
                        <tr>
                            <th>Event</th>
                            <th>Title</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Number</th>
                            <th>Country</th>
                            <th>Address</th>
                            <th>Amount</th>
                            <th>Payment Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($rec = mysqli_fetch_array($result)) {
                            if ($rec['eventid'] > 0) {
                                $sql1 = "select * from events where eventid=" . $rec['eventid'];
                                $res1 = mysqli_query($conn, $sql1);
                                $result1 = mysqli_fetch_object($res1);
                            }
                            ?>
                            <tr>
                                <td><?php echo $result1->title; ?></td>
                                <td><?php echo $rec['title']; ?></td>
                                <td><?php echo $rec['name']; ?></td>
                                <td><?php echo $rec['email']; ?></td>
                                <td><?php echo $rec['phone']; ?></td>
                                <td><?php echo $rec['country']; ?></td>
                                <td><?php echo $rec['address']; ?></td>
                                <td>$<?php echo $rec['amount']; ?></td>
                                <td><?php echo ($rec['payment_status']==0) ? 'Failed' : 'Success'; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>    
</body>
