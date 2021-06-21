<?php
ob_start();
session_start();
include("salesdb.php");

?>

    

<?php


if(isset($_SESSION["staff_id"])){?>
 <div class="container">
    <div class="row">
     <div class="col-md-12">
     
    
    
    
    
  
 <?php //if(isset($_POST['name'])&&isset($_POST['number'])&&isset($_POST['qty'])&&isset($_POST['uprice'])&&isset($_POST['tamount'])){
       $sql="insert into entry1 values('','$_POST[number]','$_POST[name]','$_POST[qty]','$_POST[uprice]','$_POST[tamount]','$_POST[cname]','$_POST[cdate]','wait')";
       if($conn->query($sql)){
           $sqll="select * from entry1";
           $result=mysqli_query($conn,$sqll);
         ?>
       
        
      
       
      <table class="table table-bordered">
        <thead>
            <tr>
            <th>Item No </th>
            <th>Item Name </th>
            <th>Qty </th>
            <th>Unit Price </th>
          
            <th>Total Amount </th>

            
            </tr>
        </thead>
         <tbody>

       <?php 
       while($roww=mysqli_fetch_array($result)){
            /* $num[]=$roww['number'];
            $name[]=$roww['name'];
            $qty[]=$roww['qty'];
            $urice[]=$roww['uprice'];
            $tamount[]=$roww['tamount'];*/
     
     
    ?>
       
      <?php echo" <tr> 

                         <td><input class='form-control' type='text' name='num[]'  value='$roww[number]'></td>

                         <td><input  class='form-control' type='text' name='name1[]'  value='$roww[name]'></td>
                         <td><input class='form-control' type='text' name='qty1[]'   value='$roww[qty]'></td>
                         <td><input class='form-control' type='text' name='uprice1[]'  value='$roww[uprice]'></td>
                         <td><input class='form-control' type='text' name='tamount1[]'   value='$roww[tamount]'></td>

                         <input class='form-control' type='hidden' name='cname1[]'   value='$roww[company]'>
                         <input class='form-control' type='hidden' name='cdate1[]'   value='$roww[dateadded]'>

                         </tr>
                       ";
                        
                      
                       
                     
       
    }
  
    
   
   
    ?>
 


</tbody>
</table>

</div>
 </div>
</div>
<div class="text-center">
<button type="submit" name="sub_table" class="btn btn-success">Add Entries </button>

</div>

</form> 


           
<?php 
  
}
    }
//}
   
            ?>


