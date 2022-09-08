<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Addproduct</title>
    <link rel="stylesheet" href="Boostrap4/bootstrap.min.css">
    <script src="Boostrap4/bootstrap.min.js"></script>
    <script src="Boostrap4/jquery.min.js"></script>
    <script src="Boostrap4/popper.min.js"></script>
</head>
<body>
    <form method="post" action="saveproduct.php">
    <table border="2" width="30%" align="center">
        <tr>
            <td colspan="2" align="center">ADD PRODUCTs</td>
        </tr>
        <tr>
            <td>รหัสสินค้า</td><td><input type="text" name="id" required></td>
        </tr>
        <tr>
            <td>ชื่อสินค้า</td><td><input type="text" name="sname" required></td>
        </tr>
        <tr>
            <td>รายละเอียดสินค้า</td><td><textarea name="detel" cols="35" rows="3" required></textarea></td>
        </tr>
        <tr>
            <td>ราคาสินค้า</td><td><input type="number" name="price" required></td>
        </tr>
        <tr>
            <td colspan="2" align="center">
            <input type="Submit" value="ADD" class="btn btn-success">
            <input type="reset" name="RESET" class="btn btn-info">
            </td>
        </tr>
        
    </table>
    <br>
    <br>
    <center><a href="index.php" class="btn btn-info" role="button">กลับ</a></center>
</form>
</body>
</html>