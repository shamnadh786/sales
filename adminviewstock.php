<?php
ob_start();
include("adminnewside.php");
include("salesdb.php");
?>

<div class="container stkview">
    <div class="container-title text-center text-decoration-underline text-uppercase fw-bold">
        <h1>View Stock <span class="ml-3"></h1>

    </div>
   
    <div class="row mt-3">
    
      <div class="col-md-12">
        <?php 
        $sql="select * from stock ORDER BY st_item_no ASC";
        if($conn->query($sql)){

            $result=mysqli_query($conn,$sql);
            
            if($result->num_rows>0){
            ?>
            <table class="table table-hover ">
                <thead>
                    <tr>
                    <th>Item No</th>
                    <th>Item Name</th>
                    <th>Quantity In Stock</th>
                    <th>Company Name</th>
                    <th>Purchase Rate</th>
                    <th>Selling Rate</th>
                    <th>Added date</th>
                    <th>Edit Item</th>
                    <th>Delete Item</th>
                    </tr>
                
                </thead>
                <tbody class="text-center">
            <?php
             while($row=mysqli_fetch_array($result)){?>
                <tr>
                <form method="post">
                <td><?=$row['st_item_no']?> </td>
                <td><?=$row['st_item_name']?><input type="hidden" name="itemm_name" value="<?= $row['st_item_name']?>"></td>
                <td><?=$row['st_qty']?></td>
                <td><?=$row['com_namee']?></td>
                <td><?=$row['purchase_rate']?></td>
                <td><?=$row['sell_rate']?></td>
                <td><?=$row['added_date']?></td>
                <td><button type="button" name="edit"  data-toggle="modal" data-target="#exampleModal" class="btn btn-success edit_data" id="<?= $row['stock_id']?>"> <i class="fas fa-user-edit"></i></button></td>
                
               
                <td><button type="submit" name="del" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item')"> <span class="fas fa-trash-alt"></span></button></td>
                </form>
                </tr>
    
           <?php }?>

            </tbody>
            </table>
            

      <?php }else{

       echo "<div class='alert alert-danger text-center'>No Items have been Inserted</div>";
      }}?>
       
        
        
    
      </div>
    
    </div>



        <div class="modal fade" id="exampleModal">
         <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModal">Edit Stock Item</h5>
                  <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                        <div class="modal-body">

                            <form  method="post">
                                    <div class="row" id="showedit">
                                        
                                        <div class="col-md-12">
                                            <label>Item No</label>
                                            <input type="text" class="form-control" name="itmno" id="itmno" >
                                            <input type="hidden" class="form-control" name="itmidd" id="itmidd" >
                                        </div>
                                        <div class="col-md-12">
                                            <label>Item Name</label>
                                            <input type="text" class="form-control" name="itmname" id="itmname" >
                                        </div>
                                        <div class="col-md-12">
                                            <label>Item Stock Qty</label>
                                            <input type="text" class="form-control" name="itmqty" id="itmqty">
                                        </div>
                                        <div class="col-md-12">
                                            <label>Selling rate</label>
                                            <input type="text" class="form-control" name="itmsellrate" id="itmsellrate" >
                                        </div>






                                    </div>
                        


                        </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="editchange" class="btn btn-primary">Save changes</button>
                      </div>
                     </form>

                  </div>
                </div>
              </div>























                <?php

            if(isset($_POST['editchange'])){

              $sql="update stock set st_item_no='$_POST[itmno]',st_item_name='$_POST[itmname]',st_qty='$_POST[itmqty]',sell_rate='$_POST[itmsellrate]' where stock_id='$_POST[itmidd]'";
              if($conn->query($sql)){
                echo '<div class="alert alert-success text-center">Item Updated successfully</div>';
                header("Refresh:2"); 

              }else
              {
                echo'<div class="alert alert-danger text-center">Item Details Not Updated </div>';
                header("Refresh:2"); 
              }



            }

            if(isset($_POST['del'])){

              $sqll="select st_qty from stock where st_item_name='$_POST[itemm_name]'";
              $ress=mysqli_query($conn,$sqll);
              $roww=mysqli_fetch_array($ress);
              $qtyy=$roww['st_qty'];
            
              if($qtyy==0){

                $sql1="delete from stock where st_item_name='$_POST[itemm_name]'";
                if($conn->query($sql1)){
  
                  echo '<div class="alert alert-danger text-center ">Item Deleted successfully</div>';
                  header("Refresh:2");
                }else{
                  echo '<div class="alert alert-warning text-center ">Deletion Failed</div>';
                  header("Refresh:2");
  
                }


              }else{

                echo '<div class="alert alert-danger text-center ">Unable to Delete..!!Stock Quantity Must be Zero for Delete an Item</div>';
                header("Refresh:2");
  
              }

             
            }

           








            ?>

</div>
          </div>
          </main>





























<script type="text/javascript">


  
 $(document).ready(function(){

  $(document).on('click','.edit_data',function(){

    var stockid=$(this).attr("id");
    console.log(stockid);
    $.ajax({

        method:"POST",
        url:"admineditstk.php",
        dataType:"json",
        data:{
          stockid:stockid,
        
        },

        success:function(data){
          $("#itmno").val(data.st_item_no);
          $("#itmname").val(data.st_item_name);
          $("#itmqty").val(data.st_qty);
          $("#itmsellrate").val(data.sell_rate);
          $("#itmidd").val(data.stock_id);
         
    

    }





  });

 });
});

 
  
  

   




  




</script>
</body>
</html>
