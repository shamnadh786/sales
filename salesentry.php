<?php
ob_start();
session_start();
include("salesdb.php");
include("staffnav.php");
?>
<div class="container text-center">
    <div class="title">
    <h1>Sales Entry </h1>
    </div>
    <div class="container container-fluid section1">
        <form method="post">
        <div class="row">
                <div class="col-md-4">

                    <label>staff Id </label>
                    <input type="text" class="form-control fm" name="stf_id" id="stf_id" value="<?php if(isset($_SESSION['staff_id'])){ echo $_SESSION['staff_id']; }?>" disabled>

                </div>
                <div class="col-md-4">
                    <label>Date </label>
                    <input type="text" class="form-control fm" name="saledate" id="saledate" value="<?= date("Y/m/d")?>" disabled>
                </div>

                <div class="col-md-4">
                    <?php
                       
                        $mainsql="select MAX(id) from sales_entry";
                       
                            $mainres=mysqli_query($conn,$mainsql);
                            $rowmain=mysqli_fetch_array($mainres);
                          
                        if($rowmain['MAX(id)'] == NULL)
                        {

                            $saleno=100100;

                        }
                        else{

                            $lstid=$rowmain['MAX(id)'];
                            

                            $sql22="select saledate from sales_entry where id='$lstid'";
                            $res22=mysqli_query($conn,$sql22);
                            if($row22=mysqli_fetch_array($res22)){
                                $date=date("Y-m-d");
                                $lastsaledt=$row22['saledate'];
                              
                               
                                if($lastsaledt != $date){
                                    $sql222="select MAX(salesentryno) from sales_entry";
                                        
                                            $rsltt=mysqli_query($conn,$sql222);
                                           
                                            $row2=mysqli_fetch_array($rsltt);
                                            $saleno=$row2['MAX(salesentryno)']+1;
                                            
    
                                
    
    
                            }else{
                                $sql223="select MAX(salesentryno) from sales_entry";
                                        
                                $rslt223=mysqli_query($conn,$sql223);
                               
                                $row223=mysqli_fetch_array($rslt223);
                                $saleno=$row223['MAX(salesentryno)'];
                              
                            }
                            
                           
                        }




                        }
                           
                          
    
                         
    


                      
                        
                       



                       
                    ?>
                    <label>Sales Entry No </label>
                    <input type="text" class="form-control fm" name="saleno" id="salenoo"  value="<?=$saleno?>" disabled>

                </div>
        </div>

        <div class="row">
            
            <div class="col-md-12 col-sm-12 col-xs-12 fm ">
            <label>Choose Item</label><br>   
            <select class="form-control fm chs" name="chooseitem" id="chooseitem" onchange="getItems()">

            <option selected="true" disabled="disabled">Select</option>
            <?php
            $sql="select * from stock";
            $result=mysqli_query($conn,$sql);
            while($row=mysqli_fetch_array($result)){
                echo"<option> $row[st_item_name] </option> ";
            }


            ?>
            </select>
            
            </div>
        </div>
        






        <div class="table-container fm">
       
        <div class="row">
          <div class="col-md-12">
         
            
      
                    <table class="table ">
                        <thead>
                            <tr>
                            <th>Item No </th>
                            <th>Item Name </th>
                            <th>Qty </th>
                            <th>Qty in Stock </th>
                            <th>Unit Price </th>
                            <th>Discount </th>
                            <th>Total Amount </th>



                            </tr>
                        </thead>
                         <tbody>
                     
                   
                          <tr id="results">
                         <td><input class="form-control" name="itnumber" id="itnumber" type="number"></td>
                         <td><input  class="form-control" name="itname" id="itname" type="text"></td>
                         <td><input  class="form-control" name="qty2" id="qty2" type="number" ></td>
                         <td><input  class="form-control" name="qt" id="qt" type="number" ></td>
                         <td><input  class="form-control" name="urate2"  id="urate2" value="" type="number"></td>
                         <td><input  class="form-control" name='disc2'  id='disc2'  type='number' ></td>
                         <td><input  class="form-control" name="tamount" type="number" id="trate2" onclick="calc()"></td>
                       
                        
                         </tr>
                         
                  
                  
                 </tbody>
                 </table>

             
        
        
        </div>
        
        
        </div>
       
        </div>




        <div class="table-container">
         <div class="row">
          <div class="col-md-12">
                <?php
                $datee=date("Y/m/d");
                $sqll="select * from sales_entry where saledate='$datee'";
                if($conn->query($sqll)){
                $resultt=mysqli_query($conn,$sqll);

                
                ?>

                        <table class="table table-bordered">
                        <thead>
                            <tr>
                            <th>Item No </th>
                            <th>Item Name </th>
                            <th>Qty </th>
                            <th>Unit Price </th>
                            <th>Discount </th>
                            <th>Total Amount </th>



                            </tr>
                        </thead>
                         <tbody id="out">
                          <?php while($row1=mysqli_fetch_array($resultt)){

                            echo" <tr> 

                            <td>$row1[item_no]</td>

                            <td>$row1[item_name]</td>
                            <td>$row1[quantity]</td>
                            <td>$row1[unit_rate]</td>
                            <td>$row1[disc2]</td>
        
                            <td>$row1[trate]</td>


                                 </tr>"; }            
                ?>
                   
                   <?php}?>        
                         
                  
                  
                 </tbody>
                 </table>
          
          
          </div>
         
         
         </div>

       
                   

    </div>


    <?php
    
    
          }
    ?>
    <div class="container-fluid">
    <div class="row" id="anss">
    <div class="col-md-6">
    <label>Grand Total </label>
    <input  name="gtotal" class="form-control" type="text" id="gtotal"   disabled>
    </div>
    <div class="col-md-6">
    <label>Total profit </label>
    <input  name="gtotal" class="form-control" type="text" id="gtotal" disabled>
    </div>
    </div>
    </div>
    
</div>














<script type="text/javascript">

function calc(){
    var qty=$("#qty2").val();
    var uprice=$("#urate2").val();
    var discount=$("#disc2").val();
   var ans= (qty*uprice)-discount;
   console.log(ans);
    document.getElementById("trate2").value=ans;


}

</script>
<script type="text/javascript">

$("#chooseitem").select2();

</script>
<script type="text/javascript" src="js/getitm.js"></script>
<script type="text/javascript" src="js/addsale.js"></script>
<script type="text/javascript" src="js/total.js"></script>
<script type="text/javascript" src="js/saleret.js"></script>
</body>
</html>