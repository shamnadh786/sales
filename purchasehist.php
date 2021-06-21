<?php
ob_start();
include("adminnewside.php");
include("salesdb.php");
?>
<div class="container">
   <div class="row">
       <div class="col-md-12 text-center mt-4 fw-bold">
        <h2 class="font-weight-bold"><u> View Purchase By Date </u></h2>
       </div>
    </div>

        <div class="row">
        <div class="col-md-12 mt-4">
                <form method="post">
                    <label class="fw-bold">Choose Date</label>
                        <select name="salesdate" class="form-control mt-3">
                            <?php
                            $sql1="select DISTINCT p_date from purc_entry ORDER BY p_date ASC";
                            $result1=mysqli_query($conn,$sql1);
                            while($row1=mysqli_fetch_array($result1))
                            {?>
                            <option><?= $row1['p_date']?></option>


                            <?php } ?>



                            


                        </select>
                        <button type="submit" name="viewsale" class="btn btn-danger mt-3">View </button>
                </form>
            </div>

            </div>
            <div class="row">
            <div class="col-md-12">
                <?php
                if(isset($_POST['viewsale'])){

                $sql="select * from purc_entry where p_date='$_POST[salesdate]'";
                $result=mysqli_query($conn,$sql);?>

                <table class="table table-bordered mt-4">
                <thead class="text-center">
                    <tr>
                    <th>Item No</th>
                    <th>Item Name</th>
                    <th>Company Name</th>
                    <th>Purchase Qty</th>
                    <th>Purchase Rate</th>
                    <th>Purchase Total</th>
                    <th>Counter Staff</th>
                    <th>Stock Insert Status</th>
                    
                    </tr>

                    <tbody>
                    <?php
                    while($row=mysqli_fetch_array($result)){
                        
                        if($row['purc_status']=="ok"){
                            $yes="<small class='text-success'>YES</small>";
                        }else{
                            $yes="<small class='text-danger'>PENDING</small>";
                        }
                        
                        
                        ?>
                    <tr class="text-center">
                        <td><?=$row['purc_itemno']?></td>
                        <td><?=$row['purc_name']?></td>
                        <td><?=$row['c_name']?></td>
                        <td><?=$row['purc_qty']?></td>
                        <td><?=$row['purc_rate']?></td>
                        <td><?=$row['purc_total']?></td>
                        
                        <td><?=$row['st_id']?></td>
                        <td><?=$yes?></td>

                    
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