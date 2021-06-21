<?php
session_start();
include("salesdb.php");


if(isset($_SESSION['staff_id'])){?>


    



    <?php   

    $mainsql="select st_qty from stock where st_item_name='$_POST[itname]'";
    $ans=mysqli_query($conn,$mainsql);
    if($row1=mysqli_fetch_array($ans)){
        $curqty=$row1['st_qty'];
    
    $mainsql2="select quantity,SUM(trate),SUM(item_profit) from sales_entry where item_name='$_POST[itname]' and saledate='$_POST[saledate]' ";
    $ans2=mysqli_query($conn,$mainsql2);
    if($row22=mysqli_fetch_array($ans2)){
        $cursaleqty=$row22['quantity'];
        $curtotal=$row22['SUM(trate)'];
        $curprofit=$row22['SUM(item_profit)'];
          


    $qty=$_POST['qty2'];
    $trate2=$_POST['trate2'];
    $finalqty=$cursaleqty-$qty;

    $rate=$_POST['p_rate'];
    $discount=$_POST['disc2'];
    $sellrate=$_POST['urate2'];
     
    $itmprofit=($sellrate-$rate)*$qty;
    $totalitmprofit=$itmprofit-$discount;
    $date=date("Y/m/d");
    $stockqty=$curqty+$qty;

    $newtotal=$curtotal-$trate2;
    $newprofit=$curprofit-$totalitmprofit;

  //var_dump($qty,$rate,$discount,$sellrate,$itmprofit,$totalitmprofit,$date,$stockqty);


  $sqll="insert into sales_return values('','$_POST[itnumber]','$_POST[itname]','$qty','$sellrate','$date','$_POST[trate2]','$_POST[stf_id]')";
  if($conn->query($sqll)){
  $sqll2="update sales_entry set quantity='$finalqty',trate='$newtotal',item_profit='$newprofit' where item_name='$_POST[itname]'";
  if($conn->query($sqll2)){
  $sql="delete from sales_entry where item_name='$_POST[itname]' and quantity=0";
  
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
}
}
}
}
}

   

                                            