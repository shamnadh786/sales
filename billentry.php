<?php
session_start();
include("staffnav.php");
include("salesdb.php");

if(isset($_SESSION['staff_id'])){
    $staffid=$_SESSION['staff_id'];
}

$query="select MAX(billno) from salesbill";
if($conn->query($query)){
    $rslt=mysqli_query($conn,$query);
    if($row1=mysqli_fetch_array($rslt)){
      $maxbillno=$row1['MAX(billno)'];
      $nextbillno=$maxbillno+1;
    }
}
?>
<form method="post">
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


<input type="hidden" name="saleno" id="salenoo" value="<?=$saleno?>">
</form>
<div class="container">
    <div class="title-section">
    <h1>Sales Bill Entry</h1>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <label>Staff ID</label>
                <input type="text" class="form-control" name="sid" id="sid"value="<?= $staffid?>" disabled>
            </div>
            <div class="col-md-4">
                <label>Bill No</label>
                <input type="text" name="billno" class="form-control" value="<?= $nextbillno?>" id="billno" disabled>
            </div>
            <div class="col-md-4">
                <label>Bill Date</label>
                <input type="text" name="billdate" class="form-control"value="<?= date("Y/m/d") ?>" id="billdate" disabled>
            </div>

        </div>

        <div class="row">
            <div class="col-md-6">
                <label>Customer Name</label>
                <input type="text" name="custname"  id="custname"class="form-control" value="" >
            </div>
            <div class="col-md-6">
                <label>Customer No</label>
                <input type="text" name="custno" id="custno" class="form-control" value="" >
            </div>
            
            
        </div>
        <div class="row">
            <div class="col-md-12">
                <label>Choose Item</label>
                <select type="text" name="item" id="item" class="form-control" onchange="itemFetch()" > 
                <?php
                $sql="select * from stock";
                $result=mysqli_query($conn,$sql);
                while($row=mysqli_fetch_array($result))
                {
                    echo "<option>$row[st_item_name]</option>";

                }
                ?>
                
                
                </select>
            </div>
           
            
            
        </div>
    </div>
    <div class="table-container text-center mt-5 pt-5">
     <div class="row">
      <div class="col-md-12">
      <table class="table table-bordered">
         <thead>
          <tr>
             <td>Item No</td>
             <td>Item Name</td>
             <td>Qty</td>
             <td>Stock Balance</td>
             <td>Unit price</td>
             <td>Discount</td>
             <td>Total</td>
          </tr>
         </thead>
          <tbody >
           <tr id="output">
            <td><input  type="text" id="itemno" class="form-control"></td>
            <td><input type="text" id="itemname" class="form-control"></td>
            <td><input type="text" id="itemqty" class="form-control"></td>
            <td><input type="text" id="stockbal" class="form-control" >
           
            <td><input type="text" id="itemrate" class="form-control"></td>
            <td><input type="text" id="itemdisc" class="form-control"></td>
            <td><input type="text" id="itemtotal" class="form-control"></td>
          

           </tr>
           
          </tbody>
        
        </table>
      </div>
    
     </div>



     <div class="container" >
       <div class="row">
        <div class="col-md-12">
        <table class="table table-bordered">
            <thead>
             <tr>
              <th>Item No</th>
              <th>Item Name</th>
              <th>Quantity</th>
              <th>Unit Price</th>
              <th>discount</th>
              <th>Total</th>
             
             </tr>
            
            </thead>

            <tbody id="blll">

            </tbody>
           </table>
        
        
        
        </div>
          
          
           
           </div>
           
           
           </div>
     
     
     
     </div>
       


     <div class="text-center">
     <a href="printbill.php" class="btn btn-danger"  >Print</a>
     
     </div>



    </div>



    










</div>
<script type="text/javascript">

$("#item").select2();

</script>

<script type="text/javascript">
function calc(){
    var qty=$("#itemqty").val();
    var uprice=$("#itemrate").val();
    var discount=$("#itemdisc").val();
   var ans= (qty*uprice)-discount;
   console.log(ans);
    document.getElementById("itemtotal").value=ans;


}
</script>

<script type="text/javascript" src="js/itemshows.js"></script>
</body>
</html>