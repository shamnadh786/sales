<?php
ob_start();
include("adminnewside.php");
include("salesdb.php");
?>

<div class="container stkview">
    <div class="container-title text-center text-decoration-underline text-uppercase fw-bold">
        <h1>View Company <span class="ml-3"></h1>

    </div>
   
    <div class="row mt-5">
    
      <div class="col-md-12">
        <?php 
        $sql="select * from company ";
       

       
        if($conn->query($sql)){
           
            $result=mysqli_query($conn,$sql);
            if($result->num_rows>0){
            ?>
            <table class="table table-hover ">
                <thead class="text-center">
                    <tr>
                   
                    <th>Company Name</th>
                    <th>Contact</th>
                 
                    <th>Address</th>
                   
                    <th>Delete</th>
                    </tr>
                
                </thead>
                <tbody class="text-center">
            <?php
             while($row=mysqli_fetch_array($result)){?>
                <tr>
                <form method="post">
                <td><?=$row['com_name']?> </td>
                <td><?=$row['com_num']?><input type="hidden" name="comidd" value="<?= $row['id']?>"></td>
                
                <td><?=$row['comaddress']?></td>
               
               
               
                
               
                <td><button type="submit" name="del" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this Company')"> <span class="fas fa-trash-alt"></span></button></td>
                </form>
                </tr>
    
           <?php }?>

            </tbody>
            </table>
            

      <?php }else{
        
        echo "<div class='alert alert-danger text-center'>No Companies have been Registered</div>";
      } }?>
       
        
        
    
      </div>
    
    </div>



                <?php

         

            if(isset($_POST['del'])){

              $sql1="delete from company where id='$_POST[comidd]'";
              if($conn->query($sql1)){

                echo '<div class="alert alert-danger text-center ">Company Deleted successfully</div>';
                header("Refresh:2");
              }else{
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
