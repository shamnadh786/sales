function getCom()
{
    var cname=$("#cname").val();
    $.ajax({
        method:"post",
        url:"comcheck.php",
        data:{
            cname:cname,

        },
        success:function(resonse)
        {
            console.log(resonse);
        document.getElementById("itemselect").innerHTML=resonse;  
              
        },





    });
}
