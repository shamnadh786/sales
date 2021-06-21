<?php
ob_start();
include("adminnewside.php");
include("salesdb.php");
?>
<div class="container">
   <div class="row">
       <div class="col-md-12 text-center mt-4 fw-bold">
        <h2 class="font-weight-bold"><u> View Sales Return By Date </u></h2>
       </div>
    </div>

        <div class="row">
        <div class="col-md-12 mt-4">
                <form method="post">
                    <label class="fw-bold">Choose Date</label>
                        <select name="salesdate" class="form-control mt-3">
                            <?php
                            $sql1="select DISTINCT selldatee from sales_return ORDER BY selldatee ASC";
                            $result1=mysqli_query($conn,$sql1);
                            while($row1=mysqli_fetch_array($result1))
                            {?>
                            <option><?= $row1['selldatee']?></option>


                            <?php } ?>



                            


                        </select>
                        <button type="submit" name="viewsale" class="btn btn-danger mt-3">View </button>
                </form>
            </div>
            <div class="col-md-12">
                <?php
                if(isset($_POST['viewsale'])){

                $sql="select * from sales_return where selldatee='$_POST[salesdate]'";
                $result=mysqli_query($conn,$sql);?>

                <table class="table table-bordered mt-4">
                <thead>
                    <tr>
                    <th>Item No</th>
                    <th>Item Name</th>
                    <th>Sale Quantity</th>
                    <th>Selling Price</th>
                  
                    <th>Total</th>
                  
                    <th>Sales Counter Staff</th>
                    
                    </tr>

                    <tbody>
                    <?php
                    while($row=mysqli_fetch_array($result)){?>
                    <tr class="text-center">
                        <td><?=$row['it_no']?></td>
                        <td><?=$row['it_name']?></td>
                        <td><?=$row['qtyy']?></td>
                        <td><?=$row['ratee']?></td>
                        
                        <td><?=$row['totalamnt']?></td>
                     
                        <td><?=$row['staffidd']?></td>
                    
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