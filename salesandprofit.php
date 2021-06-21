<?php
ob_start();
include("adminnewside.php");
include("salesdb.php");
?>

<div class="container viewsalecontainer">
   <div class="row row11">
       <div class="col-md-12 text-center mt-4 fw-bold">
        <h2 class="font-weight-bold"><u> View Sales & Profit </u></h2>
       </div>
    </div>

    <div class="row mt-4">

        <div class="col-md-12 text-center">
            <button type="button" class="btn btn-success btn1" onclick="dailySale()">Daily Sales </button>
            
            <button type="button" class="btn btn-primary btn2" onclick="monthlySale()">Monthly Sales </button>
        
            <button type="button" class="btn btn-danger btn3" onclick="yearlySale()">Yearly Sales </button>
        </div>
    
    </div>
    <form method="post">
    <div class="row" id="saleviews">
   
    
    </form>
    </div>

    <?php
    if(isset($_POST['viewdaily'])){



        $sql2="select  DISTINCT item_name,item_no from sales_entry where saledate BETWEEN '$_POST[startdate]' and '$_POST[enddate]'  ORDER BY item_no ASC";
       
        $result2=mysqli_query($conn,$sql2);  ?>
            <div class="row">

                <div class="col-md-12 text-center mt-3">
                   <small class="text-center fw-bold"> Showing Total Sale Details of the item from <?php echo "$_POST[startdate]";?> to <?php echo "$_POST[enddate]";?></small>
                        <table class="table table-striped table-hover mt-4">
                        <thead>
                            <tr>
                            <th>Item No</th>
                            <th>Item Name</th>
                            <th>Sale Quantity</th>
                          
                            <th>Total</th>
                            <th>Profit</th>
                            
                            
                            </tr>
                        </thead>
                            <tbody>


                    <?php
                   
                    while($row2=mysqli_fetch_array($result2))
                    {

                        for($i=0;$i<sizeof($row2);$i++)
                        {
                            $sql4="select SUM(quantity),SUM(item_profit),SUM(trate)  from sales_entry where item_name='$row2[item_name]' and saledate BETWEEN '$_POST[startdate]' and '$_POST[enddate]'";
                           
                           
                            $res=mysqli_query($conn,$sql4);
                            $rowww=mysqli_fetch_array($res);
                           
                           
     
                       
                         }
                       
                       
                        
                        
                        
                        ?>
                            
                        <tr>
                                <td><?=$row2['item_no']?></td>
                                
                                <td><?=$row2['item_name']?></td>
                                
                                <td><?=$rowww['SUM(quantity)']?></td>
                                
                                <td><?=$rowww['SUM(trate)']?></td>
                                <td><?=$rowww['SUM(item_profit)']?></td>
                               
                               
                            
                            </tr>
                          
                           
                      <?php }?>

                      </tbody>
                        
                       

                    </table>

                    <div class="row">
                    <div class="col-md-12 text-center text-decoration-underline">
                     <h3> Sale Details (Selling Price Changed) </h3>
                    </div>
                    
                    </div>
                    <table class="table table-striped table-hover mt-4">
                        <thead>
                            <tr>
                            <th>Item No</th>
                            <th>Item Name</th>
                            <th>Selling Price</th>
                            <th>Total Selled Quantity</th>
                            <th>Total</th>
                            <th>Total Profit</th>
                            <th>Date</th>
                            
                            
                            </tr>
                         </thead>
                            <tbody>

                            <?php
                  

                  $sqll3="select  DISTINCT item_name,item_no from sales_entry where saledate BETWEEN '$_POST[startdate]' and '$_POST[enddate]' ORDER BY item_no ASC";
       
                  $result33=mysqli_query($conn,$sqll3);
                 

                 
                   while($row33=mysqli_fetch_array($result33))
                  
                   
                   {
                       

                        
                       for($s=0;$s<sizeof($row33);$s++){

                        
                        $sql6="select DISTINCT unit_rate  from sales_entry where saledate BETWEEN '$_POST[startdate]' and '$_POST[enddate]' and item_name='$row33[item_name]'";
                        $result6=mysqli_query($conn,$sql6);
                        $row6=mysqli_fetch_array($result6);
                       
                    }

                    if($row6['unit_rate']==$row6['unit_rate'])
                    {


                       
                    while($row6=mysqli_fetch_array($result6))
                    {
                        for($j=0;$j<sizeof($row6);$j++)
                        {
                            $sql7="select SUM(quantity),SUM(item_profit),SUM(trate),saledate  from sales_entry where unit_rate='$row6[unit_rate]'";
                            $result7=mysqli_query($conn,$sql7);
                            $row7=mysqli_fetch_array($result7);
                            
     
                       
                         }
                        
                        
                        
                        
                        
                        
                        ?>

                            <tr>
                                <td><?=$row33['item_no']?></td>
                                
                                <td><?=$row33['item_name']?></td>

                                <td><?=$row6['unit_rate']?></td>

                                <td><?=$row7['SUM(quantity)']?></td>
                                <td><?=$row7['SUM(trate)']?></td>
                                
                                <td><?=$row7['SUM(item_profit)']?></td>
                                <td><?=$row7['saledate']?></td>
                               
                            
                           


                         <?php }
                            
                            }else{
                                echo '<td><div class="alert alert-danger text-center">Nothing to Display</div></td>';
                                
                         }?>
                         </tr>
                         
                       <?php }
                         
                         
                         ?>
                        

                         </tbody>
                        
                       

                    </table>

                      <?php  } ?>
                         
                
                
            
            
            <?php

            if(isset($_POST['viewmonthly'])){

               


                $sql2="select  DISTINCT item_name,item_no from sales_entry where month(saledate)='$_POST[monthh]' ORDER BY item_no ASC";
                $result2=mysqli_query($conn,$sql2);  ?>
                <div class="row">
    
                    <div class="col-md-12 text-center mt-3">
                       <small class="text-center fw-bold"> Showing Total Sale Details of the item in the month of<?php echo "$_POST[monthh]";?> </small>
                            <table class="table table-bordered mt-4">
                            <thead>
                                <tr>
                                <th>Item No</th>
                                <th>Item Name</th>
                                <th>Sale Quantity</th>
                              
                                <th>Total</th>
                                <th>Profit</th>
                                
                                
                                </tr>
                            </thead>
                                <tbody>
    
    
                        <?php
                       
                        while($row2=mysqli_fetch_array($result2))
                        {
    
                            for($i=0;$i<sizeof($row2);$i++)
                            {
                                $sql4="select SUM(quantity),SUM(item_profit),SUM(trate)  from sales_entry where item_name='$row2[item_name]' and month(saledate)='$_POST[monthh]'";
                                $res=mysqli_query($conn,$sql4);
                                $rowww=mysqli_fetch_array($res);
                               
                               
         
                           
                             }
                           
                           
                            
                            
                            
                            ?>
                                
                            <tr>
                                    <td><?=$row2['item_no']?></td>
                                    
                                    <td><?=$row2['item_name']?></td>
                                    
                                    <td><?=$rowww['SUM(quantity)']?></td>
                                    
                                    <td><?=$rowww['SUM(trate)']?></td>
                                    <td><?=$rowww['SUM(item_profit)']?></td>
                                   
                                   
                                
                                </tr>
                              
                               
                          <?php }?>
    
                          </tbody>
                            
                           
    
                        </table>

                        <?php } ?>




