<?php
ob_start();
session_start();
include("salesdb.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="css/login.css">
</head>
<body>

<div class="main">
<nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Colors</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
              <ul class="nav navbar-nav">
                <li class="active"><a href="test.html">Home</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Gallery</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
              </ul>
            </div>
        </div>
</nav>


         <div class="container text-center loginn">
              <div class="container-head">
                  <h1>login</h1>
              </div>
             
              <div class="form-group">
                    <form method="post">
                      <div class="form-group">
                          <label for="name">Name</label>
                          <input class="form-control" type="text" name="name" placeholder="Enter your Name">
                      </div>
                      <div class="form-group">
                          <label for="pass">Password</label>
                          <input  class="form-control" type="password" name="pass" placeholder="Enter your Password">
                      </div>
                    
                      <button class="btn btn-danger" type="submit" name="log-sub" id="sub" onclick="check()">Submit </button>
                      <a class="mr-3" href="changepassword.php">  <small >Forgot Password?</small></a>
             
                    </form>
              </div>
          </div>
     </div>

<?php

if(isset($_POST["log-sub"])){

    $sql="select * from login where name='$_POST[name]' and password='$_POST[pass]'";
    $result=mysqli_query($conn,$sql);
    if($row=mysqli_fetch_array($result)){

        if($row['utype']==0){

            $_SESSION['name']=$row['name'];
            
            header("location:admhome.php");
        }
        if($row['utype']==1){

          $_SESSION['name']=$row['name'];
         
          $_SESSION['staff_id']=$row['id'];
          
          header("location:staffhome.php");
      }

    }else{
      echo '<div class="alert alert-danger">Wrong Username/Password </div>';
    }


}

?>








</body>
</html>