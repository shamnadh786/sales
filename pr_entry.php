<?php
session_start();
include("staffnav.php");
include("salesdb.php");

if(isset($_SESSION['staff_id'])){
    $staffid=$_SESSION['staff_id'];
}
?>

<div class="container main-container">
    <div class="container-fluname container-header">
      <h1><u>Purchase Entry</u></h1>
        <form method="post">
            <div class="in-gr">
                <label>Company Name</label>
                <select name="cname" id="cname" class="form-control" required onchange="getCom()">
                <option selected="true" disabled="disabled">Select</option>
               
                <?php
                $query1="select com_name from company";
                $res1=mysqli_query($conn,$query1);
                while($row1=mysqli_fetch_array($res1)){?>
                     <option>
                  <?php  echo $row1['com_name'];?>
                    </option>
                    <?php  }
                ?>
               
                </select><br>
            </div>
            <div class="in-gr">
                <label>Staff Id</label>
                <input class="form-control" name="staffid" type="text" value="<?= $staffid?>" disabled><br>
            </div>
            <div class="in-gr">
                <label>Date</label>
                <input class="form-control" name="cdate" type="text" id="cdate" value="<?= date("Y/m/d")?>" disabled> <br>
            </div>
          
         </form>

    </div>




   
</div>
 
<div class="container container-section">

                       <form method="post">
                        <div class="input-gr">
                        <select  name="itemselect" class="form-control" id="itemselect" >
                        
                            
                         
                    


                        </select>
                        
                        <span><button type="button" id="showdata" class="btn btn-success" name="search" onclick="getDetail()">Choose item</span>
                        </div>
            </form>

            <div class="table-header">
                <div class="row">
                  <div class="col-md-12">
                  <form method="post">
                    <table class="table">
                        <thead>
                            <tr>
                            <th>Item No </th>
                            <th>Item Name </th>
                            <th>Qty </th>
                            <th>Unit Price </th>
                            
                            <th>Total Amount </th>


                            </tr>
                        </thead>
                         <tbody>
                     
                   
                          <tr id="rest">
                         <td><input class="form-control"  name="number" id="number" type="text"></td>
                         <td><input class="form-control" name="name" id="name" type="text"></td>
                         <td><input class="form-control" name="qty" id="qty" type="number" value=""></td>
                         <td><input class="form-control" name="uprice"  id="uprice" value="" type="text"></td>
                        
                         <td><input class="form-control" name="tamount" type="text" id="tamount" value="" onclick="calc()"></td>
                       <td> 
                     
                      <button type="button" class="btn btn-primary" onclick="show()">Add </button>
                     
                        </td>
                        
                         </tr>
                         
                  
                  
                 </tbody>

                






            </table>
           </form>
                  
                  
                  
                  </div>
               
            </div>
            
            </div>
</div>
<form method="POST">
<div class="entry-show" id="showentry">




</div>



<?php
  
     
  
  if(isset($_POST['sub_table'])){
               
     
       
        $comname=$_POST['cname1'];
        $add_date=$_POST['cdate1'];
        $num=$_POST['num'];
        $name1=$_POST['name1'];
        $qty1=$_POST['qty1'];
        $tamount1=$_POST['tamount1']; 
        $uprice1=$_POST['uprice1'];
  
    for($i=0;$i<sizeof($name1);$i++){
        $sql1="insert into purc_entry values('','$comname[$i]','$add_date[$i]','$num[$i]','$name1[$i]','$qty1[$i]','$uprice1[$i]','$tamount1[$i]','$_SESSION[staff_id]','waiting')";
        
        if($conn->query($sql1)){
            
          
            $sql2="delete from entry1 where name='$name1[$i]'";
            if($conn->query($sql2)){
                
                
            }
        }
    }echo "<div class='alert alert-success text-center'>Successfully Added </div>";
}


?>





<script type="text/javascript">

function calc(){
    var qty=$("#qty").val();
    var uprice=$("#uprice").val();
   var ans= qty*uprice;
   console.log(ans);
    document.getElementById("tamount").value=ans;


}

</script>
<script type="text/javascript">

$("#itemselect").select2();

</script>
<script src="js/getcompany.js"></script>
<script src="js/getdata.js"></script>

</body>
</html>