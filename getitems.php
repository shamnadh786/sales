<?php
session_start();
include("salesdb.php");

if(isset($_SESSION['staff_id'])){
   $sql="select * from stock where st_item_name='$_POST[itemselect]'";
   $reslt=mysqli_query($conn,$sql);
   while($row6=mysqli_fetch_array($reslt)){
       echo  "<td><input class='form-control' name='number' id='number' type='text' value='$row6[st_item_no]'></td>
       <td><input class='form-control' name='name' id='name' type='text' value='$row6[st_item_name]'></td>
       <td><input class='form-control' name='qty' id='qty' type='number'></td>
       <td><input class='form-control' name='uprice'  id='uprice'  type='text'></td>
       
       <td><input class='form-control' name='tamount' type='text' id='tamount'  onclick='calc()'></td>
     <td> 
   
    <button type='button' class='btn btn-primary' onclick='show()'>Add </button>
   
      </td>";
   }

}
?>