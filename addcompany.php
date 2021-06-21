<?php
ob_start();
include("adminnewside.php");
include("salesdb.php");
?>
<div class="container">
<div class="container-title text-center fw-bolder ">
<h1> Add Company </h1>
</div>
<div class="container">
 
   <form action="" method="post">
      <div class="row mt-3">
            <div class="col-md-12">
                <div class="form-group">
                <label for="comname" class="form-label ">Company Name:</label>
                <input type="text" name="comname" id="comname" placeholder="Enter Company Name"  class="form-control  mt-2" required>
                   
                </div>
            </div>
            <div class="col-md-6 mt-3">
                <div class="form-group">
                <label>Company Address</label>
                <input type="text" name="comaddr" placeholder="Enter Company Address" class="form-control mt-2" required>
                </div>
            </div>
            <div class="col-md-6 mt-3">
                <div class="form-group">
                <label>Company Contact</label>
                <input type="text" name="comcontact" placeholder="Enter Company Contact Number" class="form-control mt-2" required>
                </div>
            </div>
       
   


     </div>

       <div class="btndiv mt-4 text-center">
       <button type="submit" class="btn btn-danger" name="addsub" onclick="return confirm('Are you sure to proceed? You cannot modify company Details after Submit!!')">Add </button>
       </div>

<?php
if(isset($_POST['addsub'])){
    $sql="insert into company values('','$_POST[comname]','$_POST[comaddr]','$_POST[comcontact]')";
    if($conn->query($sql)){
        echo'<div class="alert alert-success">Added Successfully</div>';
        header("Refresh:2");
    }
}


?>
</form>

</div>

</div>
</div>
</main>
</body>
</html>
