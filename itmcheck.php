<?php
session_start();
include("salesdb.php");

if(isset($_SESSION['staff_id'])){
   $sql="select * from stock where st_item_name='$_POST[chooseitem]'";
   $reslt=mysqli_query($conn,$sql);

   while($row6=mysqli_fetch_array($reslt)){
       echo  " <td><input class='form-control' name='itnumber' id='itnumber' type='text' value='$row6[st_item_no]'></td>
       <td><input class='form-control' name='itname' id='itname' type='text' value='$row6[st_item_name]'></td>
       <td><input class='form-control' name='qty2' id='qty2' type='number'></td>
       <td><input class='form-control' name='balstck' id='balqty' type='number' value='$row6[st_qty]'></td>
       <td><input class='form-control' name='urate2'  id='urate2'  type='text' value='$row6[sell_rate]'></td>
       <td><input class='form-control' name='disc2'  id='disc2'  type='text' value='$row6[discount]'></td>
       <input class='form-control' name='p_rate'  id='p_rate'  type='hidden' value='$row6[purchase_rate]'>
       <td><input  class='form-control' name='trate2' type='text' id='trate2'  onclick='calc()'></td>
     <td> 
   
     <button type='button' class='btn btn-primary' onclick='saleAdd()'>+</button>
   
      </td>
      <td> 
   
      <button type='button' class='btn btn-danger' onclick='saleReturn()'>- </button>
    
       </td>";
   }

}
?>