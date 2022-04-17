<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.js"></script>
	<script type="text/javascript">
	$(function(){
		$('#areaCode,#firstNum,#secNum,#newdata').keyup(function(e){
			if($(this).val().length == $(this).attr('maxlength'))
				$(this).next(':input').focus()
		})
	})
	</script>
	<title>Untitled</title>
</head>
<body>
 
<input type="text" id="areaCode" name="areaCode" maxlength="3" value="" size="3" />- 
<input type="text" id="firstNum" name="firstNum" maxlength="3" value="" size="3" />- 
<input type="text" id="secNum" name="secNum" maxlength="4" value="" size="4" /> -
<input type="text" id="newdata" name="newdata" maxlength="5" value="" size="5" />

</body>
</html>