<?php
session_start();
include("salesdb.php");

if(isset($_SESSION['staff_id'])){
   $sql="select * from stock where com_namee='$_POST[cname]'";
   $reslt=mysqli_query($conn,$sql);
   while($row5=mysqli_fetch_array($reslt)){
       echo " <option> $row5[st_item_name]</option>";
   }

}
?>