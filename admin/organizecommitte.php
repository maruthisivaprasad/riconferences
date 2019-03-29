<?php
require_once('../config.php');
require_once('head.php');
$sql = "select * from organizing_committe";
$result = mysqli_query($conn, $sql);
?>
<script>
    $(document).ready(function () {
        $('#example').DataTable();
    });
</script>
<body>
    <div class="">
        <div class="col-md-2">
            <?php require_once('menu.php'); ?>
        </div>
        <div class="col-md-10" style="padding-top: 20px;">   
            <div class="row"> 
                <a href="organizing_committe.php"><button type="button" class="btn btn-primary" id="add_event" style="font-size: 14px;">Add Organize Committe</button></a>
            </div>
            <div class="row table-responsive" style="padding-top: 20px;">
                <table id="example" class="display table" style="width:100%">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Profession</th>
                            <th>University</th>
                            <th>City</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($rec = mysqli_fetch_array($result)) { ?>
                            <tr>
                                <td><?php echo $rec['name']; ?></td>
                                <td><?php echo $rec['profession']; ?></td>
                                <td><?php echo $rec['university']; ?></td>
                                <td><?php echo $rec['city']; ?></td>
                                <td>
                                    <a href="editorganize.php?id=<?php echo $rec['id']; ?>">
                                        <i class="glyphicon glyphicon-edit" id="edit_organize"></i>
                                    </a>
                                    <a href="#">
                                        <i class="glyphicon glyphicon-remove-circle" id="deleteorganize" onclick="getdelete('<?php echo $rec['id']; ?>')"></i>
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
        if (confirm("Are you sure you want to delete this key?")) {
            $.ajax({
                url: 'deleteorganize.php',
                type: "POST",
                data: {id: id},
                success: function (data) {
                    window.location.href = "organizecommitte.php";
                },
                error: function (data) { // if error occured
                },
            });
        }
        return false;
    }
</script>