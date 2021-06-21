<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    
    <link rel="stylesheet" href="css2/bootstap.min.css">
    <link rel="stylesheet" href="css2/all.min.css">
    <link rel="stylesheet" href="css2/font-awesome.min.css">
    <link rel="stylesheet" href="css2/main.css">
    <link rel="stylesheet" href="css/admsidestyle.css">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Yanone+Kaffeesatz:200,300,400,700" rel="stylesheet">
    <script src="js2/all.min.js"></script>
    <script src="js2/bootstrap.min.js"></script>
    <script src="js2/jquery.min.js"></script>
    <script src="js2/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
</head>
<body>

<input type="checkbox" id="check">


 <div class="container-box">
     <div class="container-head">
         <h5  >Hello Admin </h5><span id="bars"> <label for="check"> <i class="fas fa-bars"></i></label></span>
     </div>
     
 
     <div class="sub-title img-circle">
    <img src="images/adm.png"  height="100px" width="100px">
     </div>

     
    <div class="sidebar-menu">
    
       <div class="item1">
       <a class="sub-btn" href="#"><i class="fas fa-users"></i>Staff<i class="fas fa-angle-right dropdown"></i></a>
            <div class="submenu1">
               <a href="addstaffs.php"><i class="fas fa-users sub-item"></i>New Staff</a>
               <a href="viewstaffs.php"><i class="fas fa-users sub-item"></i>Staff Corner</a>
              
            </div>


       </div>
       <div class="item1">
       <a class="sub-btn" href="#"><i class="fas fa-users"></i>Company<i class="fas fa-angle-right dropdown"></i></a>
            <div class="submenu1">
               <a href="addcompany.php"><i class="fas fa-users sub-item"></i>Add Company</a>
               <a href="viewcompany.php"><i class="fas fa-users sub-item"></i>View Company</a>
            </div>

       </div>

       <div class="item1">
       <a class="sub-btn" href="#"><i class="fas fa-users"></i>Sale<i class="fas fa-angle-right dropdown"></i></a>
             <div class="submenu1">
               <a href="adminsaleview.php"><i class="fas fa-users sub-item"></i>Sales view</a>
              
               <a href="salesandprofit.php"><i class="fas fa-users sub-item"></i>Sale Reports</a>
               <a href="adminsalereturn.php"><i class="fas fa-users sub-item"></i>Sale Returns</a>
            </div>

       </div>


       <div class="item1">
       <a class="sub-btn" href="#"><i class="fas fa-users"></i>Purchase<i class="fas fa-angle-right dropdown"></i></a>
            <div class="submenu1">
               <a href="view_additem.php"><i class="fas fa-users sub-item"></i>item Insert</a>
               <a href="purchasehist.php"><i class="fas fa-users sub-item"></i>History</a>
            </div>
    
    
        </div>




       <div class="item1">
       <a class="sub-btn" href="#"><i class="fas fa-users"></i>Stock<i class="fas fa-angle-right dropdown"></i></a>
            <div class="submenu1">
               <a href="adminviewstock.php"><i class="fas fa-users sub-item"></i>Stock View</a>
               <a href="purchasehist.php"><i class="fas fa-users sub-item"></i>History</a>
            </div>
    
    
        </div>
       <div class="item1" id="btndiv">
       <a class="btn logout-btn" href="logout.php"><i class="fas fa-users"></i>Logout</a>
       </div>
    
    
    
    
    </div>













    <script type="text/javascript">

$(document).ready(function(){

    $('.sub-btn').click(function(){

        $(this).next('.submenu1').slideToggle();
        $(this).find('.dropdown').toggleClass('rotate');
    });
});


</script>


 </div>







    
