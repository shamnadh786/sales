<?php


include("salesdb.php");

$sql="select distinct saledate from sales_entry ORDER BY saledate ASC ";
$result=mysqli_query($conn,$sql);?>

<div class="col-md-5 mt-3 ">

  

    <select name="startdate" class="form-control">

    <?php
    while($row=mysqli_fetch_array($result)){?>
    
    <option><?=$row['saledate']?></option>

    <?php }
    ?>
    </select>
 </div>




<?php
 $sql1="select distinct saledate from sales_entry ORDER BY saledate ASC";
$result1=mysqli_query($conn,$sql1);?>

 <div class="col-md-5 mt-3 ">



    <select name="enddate" class="form-control">

    <?php
    while($row1=mysqli_fetch_array($result1)){?>
    
    <option><?=$row1['saledate']?></option>

    <?php }
    ?>
    </select>
    </div>
    <div class="col-md-2 mt-3">
    
    <button type="submit" class="btn btn-danger" name="viewdaily"> View </buuton>

 </div>


