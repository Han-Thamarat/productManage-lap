<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Boostrap4/bootstrap.min.css">
    <script src="Boostrap4/bootstrap.min.js"></script>
    <script src="Boostrap4/jquery.min.js"></script>
    <script src="Boostrap4/popper.min.js"></script>
</head>
<body>
    <Center><H1>แก้ไขข้อมูลสินค้า</H1></Center>
<?php
include "connect.php";
$sql="select * from products";
$result=mysqli_query($con,$sql);
mysqli_close($con);
?>

<table class="table  table-hover">
<tr class="table-dark text-dark">
    <td>ลำดับ</td><td>รหัสสินค้า</td><td>ชื่อสินค้า</td><td>แก้ไข</td><td>[ลบ]</td>
</tr>
<?php  
    $n=1;
    while($row=mysqli_fetch_assoc($result)){
    ?>
<tr>
<td><?php echo $n++;?></td>
    <td><?php echo $row['id'];?></td>
    <td><?php echo $row['pd_name'];?></td>
    <td><a href="formupdate.php?id=<?php echo $row['id'];?>" class="btn btn-outline-success">แก้ไข</a></td></td>
    <td><a href="delete.php?id=<?php echo $row['id'];?>" class="btn btn-outline-success">ลบ</a></td>
</tr>
<?php  
    }
    ?>

</table>
<center><a href="index.php" class="btn btn-info" role="button">กลับ</a></center>
</body>
</html>