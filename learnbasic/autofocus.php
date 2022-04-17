
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form id="form1" name="form1" method="post" action="">
        เบอร์โทรศัพท์
        <input name="telNo_1" type="text" id="telNo_1" size="1" maxlength="2" style="width:15px;" />
        - 
        <input name="telNo_2" type="text" id="telNo_2" size="3" maxlength="4" style="width:35px;" /> 
        -
        <input name="telNo_3" type="text" id="telNo_3" size="3" maxlength="4" style="width:35px;" /> 
        <br>
        <input name="telNo_4" type="text" id="telNo_4" size="3" maxlength="4" style="width:35px;" /> 
        -
        <input name="telNo_5" type="text" id="telNo_5" size="1" maxlength="2" style="width:15px;" />
        -
        <input name="telNo_6" type="text" id="telNo_6" size="3" maxlength="3" style="width:35px;" /> 
    </form> 
    
</body>
</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript"> 
$(function(){
/*  สามารถเปลี่ยนจาก telNo_ เป็นค่าที่ต้องการ  */
    //$("#telNo_1").keyup(function(event){
    $("input[name^='telNo_']").keyup(function(event){
        if(event.keyCode==8){
            if($(this).val().length==0){
                $(this).prev("input").focus();  
            }
            return false;
        }           
        if($(this).val().length==$(this).attr("maxLength")){
            $(this).next("input").focus();
        }
    }); 
});
</script>