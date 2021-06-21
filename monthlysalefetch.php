<?php


include("salesdb.php");

$sql="select DISTINCT MONTH(saledate) from sales_entry ";
$result=mysqli_query($conn,$sql);?>

<div class="col-md-5 mt-3 ">

  

    <select name="monthh" class="form-control">

    <?php
    while($row=mysqli_fetch_array($result)){?>
    
    <option><?=$row['MONTH(saledate)']?></option>

    <?php }
    ?>
    </select>
 </div>

    
    <div class="col-md-2 mt-3">
    
    <button type="submit" class="btn btn-danger" name="viewmonthly"> View </buuton>

 </div>


