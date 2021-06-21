<?php
ob_start();
include("adminnewside.php");
include("salesdb.php");
?>




<div class="container">
        <div class="head1 text-center">
          <h1><u> New Purchased Products</u> </h1>
        </div>
  
    <div class="container mt-4">
        <div class="row">
         <div class="col-md-12">

       
           
             
            <?php
           
              
           $sql4="select MAX(st_item_no) from stock";
           $resultt=mysqli_query($conn,$sql4);
           
           if($row2=mysqli_fetch_array($resultt)){
              
            $itmno=$row2["MAX(st_item_no)"]+1; 
              

                   
               
                   
                    $sql="select * from purc_entry where not purc_itemno in (select st_item_no from stock) and purc_status='waiting' ";
                  
                    
                    if($conn->query($sql)){
                      
                        $reslt=mysqli_query($conn,$sql);
                        if($reslt->num_rows>0){?>
                            <table class="table table-bordered">
                            <thead>
                               <tr>
                                   <th>Staff Id</th>
                                   <th>Product Name</th>
                                   <th>Company Name</th>
                                   <th>Date</th>
                                   <th>Quantity</th>
                                   <th>Unit price</th>
                                   <th>Total purchase Amount </th>
                                   <th>Set Item No</th>
                                   <th>Set product Name</th>
                                   <th>Set selling price</th>
                                   <th>Set discount</th>
                               
                               </tr>
                            </thead>
                            <form method='post'>
                            <tbody>
                        
                    <?php    while($row=mysqli_fetch_array($reslt)){
                           
                           
                           echo "<tr>
                           
                            <td>$row[st_id] <input type='hidden' name='idd'  value='$row[id]'> </td>
                            <td>$row[purc_name] <input type='hidden' name='p_name'  value='$row[purc_name]' </td>
                            <td>$row[c_name]<input type='hidden' name='com_name'  value='$row[c_name]' </td>
                            <td>$row[p_date] <input type='hidden' name='add_date'  value='$row[p_date]'</td>
                            <td>$row[purc_qty]<input type='hidden' name='qtyy'  value='$row[purc_qty]'></td>
                            <td>$row[purc_rate] <input type='hidden' name='ratee'  value='$row[purc_rate]'> </td>
                            <td>$row[purc_total] </td>
                          
                            <td><input type='text' class='form-control' name='itemno'  value='".$itmno."'></td>
                            <td><input type='text' class='form-control' name='itemname'  value=''></td>
                            <td><input type='text' class='form-control' name='sellrate'  value=''></td>
                            <td><input type='text'class='form-control'  name='discount'  value=''></td>
                            <td><input type='submit' class='btn btn-warning' name='addasnew'  value='+'></td>
                            </form>
                            </tr>"; 

                    $itmno++;
                   

                }
            }else{
                echo "<div class='alert alert-danger text-center alt'>No New Purchase Entries Available</div>";
            }
            }
        }
                
               
            
            
           
           
            
            

            ?>

             
             </tbody>


             </table>
             </div>
        </div>
    </div>
<?php
if(isset($_POST['addasnew'])){
    $sql2="insert into stock values('','$_POST[itemno]','$_POST[itemname]','$_POST[qtyy]','$_POST[ratee]','$_POST[sellrate]','$_POST[discount]','$_POST[com_name]','$_POST[add_date]')";
    if($conn->query($sql2)){
        $sql3="update purc_entry set purc_name='$_POST[itemname]',purc_itemno='$_POST[itemno]',purc_status='ok' where id='$_POST[idd]'";
        if($conn->query($sql3)){
            echo "<div class='alert alert-success'>Item Added in Stock Successfully</div>";
            header("Refresh:1");
        }
    }

}
?>


<div class="container mt-4">
        <div class="head text-center mt-5">
          <h1><u> Purchased Products(In-Stock)</u> </h1>
        </div>
  
   
             
            <?php
           
              
             
             
               
                   
                    $sql="select 
                  
                    purc_entry.id,
                    purc_entry.p_date,
                    purc_entry.purc_itemno,
                    purc_entry.purc_name,
                    purc_entry.c_name,
                    purc_entry.purc_qty,
                    purc_entry.purc_rate,
                    purc_entry.purc_total,
                    purc_entry.st_id,
                    purc_entry.purc_status,stock.st_item_no,stock.st_item_name,purchase_rate,sell_rate,st_qty from purc_entry,stock where purc_itemno = st_item_no and purc_status='waiting' ";
                
                    if($conn->query($sql)){?>
                     <div class="container mt-4">
                    <div class="row">
                     <div class="col-md-12">

                
                      
                      
                        <?php  $reslt=mysqli_query($conn,$sql);
                        if($reslt->num_rows>0){?>
                            <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Staff Id</th>
                                    <th>Product Name</th>
                                    <th>Company Name</th>
                                    <th>Date</th>
                                    <th>Quantity</th>
                                    <th>Unit price(Old)</th>
                                    <th>Unit price(New)</th>
                                    <th>Total purchase Amount </th>
                                    <th>selling price(old)</th>
                                    <th>selling price(New) </th>
                                    <th>Set discount</th>
                                    <th>Action</th>
                                
                                </tr>
                            </thead>
                            <form method='post'>
                            <tbody>
                    
                   <?php     while($row=mysqli_fetch_array($reslt)){
                           echo "<tr>
                           
                            <td>$row[st_id] <input type='hidden' name='idd1'  value='$row[id]'> </td>
                            <td>$row[purc_name] <input type='hidden' name='p_name1'  value='$row[purc_name]' </td>
                            <td>$row[c_name]<input type='hidden' name='com_name1'  value='$row[c_name]' </td>
                            <td>$row[p_date] <input type='hidden' name='add_date1'  value='$row[p_date]'</td>
                            <td>$row[purc_qty]<input type='hidden' name='qtyy1'  value='$row[purc_qty]'></td>

                            <td>$row[purchase_rate] <input type='hidden' name='oldratee'  value='$row[purchase_rate]'> </td>
                            <td>$row[purc_rate] <input type='hidden' name='newratee'  value='$row[purc_rate]'> </td>
                            <td>$row[purc_total] </td>
                            <td>$row[sell_rate]  </td>
                            <input type='hidden' name='stqty'  value='$row[st_qty]'> 
                            
                            <td><input type='text' class='form-control' name='newsell1'  value=''></td>
                            <td><input type='text' class='form-control' name='discount1'  value=''></td>
                            <td><input type='submit'class='btn btn-warning' name='addtostock'  value='+'></td>
                            </form>
                            </tr>"; 

                    
                   

                }

                
               
            
            
           
           
            }else{
                echo "<div class='alert alert-danger text-center alt'>No Purchase Entries(In-Stock Item) Available</div>";
            }
        }
            

            ?>

             
             </tbody>


             </table>
             </div>
            
        </div>
    </div>
    
    <?php
    if(isset($_POST['addtostock'])){
        $oldstockqty=$_POST['stqty'];
        $newstockqty=$_POST['qtyy1'];
        $totalqty=$oldstockqty+$newstockqty;

        $sqll="update stock set st_qty='$totalqty',purchase_rate='$_POST[newratee]', sell_rate='$_POST[newsell1]',discount='$_POST[discount1]' where st_item_name='$_POST[p_name1]'";
        if($conn->query($sqll)){
            $sql3="update purc_entry set purc_status='ok' where  purc_name='$_POST[p_name1]'";
            if($conn->query($sql3)){
                echo "<div class='alert alert-success'>In-Stock Item Modified Successfully</div>";
            }
           
        }
    }

    ?>
    </div>
    </div>
</main>