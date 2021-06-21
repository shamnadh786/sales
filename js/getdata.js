function getDetail()
{
    var itemselect=$("#itemselect").val();
    $.ajax({
        method:"post",
        url:"getitems.php",
        data:{
            itemselect:itemselect,

        },
        success:function(resonse)
        {
            console.log(resonse);
        document.getElementById("rest").innerHTML=resonse;  
              
        },





    });
}
