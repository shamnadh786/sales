<?php
ob_start();
session_start();
include("staffnav.php");
include("salesdb.php");
?>
<div class="container">
   <div class="row">
       <div class="col-md-12 text-center mt-4 fw-bold">
        <h2 class="font-weight-bold"><u> Search Customer Bill </u></h2>
       </div>
    </div>

        <div class="row">
        <div class="col-md-12 mt-4">
                <form method="post">
                    <label class="fw-bold">Enter Customer Name/ Contact No</label>
                        <input type="text"  name="billcust" class="form-control mt-3">
                           <br>
                        <button type="submit" name="viewbill" class="btn btn-danger mt-3">View </button>
             </form>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-12 mt-4">
               
                <?php
                if(isset($_POST['viewbill'])){

                $sql="select * from salesbill  where custname='$_POST[billcust]' OR custno='$_POST[billcust]'";
                $result=mysqli_query($conn,$sql);
                if($result->num_rows>0){?>
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
                    <th>Bill Date</th>
                    <th>Sales Staff</th>
                    <th>Customer Name</th>
                    <th>Customer Number</th>
                    <th>Print</th>
                    
                    </tr>

                    <tbody>
                  
                    <?php
                   
                    while($row=mysqli_fetch_array($result)){?>
                    <tr class="text-center">
                       <form method="post">
                        <td><?=$row['billno']?><input type="hidden" name="billnoo" value="<?=$row['billno']?>"></td>
                        <td><?=$row['itemno']?></td>
                        <td><?=$row['itemname']?></td>
                        <td><?=$row['itemqty']?></td>
                        <td><?=$row['item_unit_rate']?></td>
                        <td><?=$row['item_discount']?></td>
                        <td><?=$row['item_total']?></td>
                        <td><?=$row['billdate']?><input type="hidden" name="billdt" value="<?=$row['billdate']?>"></td>
                        <td><?=$row['sid']?></td>
                        <td><?=$row['custname']?></td>
                        <td><?=$row['custno']?></td>
                        
                        
                        <td>
                       
                      
                       
                        
                      
                       <button type="submit" name="print" class="btn btn-primary">Print</button></a></td>
                       </form>
                    </tr>
                    <?php }?>
                 
                  
                  
                    </tbody>
                
                    </thead>
           
                
                </table>
                
                 
               
               
                      
                <?php  }else{
                    echo'<div class="alert alert-danger text-center">Nothing to Display</div>';
                    header("Refresh:2");
                } }
                
                
               
                ?>






            

            

                



           
            
            </div>

        </div>

        <?php

        if(isset($_POST['print'])){
            var_dump($_POST['billnoo']);
            $_SESSION['billno']=$_POST['billnoo'];
            $_SESSION['billdt']=$_POST['billdt'];

            header("location:billprintnew.php");
        }


?>

</div>