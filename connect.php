<?php
$con=mysqli_connect("localhost","root","")or die("error1");
mysqli_select_db($con,"poll009")or die("Error2");
mysqli_query($con,"SET NAMES utf8");
?>