function getItems(){
    
    var chooseitem=$("#chooseitem").val();
    $.ajax({
        method:"post",
        url:"itmcheck.php",
        data:{
            chooseitem:chooseitem,

        },
        success:function(resonse)
        {
            console.log(resonse);
        document.getElementById("results").innerHTML=resonse;  
              
        },





    });
}

