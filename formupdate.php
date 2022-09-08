<?php 

include "connect.php";
$sid=$_GET['id'];
$sql="select * from products where id='$sid' ";
$result=mysqli_query($con,$sql); //สั่งทำงาน
$row=mysqli_fetch_assoc($result);
mysqli_close($con); //สั่งปิด
 ?>
 <html>
    <head>
    <link rel="stylesheet" href="Boostrap4/bootstrap.min.css">
    <script src="Boostrap4/bootstrap.min.js"></script>
    <script src="Boostrap4/jquery.min.js"></script>
    <script src="Boostrap4/popper.min.js"></script>
    </head>
<body>
    <form method="post" action="saveupdate.php?id=<?php echo $row['id'];?>">
        <table class="table  table-hover">
            <tr class="table-dark text-dark"><td colspan="2" align="center">เเก้ไขข้อมูลส่วนตัว</td></tr>
            
            <tr><td>ชื่อสินค้า</td>
            <td><input type="text" name="sname" value="<?php echo $row ['pd_name'];?>"></td></tr> <!-- value=ค่าของ เพื่อให้ใส่ข้อมูลในช่องได้-->
            <tr><td>รายละเอียดสินค้า</td>
            <td><input type="text" name="detel" value="<?php echo $row ['pd_deteil'];?>"></td></tr>
            <tr><td>ราคาสินค้า</td>
            <td><input type="text" name="price" value="<?php echo $row ['pd_price'];?>"></td></tr>
         
            <tr><td><input type="submit" value="ปรับปรุงข้อมูล" ></td>
            <td><input type="reset" value="ลบข้อมูล"></td></tr>
            
        </table>
    </form>
    <center><a href="update.php" class="btn btn-info" role="button">กลับ</a></center>
</body>
</html>