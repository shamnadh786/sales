<?php


include("salesdb.php");

$sql="select DISTINCT YEAR(saledate) from sales_entry ";
$result=mysqli_query($conn,$sql);?>

<div class="col-md-5 mt-3 ">

  

    <select name="yearr" class="form-control">

    <?php
    while($row=mysqli_fetch_array($result)){?>
    
    <option><?=$row['YEAR(saledate)']?></option>

    <?php }
    ?>
    </select>
 </div>

    
    <div class="col-md-2 mt-3">
    
    <button type="submit" class="btn btn-danger" name="viewyearly"> View </buuton>

 </div>


