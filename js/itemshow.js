function ItemCheck(){
    var itm=$("#itm").val();
   
    $.ajax({
        method:"post",
        url:"itemcheck.php",
        data:{
            itm:itm,

        },
        success:function(resonse)
        {

            document.getElementById("itm").value=resonse;
               $("#itm").select2({
                   data:resonse
               });
        },





    });
}