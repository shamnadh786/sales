<?php
session_start();
include("salesdb.php");
include("staffnav.php");
?>
<div class="container">
    <div class="title-area">
        <h1> View Stock </h1>
    </div>
    <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-6">

          <?php
            $sql="select * from stock";
            if($conn->query($sql)){
                $result=mysqli_query($conn,$sql);

            
            ?>


            <table class="table table-bordered" >
                <thead>
                    <tr>
                    <th>Item No</th>
                    <th>Item Name</th>
                    <th>Quantity</th>
                    <th>Company Name</th>
                    <th>Purchase Rate</th>
                    <th>Sell Rate</th>
                    <th>Added Date</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php while($row=mysqli_fetch_array($result)){?>
                        <tr>
                         <td><?=$row['st_item_no']?></td>
                         <td><?=$row['st_item_name']?></td>
                         <td><?=$row['st_qty']?></td>
                         <td><?=$row['com_namee']?></td>
                         <td><?=$row['purchase_rate']?></td>
                         <td><?=$row['sell_rate']?></td>
                         <td><?=$row['added_date']?></td>
                        
                        </tr>
                        
                        
                        
                        
                        
                        <?php }?>  
                    </tbody>

            </table>
            <?php }?>
          
          
          
          
          </div>

          
    </div>


</div>

















</div>