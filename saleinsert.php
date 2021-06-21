<?php

session_start();
include("salesdb.php");


if(isset($_SESSION['staff_id'])){?>


    



    <?php   

    $mainsql="select st_qty from stock where st_item_name='$_POST[itname]'";
    $ans=mysqli_query($conn,$mainsql);
    if($row1=mysqli_fetch_array($ans)){
        $curqty=$row1['st_qty'];
    
    
    $qty=$_POST['qty2'];
    $rate=$_POST['p_rate'];
    $discount=$_POST['disc2'];
    $sellrate=$_POST['urate2'];
     
    $itmprofit=($sellrate-$rate)*$qty;
    $totalitmprofit=$itmprofit-$discount;
    $date=date("Y/m/d");
    $stockqty=$curqty-$qty;

   if($curqty > 0 ){
  //var_dump($qty,$rate,$discount,$sellrate,$itmprofit,$totalitmprofit,$date,$stockqty);
  $sql="insert into sales_entry values('','$_POST[itnumber]','$_POST[itname]','$qty','$sellrate','$rate','$discount','$_POST[trate2]','$totalitmprofit','$_POST[saledate]','$_POST[stf_id]','$_POST[salenoo]')";
  
  if($conn->query($sql)){
      $sql1="update stock set st_qty='$stockqty' where st_item_name='$_POST[itname]'";
      if($conn->query($sql1))
      {


      
      $sql2="select * from sales_entry where saledate='$date'";
      if($conn->query($sql2)){
          $result=mysqli_query($conn,$sql2);?>
          



         <?php  while($row=mysqli_fetch_array($result)){

                    echo" <tr> 

                    <td>$row[item_no]</td>

                    <td>$row[item_name]</td>
                    <td>$row[quantity]</td>
                    <td>$row[unit_rate]</td>
                    <td>$row[disc2]</td>

                    <td>$row[trate]</td>

                   

</tr>
";








          }
      }
  }
}
}else{
    echo "<div class='alert alert-danger'>Selected Item's Stock Not Available</div>";
    header("Refresh:2");
}
}
}

   

