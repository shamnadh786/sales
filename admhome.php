<?php
include("salesdb.php");
include("adminnewside.php");
?>


  
    

               <div class="container mt-5 container1">
                   <div class="row">
                       <div class="col-md-12 ">
                           <h5>Dashboard</h5>
                       </div>
                   </div>
                   <div class="row">
                       <div class="col-md-4">
                           <div class="card mt-3 text-white bg-success" id="card1">
                               
                               <div class="card-body text-center">
                                           <span class="p2"> Staffs<span><br>
                                   <?php
                                   $sql="select count(*) from staff_table";
                                   $result=mysqli_query($conn,$sql);
                                   if($row=mysqli_fetch_array($result)){
                                       echo $row['count(*)'];
                                   }
                                   
                                   ?>
                               </div>
                               <div class="card-footer text-center">
                              <i class="fas fa-users i1"></i>
                                  
                               </div>
                           </div>
                       </div>

                       <div class="col-md-4">
                           <div class="card mt-3 text-white bg-warning" id="card1">
                              
                               <div class="card-body text-center ">
                               <span class="p2"> Products<span><br>
                               <?php
                                   $sql="select count(*) from stock";
                                   $result=mysqli_query($conn,$sql);
                                   if($row=mysqli_fetch_array($result)){
                                       echo $row['count(*)'];
                                   }
                                   
                                   ?>
                               </div>
                               <div class="card-footer text-center">
                               <i class="fas fa-cubes i2"></i>
                               </div>
                               
                           </div>
                       </div>

                       <div class="col-md-4">
                           <div class="card mt-3  text-white bg-danger" id="card1">
                               
                               <div class="card-body text-center ">
                               <span class="p2"> Sales<span><br>
                               <?php
                                   $sql="select count(*) from sales_entry";
                                   $result=mysqli_query($conn,$sql);
                                   if($row=mysqli_fetch_array($result)){
                                       echo $row['count(*)'];
                                   }
                                   
                                   ?>
                            

                               </div>
                               <div class="card-footer text-center">
                               <i class="fas fa-shipping-fast i2"></i>
                               </div>
                           </div>
                       </div>
                   </div>

                   
               </div>

               <div class="container container2">
                   <div class="div1">
                        <div class="row">
                            <div class="col-md-12 mt-3 text-white">
                               
                            </div>
                        </div>
                    </div>

                    <div class="div2">
                      <i class="fas fa-chart-pie i3"></i>
                    </div>

               </div>

    
    </div>
</main>




    
    <script type="text/javascript">

/*$(document).ready(function(){

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
});*/



</script>
</body>
</html>