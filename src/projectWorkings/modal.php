<!DOCTYPE html>
<html>
<head>
    <title>Load Content Dynamically in Bootstrap Modal with Jquery AJAX PHP and Mysql</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<!--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">-->


</head>
<body>
<div class="container">
    <br />
    <h3 align="center">Load Content Dynamically in Bootstrap Modal with Jquery AJAX PHP and Mysql</h3>
    <div class="row">
        <div class="col-md-12">
            <div class="panel-body">
                <?php
                    include "dbconn.php";
//                    $sql='CALL getData()';
//                    $stmt = $conn->prepare($sql);
//                    $result = $stmt->get_result();
                    $query='SELECT * FROM ipaddresses';
                    $result = mysqli_query($conn, $query);
                ?>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Host Name</th>
                                <th>IP Address</th>
                                <th>MAC Address</th>
                                <th>When Added</th>
                                <th>Notes</th>
                                <th>View</th>
                            </tr>
                        </thead>
                        <?php while ($row = mysqli_fetch_array($result)){  ?>
                            <tr>
                                <td><?php echo $row['description'];?></td>
                                <td><?php echo $row['address'];?></td>
                                <td><?php echo $row['mac'];?></td>
                                <td><?php echo $row['added'];?></td>
                                <td><?php echo $row['notes'];?></td>
                                <td><button data-id='<?php echo $row['ID']; ?>' class="userinfo btn btn-success">Add Notes</button></td>
                            </tr>
                        <?php } ?>

                    </table>

                </div>

            </div>

        </div>

    </div>

</div>
<div class="modal fade" id="empModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Notes</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body"> </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal">Save</button>
            </div>
        </div>
    </div>

</div>
<!--<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>-->
<!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>-->

<script type="text/javascript">
    $(document).ready(function(){
        $('.userinfo').click(function(){
            var userid = $(this).data('id');
            // alert (userid)
            $.ajax({
                url: 'ajaxfile.php',
                type: 'post',
                data: {userid: userid},
                success: function(response){
                    $('.modal-body').html(response);
                    $('#empModal').modal('show');
                }
            });
        });
    });

</script>
</body>
</html>

<?php
