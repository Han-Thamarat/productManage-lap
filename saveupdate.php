<?php
include "connect.php";
$sid=$_GET['id'];
$n=$_POST['sname'];
$a=$_POST['detel'];
$m=$_POST['price'];


$sql="update products set pd_name='$n',pd_deteil='$a', pd_price='$m'  where id='$sid' ";
$result=mysqli_query($con,$sql);
mysqli_close($con);
echo "<meta http-equiv='refresh' content='0;URL=update.php'>";
?>