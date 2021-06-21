<?php
ob_start();
include("adminnewside.php");
include("salesdb.php");
?>

<div class="container stkview">
    <div class="container-title text-center text-decoration-underline text-uppercase fw-bold">
        <h1>View Staffs <span class="ml-3"></h1>

    </div>
    
    <div class="row mt-5">
    <form method="post">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <?php 
        $sql="select * from staff_table ";
        if($conn->query($sql)){

            $result=mysqli_query($conn,$sql);
            if($result->num_rows>0){?>
            <table class="table table-hover  table-striped ">
                <thead class="text-center">
                    <tr>
                    <th>Choose</th>
                    <th> Name</th>
                    <th>Contact</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Password</th>
                    <th>Staff Id</th>
                    <th>Edit Staff</th>
                    <th>Delete Staff</th>
                    </tr>
                
                </thead>
                <tbody class="text-center">
            <?php
             while($row=mysqli_fetch_array($result)){?>
                <tr>
               
                <td><input type="checkbox" class="form-check-input" name="stfid[]" value="<?=$row['staff_id']?>"></td>
              
               <form method="post">
             
                <td><?=$row['name']?> </td>
                <td><?=$row['contact']?><input type="hidden" name="staffidd" value="<?= $row['staff_id']?>"></td>
                <td><?=$row['email']?></td>
                <td><?=$row['address']?></td>
                <td><?=$row['password']?></td>
                <td><?=$row['staff_id']?></td>
               
                <td><button type="button" name="edit"  data-toggle="modal" data-target="#exampleModal" class="btn btn-success edit_data" id="<?= $row['staff_id']?>"> <i class="fas fa-user-edit"></i></button></td>
                
               
                <td><button type="submit" name="del" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this Staff')"> <span class="fas fa-trash-alt"></span></button></td>
                
               
                </form>
                </tr>
    
           <?php }?>

            </tbody>
            </table>
            
            <button type="submit" class="btn btn-sm btn-danger" name="deleteall">Delete All</button>

      <?php }else{
        
        echo"<div class='alert alert-danger'>Nothing to Display</div>";
      }
    }?>
       
        </form>
        
    
      </div>
    
    </div>



        <div class="modal fade" id="exampleModal">
         <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModal">Edit Staff Details</h5>
                  <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                        <div class="modal-body">

                            <form  method="post">
                                    <div class="row" id="showedit">
                                        
                                        <div class="col-md-12">
                                            <label>Staff Name</label>
                                            <input type="text" class="form-control" name="staffname" id="staffname" >
                                            <input type="hidden" class="form-control" name="staffidd" id="staffidd" >
                                        </div>
                                        <div class="col-md-12">
                                            <label>Contact No</label>
                                            <input type="text" class="form-control" name="staffno" id="staffno" >
                                        </div>
                                        <div class="col-md-12">
                                            <label>Email</label>
                                            <input type="text" class="form-control" name="staffemail" id="staffemail">
                                        </div>
                                        <div class="col-md-12">
                                            <label>Address</label>
                                            <input type="text" class="form-control" name="staffaddress" id="staffaddress" >
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

              $sql="update staff_table set name='$_POST[staffname]',contact='$_POST[staffno]',email='$_POST[staffemail]',address='$_POST[staffaddress]' where staff_id='$_POST[staffidd]'";
              if($conn->query($sql)){
                echo '<div class="alert alert-success text-center">Staff Details Updated Successfully</div>';
                header("Refresh:2"); 

              }else
              {
                echo'<div class="alert alert-danger text-center">Staff Details Not Updated </div>';
                header("Refresh:2"); 
              }



            }

            if(isset($_POST['del'])){

              $sql1="delete from staff_table where staff_id='$_POST[staffidd]'";
              if($conn->query($sql1)){

                echo '<div class="alert alert-danger text-center ">Staff Deleted successfully</div>';
                header("Refresh:2");
              }else{
                echo '<div class="alert alert-warning text-center ">Deletion Failed</div>';
                header("Refresh:2");

              }
            }

           if(isset($_POST['deleteall'])){

            
             foreach ($_POST['stfid'] as $stf){
                $sql2="delete from staff_table where staff_id='$stf'";
                if($conn->query($sql2)){
                  $sql3="delete from login where id='$stf'";
                  if($conn->query($sql3)){
                   
        
                  }
                  
           }}
         
           if($conn->query($sql3)){
                   
            echo '<div class="alert alert-danger text-center ">Staff Deleted successfully</div>';
            header("Refresh:2");
          }
          

         
          else{
            echo '<div class="alert alert-warning text-center ">Deletion Failed</div>';
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

    var staffid=$(this).attr("id");
    console.log(staffid);
    $.ajax({

        method:"POST",
        url:"staffedit.php",
        dataType:"json",
        data:{
          staffid:staffid,
        
        },

        success:function(data){
          $("#staffidd").val(data.staff_id);
          $("#staffname").val(data.name);
          $("#staffno").val(data.contact);
          $("#staffemail").val(data.email);
          $("#staffaddress").val(data.address);
         
         
    

    }





  });

 });
});

 
  
  

   




  




</script>

</body>
</html>
