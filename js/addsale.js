function saleAdd(){
    

        var stf_id=$("#stf_id").val();
        var saledate=$("#saledate").val();
        var salenoo=$("#salenoo").val();
        var itnumber=$("#itnumber").val();
        var itname=$("#itname").val();
        var qty2=$("#qty2").val();
        var urate2=$("#urate2").val();
        var trate2=$("#trate2").val();
       var p_rate=$("#p_rate").val();
       var disc2=$("#disc2").val();
       console.log(salenoo);
        $.ajax({
           
            method:"POST",
            url:"saleinsert.php",
            data:{
                stf_id:stf_id,
                saledate:saledate,
                salenoo:salenoo,
                itnumber:itnumber,
                itname:itname,
                qty2:qty2,
                urate2:urate2,
                trate2:trate2,
                p_rate:p_rate,
                disc2:disc2,
                $profit:urate2-p_rate,
            
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
