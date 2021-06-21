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
    <link rel="stylesheet" href="css/admmain.css">
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
    <main>
    <div class="side-div" id="side">
        
            <div class="logo">
                <span class="text-white fw-bolder colr">Colors</span>
                <span><i class="fas fa-arrow-left" id="arrow"></i></span>

            </div>

                    <div class="sidebar-menu">

                        <div class="item1">
                            <a class="sub-btn" href="admhome.php"><i class="fas fa-dice-d6" id="fa-users"></i>Dashboard</a>
                                


                            </div>


                            <div class="item1">
                            <a class="sub-btn" href="#"><i class="fas fa-users" id="fa-users"></i>Staff<i class="fas fa-angle-right dropdown"></i></a>
                                <div class="submenu1">
                                    <a href="addstaffs.php"><i class="fas fa-user-plus sub-item" id="fa-users"></i>New Staff</a>
                                    <a href="viewstaffs.php"><i class="fas fa-user-friends sub-item" id="fa-users"></i>Staff Corner</a>
                                
                                </div>


                            </div>
                            <div class="item1">
                            <a class="sub-btn" href="#"><i class="fas fa-building"  id="fa-users"></i>Company<i class="fas fa-angle-right dropdown"></i></a>
                                <div class="submenu1">
                                    <a href="addcompany.php"><i class="fas fa-clinic-medical sub-item" id="fa-users"></i>Add Company</a>
                                    <a href="viewcompany.php"><i class="fas fa-eye sub-item" id="fa-users"></i>View Company</a>
                                </div>

                            </div>

                            <div class="item1">
                            <a class="sub-btn" href="#"><i class="fas fa-shopping-bag" id="fa-users"></i>Sale<i class="fas fa-angle-right dropdown"></i></a>
                                <div class="submenu1">
                                    <a href="adminsaleview.php"><i class="fas fa-box-open sub-item" id="fa-users"></i>Sales view</a>
                                
                                    <a href="salesandprofit.php"><i class="fas fa-clipboard sub-item" id="fa-users"></i>Sale Reports</a>
                                    <a href="adminsalereturn.php"><i class="fas fa-dolly sub-item" id="fa-users"></i>Sale Returns</a>
                                </div>

                            </div>


                            <div class="item1">
                            <a class="sub-btn" href="#"><i class="fas fa-cart-arrow-down" id="fa-users"></i>Purchase<i class="fas fa-angle-right dropdown"></i></a>
                                <div class="submenu1">
                                    <a href="view_additem.php"><i class="fas fa-plus-circle sub-item" id="fa-users"></i>item Insert</a>
                                    <a href="purchasehist.php"><i class="fas fa-info sub-item" id="fa-users"></i>History</a>
                                </div>
                        
                        
                            </div>




                            <div class="item1">
                            <a class="sub-btn" href="#"><i class="fas fa-box" id="fa-users"></i>Stock<i class="fas fa-angle-right dropdown"></i></a>
                                <div class="submenu1">
                                    <a href="adminviewstock.php"><i class="fas fa-eye sub-item" id="fa-users"></i>Stock View</a>
                                    <a href="stockhistory.php"><i class="fas fa-file sub-item" id="fa-users"></i>History</a>
                                </div>
                        
                        
                            </div>
                           
                        
        
        
        
                    </div>
            

    </div>

<!-- sidebar media section starts here----------------------------------------------------------------------------------->

<div  id="topbar">
        
            

<div class="sidebar-menu">

<div class="item1">
    <a class="sub-btn" href="admhome.php"><i class="fas fa-dice-d6" id="fa-users"></i>Dashboard</a>
        


    </div>


    <div class="item1">
    <a class="sub-btn" href="#"><i class="fas fa-users" id="fa-users"></i>Staff<i class="fas fa-angle-right dropdown"></i></a>
        <div class="submenu1">
            <a href="addstaffs.php"><i class="fas fa-user-plus sub-item" id="fa-users"></i>New Staff</a>
            <a href="viewstaffs.php"><i class="fas fa-user-friends sub-item" id="fa-users"></i>Staff Corner</a>
        
        </div>


    </div>
    <div class="item1">
    <a class="sub-btn" href="#"><i class="fas fa-building"  id="fa-users"></i>Company<i class="fas fa-angle-right dropdown"></i></a>
        <div class="submenu1">
            <a href="addcompany.php"><i class="fas fa-clinic-medical sub-item" id="fa-users"></i>Add Company</a>
            <a href="viewcompany.php"><i class="fas fa-eye sub-item" id="fa-users"></i>View Company</a>
        </div>

    </div>

    <div class="item1">
    <a class="sub-btn" href="#"><i class="fas fa-shopping-bag" id="fa-users"></i>Sale<i class="fas fa-angle-right dropdown"></i></a>
        <div class="submenu1">
            <a href="adminsaleview.php"><i class="fas fa-box-open sub-item" id="fa-users"></i>Sales view</a>
        
            <a href="salesandprofit.php"><i class="fas fa-clipboard sub-item" id="fa-users"></i>Sale Reports</a>
            <a href="adminsalereturn.php"><i class="fas fa-dolly sub-item" id="fa-users"></i>Sale Returns</a>
        </div>

    </div>


    <div class="item1">
    <a class="sub-btn" href="#"><i class="fas fa-cart-arrow-down" id="fa-users"></i>Purchase<i class="fas fa-angle-right dropdown"></i></a>
        <div class="submenu1">
            <a href="view_additem.php"><i class="fas fa-plus-circle sub-item" id="fa-users"></i>item Insert</a>
            <a href="purchasehist.php"><i class="fas fa-info sub-item" id="fa-users"></i>History</a>
        </div>


    </div>




    <div class="item1">
    <a class="sub-btn" href="#"><i class="fas fa-box" id="fa-users"></i>Stock<i class="fas fa-angle-right dropdown"></i></a>
        <div class="submenu1">
            <a href="adminviewstock.php"><i class="fas fa-eye sub-item" id="fa-users"></i>Stock View</a>
            <a href="stockhistory.php"><i class="fas fa-file sub-item" id="fa-users"></i>History</a>
        </div>


    </div>
   




</div>
            

    </div>




















<!-- sidebar media section Ends here----------------------------------------------------------------------------------->

















    <div class="main-div">
        <div class="header">
            
                <div class="top-div" id="top1">
                
                    <i class="fas fa-bars" id="slide"></i>
                    <div id="toggle">   <i class="fas fa-bars" ></i></div>
                </div>
                <div class="top-div2">
                    <div class="img-logo" id="imgg">
                        <img src="images/admin.jpg" class="img-circle" alt="" height="30px" width="30px"> 
                    
                    </div>

                
                    <div class="logout-div text-center">
                    <a href="logout.php">Logout</a>
                    </div>
                </div>





        </div>
        <script type="text/javascript">

$(document).ready(function(){

    
  

    $('.sub-btn').click(function(){

        $(this).next('.submenu1').slideToggle();
        $(this).find('.dropdown').toggleClass('rotate');
    });

    

        
    $('#arrow').click(function(){

        document.getElementById("side").style.marginLeft="-230px";
        document.getElementById("top1").style.width="1450px";
    });
    $('#slide').click(function(){

        document.getElementById("side").style.marginLeft="0";
        document.getElementById("top1").style.width="1200px";
        });
});


const toggle=document.getElementById("toggle");
const topbar=document.getElementById("topbar");
toggle.onclick=function(){

    toggle.classList.toggle('active');

    topbar.classList.toggle('active');
}
</script>