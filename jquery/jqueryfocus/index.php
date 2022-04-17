
<html>
<head>
<title>ThaiCreate.Com Tutorial</title>
<!-- <script src="jquery/jquery-3.5.1.min.js"></script> -->
<script type="text/javascript">

function setNextFocus(ctrl,objId){

    if (ctrl.maxLength == ctrl.value.length) {

        var obj = document.getElementById(objId);
        //alert(obj);

        if (obj) {

            obj.focus();

        }

    }

}

</script>
</head>
<body>

<form name="frmMain" action="" method="post">

Textbox 1 <input type="text" name="txt1" maxlength="4" id="txt1" value="" onKeyUp="setNextFocus(this,'txt2');"> 

Textbox 2 <input type="text" name="txt2" maxlength="4" id="txt2" value="" onKeyUp="setNextFocus(this,'txt3');"> 

Textbox 3 <input type="text" name="txt3" id="txt3" maxlength="4" value="" onKeyUp="setNextFocus(this,'txt4');"><br>

Textbox 4 <input type="text" name="txt4" id="txt4" value=""> <br>

<input type="submit" name="btnSubmit" value="Submit">

</form>

</body>

</html>