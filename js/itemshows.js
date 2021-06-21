function itemFetch(){
    var item=$("#item").val();
   
    $.ajax({
        method:"post",
        url:"itemtake.php",
        data:{
            item:item,

        },
        success:function(resonse)
        {
           
            document.getElementById("output").innerHTML=resonse;
              
        },





    });
}


function showBill(){
    var itemno=$("#itemno").val();
    var itemname=$("#itemname").val();
    var itemqty=$("#itemqty").val();
    var itemrate=$("#itemrate").val();
    var itemdisc=$("#itemdisc").val();
    var itemtotal=$("#itemtotal").val();
    var sid=$("#sid").val();
    var billno=$("#billno").val();
    var billdate=$("#billdate").val();
    var custname=$("#custname").val();
    var custno=$("#custno").val();
    var saleno=$("#salenoo").val();
    var purrate=$("#purchaserate").val();
    console.log(purrate);
   
    $.ajax({
        method:"post",
        url:"itembillshow.php",
        data:{
           itemno:itemno,
           itemname:itemname,
           itemqty:itemqty,
           itemrate:itemrate,
           itemdisc:itemdisc,
           itemtotal:itemtotal,
           sid:sid,
           billno:billno,
           billdate:billdate,
           custname:custname,
           custno:custno,
           saleno:saleno,
           purrate:purrate,

        },
        success:function(resonse)
        {
           
            document.getElementById("blll").innerHTML=resonse;
              
        },





    });
}