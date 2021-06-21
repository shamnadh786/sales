function dailySale(){

    $.ajax({
        url:"dailysalefetch.php",
        method:"post",

    success:function(data){
        document.getElementById("saleviews").innerHTML=data;


    },



    });
}

function monthlySale(){

    $.ajax({
        url:"monthlysalefetch.php",
        method:"post",

    success:function(data){
        document.getElementById("saleviews").innerHTML=data;


    },



    });
}

function yearlySale(){

    $.ajax({
        url:"yearlysalefetch.php",
        method:"post",

    success:function(data){
        document.getElementById("saleviews").innerHTML=data;


    },



    });
}