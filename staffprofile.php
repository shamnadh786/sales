<?php
ob_start();
session_start();
include("salesdb.php");
include("staffnav.php");
?>

<?php
if(isset($_SESSION['staff_id'])){
    $staffid=$_SESSION['staff_id'];

    $sql="select * from staff_table where staff_id='$_SESSION[staff_id]'";
    $result=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_array($result)){

        $name=$row['name'];
        $contact=$row['contact'];
        $email=$row['email'];
        $address=$row['address'];
        $password=$row['password'];


    }



}
?>



<div class="container">
    <div class="container-title">
        <h2>Profile</h2>
    
    </div>
    <form method="post">
    <div class="container" id="output">
       
        <div class="row mt-4 fm">
            <div class="col-md-12">
                <label class="form-label">Name</label>
                <input class="form-control" type="text" name="stname" id="stname" value="<?=$name?>" disabled>
            
            </div>
        </div>

        <div class="row mt-4 fm">
            <div class="col-md-12">
                <label class="form-label">Contact No</label>
                <input class="form-control" type="text" name="stno" id="stno" value="<?=$contact?>" disabled>
            
            </div>
        </div>

        <div class="row mt-4 fm">
            <div class="col-md-12">
                <label class="form-label">Email</label>
                <input class="form-control" type="text" name="stmail" id="stmail" value="<?=$email?>" disabled>
            
            </div>
          
    
        </div>
        <div class="row mt-4 fm">
            <div class="col-md-12">
                <label class="form-label">Password</label>
                <input class="form-control" type="text" name="stpass" id="stpass" value="<?=$password?>" disabled>
            
            </div>
          
    
        </div>

        <div class="row mt-4 fm">
            <div class="col-md-12">
                <label class="form-label">Address</label>
                <input class="form-control" type="text" name="staddr" id="staddr" value="<?=$address?>" disabled>
            
            </div>
          
    
        </div>
        
        <div class="row mt-4 fm">
            <div class="col-md-12">
               
                <button type="button" class="btn btn-primary" id="edit" onclick="editprofile()">Edit </button>
            
            </div>
          
    
        </div>

        </form>
    
    </div>



<?php

if(isset($_POST['update'])){
    $sql1="update staff_table set contact='$_POST[stno]',email='$_POST[stmail]',address='$_POST[staddr]',password='$_POST[stpass]' where staff_id='$_SESSION[staff_id]'";
    if($conn->query($sql1)){
        $sql2="update login set password='$_POST[stpass]' where id='$_SESSION[staff_id]'";
        if($conn->query($sql2)){
            echo '<div class="alert alert-success bg-dark">Staff Details Successfully Updated</div>';
            header("Refresh:1");

        }
        
    else{
        echo '<div class="alert alert-success">Failed Update Operation.Try Again</div>';
        header("Refresh:1");
    }
}
}

?>

</div>
<script type="text/javascript">


function editprofile(){

var stname=$("#stname").val();
var stno=$("#stno").val();
var stmail=$("#stmail").val();
var staddr=$("#staddr").val();
var stpass=$("#stpass").val();

$.ajax({
    method:"POST",
    url:"staffupdt.php",
    data:{
        stname:stname,
        stno:stno,
        stmail:stmail,
        staddr:staddr,
        stpass:stpass,
    },

    success:function(data){

        document.getElementById("output").innerHTML=data;

    },
});




}


</script>

</body>
</html>