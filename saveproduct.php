
    <?php
    $i= $_POST['id'];
    $n= $_POST['sname'];
    $d= $_POST['detel'];
    $p= $_POST['price'];
    include "connect.php";
$sql="insert into products (id,pd_name,pd_deteil,pd_price) 
                     values('$i','$n','$d','$p')";
$result=mysqli_query($con,$sql);
mysqli_close($con);
echo "<meta http-equiv='refresh' content='0;URL=index.php'>";
    ?>
