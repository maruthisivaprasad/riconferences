<?php 
require_once('../config.php');
require_once('head.php');
$sql = "select * from events";
$result=mysqli_query($conn,$sql);
?>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    } );
</script>
<body>
    <div class="row">
        <div class="col-md-2">
            <?php require_once('menu.php');?>
        </div>
        <div class="col-md-10" style="padding-top: 20px;">   
            <div class="row"> 
                <a href="createevent.php"><button type="button" class="btn btn-primary" id="add_event">Add Event</button></a>
            </div>
            <div class="row" style="padding-top: 20px;">     
                <table id="example" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Date</th>
                            <th>End Date</th>
                            <th>Location</th>
                            <th>Theme</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($rec = mysqli_fetch_array($result)) {?>
                        <tr>
                            <td><?php echo $rec['title'];?></td>
                            <td><?php echo $rec['date'];?></td>
                            <td><?php echo $rec['enddate'];?></td>
                            <td><?php echo $rec['location'];?></td>
                            <td><?php echo $rec['theme'];?></td>
                            <td><a href="viewevent.php?id=<?php echo $rec['eventid'];?>"><button type="button" class="btn btn-primary" id="view_event">View</button></a> | <a href="editevent.php?id=<?php echo $rec['eventid'];?>"><button type="button" class="btn btn-primary" id="edit_event">Edit</button></a> | <button type="button" class="btn btn-primary" id="deleteevent" onclick="getdelete('<?php echo $rec['eventid'];?>')">Delete</button></td>
                        </tr>
                    <?php }?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>    
</body>
<script type="text/javascript">
    function getdelete(id) {
        if(confirm("Are you sure you want to delete this Record?")){
            $.ajax({
                url: 'delete.php',
                type: "POST",
                data: {id:id},
                success: function (data) {
                    window.location.href = "events.php";
                },
                error: function (data) { // if error occured
                },
            });
        }
        return false;
    }    
</script>
