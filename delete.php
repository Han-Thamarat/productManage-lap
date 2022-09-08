<?php
$sid=$_GET['id'];
include "connect.php";
$sql="delete from products where id='$sid' ";
$result=mysqli_query($con,$sql);
mysqli_close($con);
echo "<meta http-equiv='refresh' content='0;URL=update.php'>";
?>