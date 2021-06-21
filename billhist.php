<?php
ob_start();
include("staffnav.php");
include("salesdb.php");
?>
<div class="container">
   <div class="row">
       <div class="col-md-12 text-center mt-4 fw-bold">
        <h2 class="font-weight-bold"><u> Bill History By Date </u></h2>
       </div>
    </div>

        <div class="row">
        <div class="col-md-12 mt-4">
                <form method="post">
                    <label class="fw-bold">Choose Date</label>
                        <select name="billdate" class="form-control mt-3">
                            <?php
                            $sql1="select DISTINCT billdate from salesbill ORDER BY billdate ASC";
                            $result1=mysqli_query($conn,$sql1);
                            while($row1=mysqli_fetch_array($result1))
                            {?>
                            <option><?= $row1['billdate']?></option>


                            <?php } ?>



                            


                        </select><br>
                        <button type="submit" name="viewbill" class="btn btn-danger mt-3">View </button>
                </form>
            </div>
            <div class="col-md-12">
                <?php
                if(isset($_POST['viewbill'])){

                $sql="select * from salesbill where billdate='$_POST[billdate]'";
                $result=mysqli_query($conn,$sql);?>

                <table class="table table-bordered mt-4">
                <thead>
                    <tr>
                    <th>Bill No</th>
                    <th>Item No</th>
                    <th>Item Name</th>
                    <th>Sale Quantity</th>
                    <th>Selling Price</th>
                    <th>Discount</th>
                    <th>Total</th>
                   
                    <th>Sales Counter Staff</th>
                    <th>Customer Name</th>
                    <th>Customer Number</th>
                    
                    </tr>

                    <tbody>
                    <?php
                    while($row=mysqli_fetch_array($result)){?>
                    <tr class="text-center">
                        <td><?=$row['billno']?></td>
                        <td><?=$row['itemno']?></td>
                        <td><?=$row['itemname']?></td>
                        <td><?=$row['itemqty']?></td>
                        <td><?=$row['item_unit_rate']?></td>
                        <td><?=$row['item_discount']?></td>
                        <td><?=$row['item_total']?></td>
                        <td><?=$row['sid']?></td>
                        <td><?=$row['custname']?></td>
                        <td><?=$row['custno']?></td>
                    
                    </tr>
                    <?php }?>
                    </tbody>
                
                    </thead>
                
                
                </table>
                <?php  } ?>






            

            

                



            
            
            </div>

        </div>

</div>