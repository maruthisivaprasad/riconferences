<?php
require_once('../config.php');
require_once('head.php');
$sql = "select * from contacts order by concatid desc";
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
                            <th>Name</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($rec = mysqli_fetch_array($result)) { ?>
                            <tr>
                                <td><?php echo $rec['name']; ?></td>
                                <td><?php echo $rec['email']; ?></td>
                                <td><?php echo $rec['subject']; ?></td>
                                <td><?php echo $rec['message']; ?></td>
                                <td><a href="#">
                                        <i class="glyphicon glyphicon-remove-circle" id="deleteevent" onclick="getdelete('<?php echo $rec['concatid']; ?>')"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>    
</body>
<script type="text/javascript">
    function getdelete(id) {
        if (confirm("Are you sure you want to delete this Record?")) {
            $.ajax({
                url: 'deleteconcat.php',
                type: "POST",
                data: {id: id},
                success: function (data) {
                    window.location.href = "contacts.php";
                },
                error: function (data) { // if error occured
                },
            });
        }
        return false;
    }
</script>