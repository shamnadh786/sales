<?php
include("salesdb.php");


if(isset($_POST['stockid'])){


$sql="select * from stock where stock_id='$_POST[stockid]'";

$result=mysqli_query($conn,$sql);

$row=mysqli_fetch_array($result);
echo json_encode($row);

   






}



?>

  
