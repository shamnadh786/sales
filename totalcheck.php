


 <?php
    session_start();
    include("salesdb.php");
    
    
    if(isset($_SESSION['staff_id'])){

    $date3=date("Y/m/d");
    $sql3="select SUM(item_profit),SUM(trate) from sales_entry where saledate='$date3'";
    $rst=mysqli_query($conn,$sql3);
   
        if($row4=mysqli_fetch_array($rst))
            $gtotal=$row4["SUM(trate)"];
            $tot=$row4["SUM(item_profit)"];
            echo "<div class='col-md-6'>
            <label>Grand Total </label>
            <input  name='gtotal' class='form-control' type='text' id='gtotal' value='$gtotal'  disabled>
            </div>
            <div class='col-md-6'>
            <label>Total profit </label>
            <input  name='gtotal' class='form-control' type='text' id='gtotal'  value='$tot' disabled>
            </div>";



          }



          ?>