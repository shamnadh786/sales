<?php

session_start();
include("salesdb.php");


if(isset($_SESSION["staff_id"])){

    $sql="select * from stock where st_item_name='$_POST[item]'";
    $result=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_array($result)){


       echo' 
        <td><input type="text" id="itemno" class="form-control" value="'.$row['st_item_no'].'"></td>
        <td><input type="text" id="itemname" class="form-control" value="'.$row['st_item_name'].'"></td>
        <td><input type="text" id="itemqty" class="form-control" ></td>
        <td><input type="text" id="stockbal" class="form-control" value="'.$row['st_qty'].'"></td>
        <td><input type="text" id="itemrate" class="form-control" value="'.$row['sell_rate'].'"> 
        <input type="hidden" id="purchaserate" class="form-control" value="'.$row['purchase_rate'].'"></td>
        
        <td><input type="text" id="itemdisc" class="form-control" value="'.$row['discount'].'"></td>
        <td><input type="text" id="itemtotal" class="form-control" onclick="calc()"></td>
        <td><button class="btn btn-danger" onclick="showBill()">+</td>

       ';
    }



}
    
    
    
    ?>