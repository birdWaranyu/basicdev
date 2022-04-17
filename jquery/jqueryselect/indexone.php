<html>
<head>
<title>Disable Drop Down</title>

<script type = "text/javascript">
function disableDrop(){
     if(frmMain.sltMain.options[0].selected){
          frmMain.sltSecondary.disabled = true;
     }
     else{
         frmMain.sltSecondary.disabled = false;
     }
}
</script>
</head>
<body>

<form ID = "frmMain">

<select ID = "sltMain" onchange = "disableDrop();">
<option value = "onetime">One-Time</option>
<option value = "recurring" selected>Recurring</option>
</select>

<select ID = "sltSecondary">
<option value = "1">One</option>
<option value = "2">Two</option>
<option value = "3">Three</option>
<option value = "4">Four</option>
</select>

</form>

</body>
</html>