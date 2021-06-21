<?php
session_start();
include("staffnav.php");
include("salesdb.php");

if(isset($_SESSION['staff_id'])&&isset($_SESSION['billno'])){
  
    $staffid=$_SESSION['staff_id'];
    $date=date("Y/m/d");

    $sql="select * from salesbill where billno='$_SESSION[billno]'  and billdate='$date' ";
   
    $result=mysqli_query($conn,$sql);
   
    while($row=mysqli_fetch_array($result)){
        $billno=$_SESSION['billno'];
        $billdate=$row['billdate'];
        $custname=$row['custname'];
        $custno=$row['custno'];
    }



}?>

<div class="container">
    <div class="title-section">
    <h1> Customer Bill</h1>
    </div>
    <div class="row mt-3">
      <div class="col-md-8 col-xs-6">
       Colors Paints Trading Ltd
      </div>
      <div class="col-md-4 col-xs-6">
       Contact No:+919555443322
       
       
      </div>
    
    </div>
    <div class="row mt-3">
      <div class="col-md-8 col-xs-6">
      Aurora Complex, Near Iron Bridge<br>
       Kollam
      </div>
      <div class="col-md-4 col-xs-6">
      Email:colors@paintsltd.com
      </div>
    
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <label>Staff ID</label>
                <input type="text" class="form-control" name="sid" id="sid"value="<?= $staffid?>" disabled>
            </div>
            <div class="col-md-4">
                <label>Bill No</label>
                <input type="text" name="billno" class="form-control" value="<?= $billno?>" id="billno" disabled>
            </div>
            <div class="col-md-4">
                <label>Bill Date</label>
                <input type="text" name="billdate" class="form-control"value="<?= $billdate ?>" id="billdate" disabled>
            </div>

        </div>

        <div class="row">
            <div class="col-md-6">
                <label>Customer Name</label>
                <input type="text" name="custname"  id="custname"class="form-control" value="<?=$custname?>" >
            </div>
            <div class="col-md-6">
                <label>Customer No</label>
                <input type="text" name="custno" id="custno" class="form-control" value="<?= $custno?>" >
            </div>
            
            
        </div>

    <div class="container">
        <div class="row">
        <div class="col-md-12">
        <table  class=" table table-bordered">
            <thead>
            <tr>
                <td>Item No</td>
                <td>Item Name</td>
                <td>Qty</td>
                <td>Unit price</td>
                <td>Discount</td>
                <td>Total</td>
            </tr>
            </thead>
            <tbody >
            <?php 
            $sqll="select * from salesbill where billno='$billno' ";
            $resultt=mysqli_query($conn,$sqll);
            while($roww=mysqli_fetch_array($resultt)){

                echo "<tr>
                <td>$roww[itemno]</td>
                <td>$roww[itemname]</td>
                <td>$roww[itemqty]</td>
                <td>$roww[item_unit_rate]</td>
                <td>$roww[item_discount]</td>
                <td>$roww[item_total]</td>
                
                </tr>";
            }
            
            
            
            ?>

            <tr >
                

            </tr>
            
            </tbody>
            
        </table>
      </div>
            <?php 
            $sql2="select SUM(item_total) from salesbill where custname='$custname' and custno='$custno' and billdate='$billdate'";
            $result2=mysqli_query($conn,$sql2);
            if($row2=mysqli_fetch_array($result2)){
                $grandtotal=$row2['SUM(item_total)'];
            }
            
            ?>

            <div class="container">
             <div class="row">
             
                <div class="col-sm-4">
                  <p><b>NET PAYABLE AMOUNT</b></p>
                </div>
                <div class="col-sm-4">
                  <input type="hidden" class="form-control">
                </div>
                <div class="col-sm-4">
                  <input type="text" class="form-control" value="<?= $grandtotal?>">
                </div>


            </div>

      
      </div>
      <div class="text-center">
      <button class="btn btn-primary" onclick="window.print()" id="print-btn">Print</button>
    
     </div>
     </div>