<?php
                        
                        if(isset($_POST['viewyearly'])){

               


        $sql2="select  DISTINCT item_name,item_no from sales_entry where YEAR(saledate)='$_POST[yearr]' ORDER BY item_no ASC";
        $result2=mysqli_query($conn,$sql2);  ?>
        <div class="row">

    <div class="col-md-12 text-center mt-3">
       <small class="text-center fw-bold"> Showing Total Sale Details of the item in the month of <?php echo "$_POST[yearr]";?> </small>
            <table class="table table-striped table-hover mt-4">
            <thead>
                <tr>
                <th>Item No</th>
                <th>Item Name</th>
                <th>Sale Quantity</th>
              
                <th>Total</th>
                <th>Profit</th>
                
                
                </tr>
            </thead>
                <tbody>


        <?php
       
        while($row2=mysqli_fetch_array($result2))
        {

            for($i=0;$i<sizeof($row2);$i++)
            {
                $sql4="select SUM(quantity),SUM(item_profit),SUM(trate)  from sales_entry where item_name='$row2[item_name]' and year(saledate)='$_POST[yearr]'";
                $res=mysqli_query($conn,$sql4);
                $rowww=mysqli_fetch_array($res);
               
               

           
             }
           
           
            
            
            
            ?>
                
            <tr>
                    <td><?=$row2['item_no']?></td>
                    
                    <td><?=$row2['item_name']?></td>
                    
                    <td><?=$rowww['SUM(quantity)']?></td>
                    
                    <td><?=$rowww['SUM(trate)']?></td>
                    <td><?=$rowww['SUM(item_profit)']?></td>
                   
                   
                
                </tr>
              
               
          <?php }?>

          </tbody>
            
           

        </table>

        <?php } ?>



















           
            
     

























</div>
</div>
</main>

<script src="js/salesdetails.js"></script>
 </body>
 </html>