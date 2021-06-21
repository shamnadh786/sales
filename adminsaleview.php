<?php
ob_start();
include("adminnewside.php");
include("salesdb.php");
?>
<div class="container">
   <div class="title text-center" id="t1">
     
        <h2 class="font-weight-bold"><u> View Sales By Date </u></h2>
       
    </div>

        <div class="row">
        <div class="col-md-12 sm-12 xs-12 mt-4">
                <form method="post">
                    <label class="fw-bold">Choose Date</label>
                        <select name="salesdate" class="form-control mt-3">
                            <?php
                            $sql1="select DISTINCT saledate from sales_entry ORDER BY saledate ASC";
                            $result1=mysqli_query($conn,$sql1);
                            while($row1=mysqli_fetch_array($result1))
                            {?>
                            <option><?= $row1['saledate']?></option>


                            <?php } ?>



                            


                        </select>
                        <button type="submit" name="viewsale" class="btn btn-danger mt-3">View </button>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 sm-12 xs-12">
                <?php
                if(isset($_POST['viewsale'])){

                $sql="select * from sales_entry where saledate='$_POST[salesdate]'";
                $result=mysqli_query($conn,$sql);?>

                <table class="table table-bordered mt-4">
                <thead>
                    <tr>
                    <th>Item No</th>
                    <th>Item Name</th>
                    <th>Sale Quantity</th>
                    <th>Selling Price</th>
                    <th>Discount</th>
                    <th>Total</th>
                    <th>Profit</th>
                    <th>Sales Counter Staff</th>
                    
                    </tr>

                    <tbody>
                    <?php
                    while($row=mysqli_fetch_array($result)){?>
                    <tr class="text-center">
                        <td><?=$row['item_no']?></td>
                        <td><?=$row['item_name']?></td>
                        <td><?=$row['quantity']?></td>
                        <td><?=$row['unit_rate']?></td>
                        <td><?=$row['disc2']?></td>
                        <td><?=$row['trate']?></td>
                        <td><?=$row['item_profit']?></td>
                        <td><?=$row['staffid']?></td>
                    
                    </tr>
                    <?php }?>
                    </tbody>
                
                    </thead>
                
                
                </table>
                <?php  } ?>






            

            

                



            
            
            </div>

        </div>

</div>
                    </div>
                    </main>
                    </body>
                    </html>