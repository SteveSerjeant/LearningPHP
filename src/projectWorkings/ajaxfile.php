<!--success-->
<?php
//$userid = $_POST['userid'];
//echo $userid;
include "dbconn.php";

$userid = $_POST['userid'];

$sql = "select * from ipaddresses where ID=".$userid;
$result = mysqli_query($conn,$sql);
while( $row = mysqli_fetch_array($result) ){
?>
<table border='0' width='100%'>
    <tr>
        <td width="300"><<?php echo "Hello World!"?>">
<!--        <td width="300"><img src="images/--><?php //echo $row['photo']; ?><!--">-->
        <td style="padding:20px;">
            <p>Host Name : <?php echo $row['description']; ?></p>
            <p>IP Address: <?php echo $row['address']; ?></p>
            <p>MAC Address : <?php echo $row['mac']; ?></p>
            <p>When Added : <?php echo $row['added']; ?></p>
            <p>Notes : <?php echo $row['notes']; ?></p>
        </td>
    </tr>
</table>

<?php } ?>