setInterval(()=>{
    $.ajax({
           
        method:"POST",
        url:"totalcheck.php",
     
        success :function(resonse){
            console.log(resonse);
        
         document.getElementById("anss").innerHTML=resonse;
        
        
        
        },

    });
 

},1000);

/*setInterval(()=>{
    $.ajax({
           
        method:"POST",
        url:"salecheck.php",
     
        success :function(resonse){
            console.log(resonse);
        
         document.getElementById("anss").innerHTML=resonse;
        
        
        
        },

    });
 

},1000);*/