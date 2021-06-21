function show(){

    var cname=$("#cname").val();
    var cdate=$("#cdate").val();
    var number=$("#number").val();
    var name=$("#name").val();
    var qty=$("#qty").val();
    var uprice=$("#uprice").val();
    var tamount=$("#tamount").val();
   
    $.ajax({
       
        method:"POST",
        url:"pur_show.php",
        data:{
            cname:cname,
            cdate:cdate,
            number:number,
            name:name,
            qty:qty,
            uprice:uprice,
            tamount:tamount
        
        },
        success :function(resonse){
            console.log(resonse);
        
         document.getElementById("showentry").innerHTML=resonse;
        
        
         document.getElementById("number").value=parseInt(number)+1;
         document.getElementById("name").value="";
         document.getElementById("qty").value="";
         document.getElementById("uprice").value="";
         document.getElementById("tamount").value="";
        
        },

    });
}