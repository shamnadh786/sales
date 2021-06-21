<?php
session_start();
include("salesdb.php");
include("admsidebar.php");


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="css/adminhome.css">
</head>
<body>
<input type="checkbox" id="check">
    <nav class="navbar navbar-inverse">
       <label for="check" class="glyphicon glyphicon-list" ></label>
        <div class="container-fluid">
       
            <div class="navbar-header">
            
            
            <h3 class="navbar-brand">Welcome <span> <?php
            echo $_SESSION['name'];?></span></h3>
           </div>
        </div>
          
           <div class="logout">
              <ul class="nav navbar-nav navbar-right">
              
                <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
              </ul>
          
            </div>
      </nav>

     <div class="main-section">
      <div class="container-fluid adm">
        <div class="img-container">
          <img src="./images/adminicon.png"  class="img-circle" height="100px" width="100px">
        </div>
        <div class="sidemenu">
          <ul>
            <li><a class="active" href="#"><span class="glyphicon glyphicon-user"></span>Add New Staff</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-plus-sign"></span>Add New Item</a></li>
            <li><a href="view_additem.php"><span class="glyphicon glyphicon-shopping-cart"></span>Purchase View</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-eye-open"></span>Stock view</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-list-alt"></span>History</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-wrench"></span>Change Password</a></li>
          </ul>
        </div>
      
      </div>

      <div class="card-deck">
        <div class="card">
          <div class="card-body">
            <img src="./images/staff1.jpg" class="img-circle" alt="" height="150px" width="150px">
          </div>
          <div class="card-footer">
           <button class="btn-success" data-toggle="modal" data-target="#exampleModal">Add Staffs</button>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <img src="./images/paint1.jpg" alt="" class="img-circle" height="150px" width="150px">
          </div>
          <div class="card-footer">
          <form method="post">
          <button class="btn-info" type="submit" name="viewstaff">View Staffs</button>
           </form>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <img src="./images/psales.png" alt="" class="img-circle" height="150px" width="150px">
          </div>
          <div class="card-footer">
          <button class="btn-danger">Delete Staffs</button>
          </div>
        </div>
      </div>
</div>




<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
       
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form class="form-group" method="post">
                      <div class="form-group">
                          <label for="fname">Name</label>
                          <input class="form-control" type="text" name="fname" placeholder="Enter your Name">
                      </div>
                     
                      <div class="form-group">
                          <label for="phn">Contact number</label>
                          <input class="form-control" type="text" name="phn" placeholder="Enter your Number">
                      </div>
                      <div class="form-group">
                          <label for="mail">Email</label>
                          <input  class="form-control" type="email" name="mail" placeholder="Enter your Email">
                      </div>
                      <div class="form-group">
                          <label for="address">Address</label>
                          <input  class="form-control" type="address" name="address" placeholder="Enter your Address">
                      </div>
                      <div class="form-group">
                          <label for="address">Set Password</label>
                          <input  class="form-control" type="password" name="pass" placeholder="Enter your Password">
                      </div>
            <button type="submit" name="sub" class="btn btn-primary">Submit</button>
            <div><?php if(isset($msg)){    echo $msg; } ?></div>
          </form>
      </div>
      
    </div>
  </div>
</div>
      
      <?php
      if(isset($_POST['sub'])){
        $sql="insert into login values('','$_POST[fname]','$_POST[pass]',1)";
        if($conn->query($sql)){
          $sid=mysqli_insert_id($conn);
          $sqll="insert into staff_table values('','$_POST[fname]','$_POST[phn]','$_POST[mail]','$_POST[address]','$_POST[pass]','$sid')";
          if($conn->query($sqll)){
            $msg='<div class="alert alert-success">Inserted Successfully</div>';
          }else{
            $msg= '<div class="alert alert-danger">Unable to insert</div>';
          }
        }
      }

      if(isset($_POST['viewstaff'])){ 
        $sql="select * from staff_table";
        $result=mysqli_query($conn,$sql);
        ?>
        <div class="container">
        <div class="table">
        <table border="1px">
        <thead>
        <tr>
        <th>Name</th>
        <th>Contact No</th>
        <th>Email</th>
        <th>Address</th>
        <th>Password</th>
        <th>Staff Id</th>
        </tr>
        </thead>
        <tbody>
        <?php
        while($row=mysqli_fetch_array($result)){
        ?>
        <tr>
        <td><?= $row['name']?></td>
        <td><?= $row['contact']?></td>
        <td><?= $row['email']?></td>
        <td><?= $row['address']?></td>
        <td><?= $row['password']?></td>
        <td><?= $row['staff_id']?></td>
        <td></td>
        </tr>
        <?php  }?>



        </tbody>
        </table>
        
        </div>
        
        </div>





        

        <?php
        
      }
?>






       
</body>
</html>