<?php
ob_start();
include("adminnewside.php");
include("salesdb.php");
?>
<div class="container">
   <div class="row">
       <div class="col-md-12 text-center mt-4 fw-bold">
        <h2 class="font-weight-bold"><u> View Stock History By Date </u></h2>
       </div>
    </div>

        <div class="row">
        <div class="col-md-12 mt-4">
                <form method="post">
                    <label class="fw-bold">Choose Date</label>
                        <select name="salesdate" class="form-control mt-3">
                            <?php
                            $sql1="select DISTINCT added_date from stock ORDER BY added_date ASC";
                            $result1=mysqli_query($conn,$sql1);
                            while($row1=mysqli_fetch_array($result1))
                            {?>
                            <option><?= $row1['added_date']?></option>


                            <?php } ?>



                            


                        </select>
                        <button type="submit" name="viewsale" class="btn btn-danger mt-3">View </button>
                </form>
            </div>
            <div class="col-md-12">
                <?php
                if(isset($_POST['viewsale'])){

                $sql="select * from stock where added_date='$_POST[salesdate]'";
                $result=mysqli_query($conn,$sql);?>

                <table class="table table-bordered mt-4">
                <thead class="text-center">
                    <tr>
                    <th>Item No</th>
                    <th>Item Name</th>
                    <th>Company Name</th>
                    <th>Stock Qty</th>
                    <th>Purchase Rate</th>
                    <th>Sell Rate</th>
                    <th>Discount</th>
                    
                    
                    </tr>

                    <tbody>
                    <?php
                    while($row=mysqli_fetch_array($result)){
                        
                       
                        
                        
                        ?>
                    <tr class="text-center">
                        <td><?=$row['st_item_no']?></td>
                        <td><?=$row['st_item_name']?></td>
                        <td><?=$row['com_namee']?></td>
                        <td><?=$row['st_qty']?></td>
                        <td><?=$row['purchase_rate']?></td>
                        <td><?=$row['sell_rate']?></td>
                        
                        <td><?=$row['discount']?></td>
                      

                    
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