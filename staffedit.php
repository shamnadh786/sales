<?php
include("salesdb.php");


//if(isset($_POST['staffid'])){


$sql="select * from staff_table where staff_id='$_POST[staffid]'";

$result=mysqli_query($conn,$sql);

$row=mysqli_fetch_array($result);
echo json_encode($row);

   






//}



?>

  
