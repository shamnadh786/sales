<?php
include("salesdb.php");
session_start();

if(isset( $_SESSION['staff_id'])){
    $sql="select * from staff_table where staff_id=' $_SESSION[staff_id]'";
    $result=mysqli_query($conn,$sql);
    if($row=mysqli_fetch_array($result)){
        
        $name=$row['name'];
        $contact=$row['contact'];
        $email=$row['email'];
        $address=$row['address'];
        $password=$row['password'];
        
        ?>
        <div class="row mt-4 fm">
        <div class="col-md-12">
            <label class="form-label">Name</label>
            <input class="form-control" type="text" name="stname" id="stname" value="<?=$name?>" disabled>
        
        </div>
    </div>

    <div class="row mt-4 fm">
        <div class="col-md-12">
            <label class="form-label">Contact No</label>
            <input class="form-control" type="text" name="stno" id="stno" value="<?=$contact?>">
        
        </div>
    </div>

    <div class="row mt-4 fm">
        <div class="col-md-12">
            <label class="form-label">Email</label>
            <input class="form-control" type="text" name="stmail" id="stmail" value="<?=$email?>" >
        
        </div>
      

    </div>

    <div class="row mt-4 fm">
            <div class="col-md-12">
                <label class="form-label">Password</label>
                <input class="form-control" type="text" name="stpass" id="stpass" value="<?=$password?>" >
            
            </div>
          
    
        </div>

    <div class="row mt-4 fm">
        <div class="col-md-12">
            <label class="form-label">Address</label>
            <input class="form-control" type="text" name="staddr" id="staddr" value="<?=$address?>" >
        
        </div>
      

    </div>
    
    <div class="row mt-4 fm">
        <div class="col-md-12">
           
            <button type="submit" class="btn btn-success" name="update" id="update" >Update </button>
        
        </div>
      

    </div>

   <?php }
}?>
