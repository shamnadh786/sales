
      function saleReturn()
      {

      
      
      
      
      var stf_id=$("#stf_id").val();
        var saledate=$("#saledate").val();
        var itnumber=$("#itnumber").val();
        var itname=$("#itname").val();
        var qty2=$("#qty2").val();
        var urate2=$("#urate2").val();
        var trate2=$("#trate2").val();
       var p_rate=$("#p_rate").val();
       var disc2=$("#disc2").val();
        $.ajax({
           
            method:"POST",
            url:"saledel.php",
            data:{
                stf_id:stf_id,
                saledate:saledate,
                itnumber:itnumber,
                itname:itname,
                qty2:qty2,
                urate2:urate2,
                trate2:trate2,
                p_rate:p_rate,
                disc2:disc2,
               
            
            },
            success :function(resonse){
                console.log(resonse);
            
             document.getElementById("out").innerHTML=resonse;
            
            
             document.getElementById("itnumber").value="";
             document.getElementById("itname").value="";
             document.getElementById("qty2").value="";
             document.getElementById("urate2").value="";
             document.getElementById("trate2").value="";
             document.getElementById("disc2").value="";
            
            },
    
        });
    }