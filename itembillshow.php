<?php

session_start();
include("salesdb.php");


if(isset($_SESSION["staff_id"])){

    $sql3="select st_qty from stock where st_item_name='$_POST[itemname]'";
    $answer=mysqli_query($conn,$sql3);
    if($row2=mysqli_fetch_array($answer)){
        $qt=$_POST['itemqty'];
        $qty=$row2['st_qty'];
        $newqty=$qty-$qt;
    }
    
    $dt=date("Y/m/d");
    $sellrate=$_POST['itemrate'];
    $pur_rate=$_POST['purrate'];
    $discount=$_POST['itemdisc'];
    $profit=($sellrate-$pur_rate)*$qt;
    $totalitemprofit=$profit-$discount;



    $sql="insert into salesbill values('','$_POST[itemno]','$_POST[itemname]','$_POST[itemqty]','$_POST[itemrate]','$_POST[itemdisc]','$_POST[itemtotal]','$_POST[sid]','$_POST[billno]','$_POST[billdate]','$_POST[custname]','$_POST[custno]')";
    if($conn->query($sql)){
        $_SESSION['billno']=$_POST['billno'];
       
        $sqlll="insert into sales_entry values('','$_POST[itemno]','$_POST[itemname]','$_POST[itemqty]','$_POST[itemrate]','$pur_rate','$_POST[itemdisc]','$_POST[itemtotal]','$totalitemprofit','$_POST[billdate]','$_POST[sid]','$_POST[saleno]')";
        if($conn->query($sqlll)){

          
            $sql4="update stock set st_qty='$newqty' where st_item_name='$_POST[itemname]'";
            if($conn->query($sql4)){
    
    
           
    
    
            $sql2="select * from salesbill where billdate='$dt' and billno='$_POST[billno]'";
    
            $result=mysqli_query($conn,$sql2);
    
    
    
    
    
            while($row=mysqli_fetch_array($result)){
        
        
              echo ' 
                 <tr>
                  <td>'.$row['itemno'].'</td>
                  <td>'.$row['itemname'].'</td>
                  <td>'.$row['itemqty'].'</td>
                  <td>'.$row['item_unit_rate'].'</td>
                  <td>'.$row['item_discount'].'</td>
                  <td>'.$row['item_total'].'</td>
                 
                 </tr>
                
                
              
        
               ';
            }
        


        }
       




    }
    
    
    
    
   


}
}
    
    
    
    ?>