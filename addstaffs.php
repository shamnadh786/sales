<?php
ob_start();
include("adminnewside.php");
include("salesdb.php");
?>
<div class="container">
<div class="container-title text-center fw-bolder ">
<h1> Add New Staff </h1>
</div>
<div class="container">
 
   <form action="" method="post">
      <div class="row mt-3">
            <div class="col-md-12">
                <div class="form-group">
                <label  class="form-label ">Name</label>
                <input type="text" name="staffname" id="staffname" placeholder="Enter Staff Name"  class="form-control  mt-2" required>
                   
                </div>
            </div>
            <div class="col-md-6 mt-3">
                <div class="form-group">
                <label  class="form-label"> Contact No</label>
                <input type="text" name="staffcont" placeholder="Enter Staff Contact No" class="form-control mt-2" required>
                </div>
            </div>
            <div class="col-md-6 mt-3">
                <div class="form-group">
                <label>Email</label>
                <input type="text" name="staffmail" placeholder="Enter Email Address" class="form-control mt-2" required>
                </div>
            </div>
            <div class="col-md-6 mt-3">
                <div class="form-group">
                <label>Address</label>
                <input type="text" name="staffaddr" placeholder="Enter Address" class="form-control mt-2" required>
                </div>
            </div>
            <div class="col-md-6 mt-3">
                <div class="form-group">
                <label>Password</label>
                <input type="text" name="pass" placeholder="Enter Password" class="form-control mt-2" required>
                </div>
            </div>
       
   


     </div>

       <div class="btndiv mt-4 text-center">
       <button type="submit" class="btn btn-danger" name="addsub" onclick="return confirm('Are you sure to proceed?')">Add </button>
       </div>

<?php
if(isset($_POST['addsub'])){

    $sql1="insert into login values('','$_POST[staffname]','$_POST[pass]',1)";
    if($conn->query($sql1)){

        $sid=mysqli_insert_id($conn);
        $sql="insert into staff_table values('','$_POST[staffname]','$_POST[staffcont]','$_POST[staffmail]','$_POST[staffaddr]','$_POST[pass]','$sid')";
        if($conn->query($sql)){
            echo'<div class="alert alert-success">Staff Registered Successfully</div>';
            header("Refresh:2");
        }
    }else{
        echo'<div class="alert alert-success">Unable to Register</div>';
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
