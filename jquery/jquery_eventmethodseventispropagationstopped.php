
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("div").click(function(event){
				event.stopPropagation();
				alert("Was event.stopPropagation() called: " +  event.isPropagationStopped());
			});
		});
	</script>
</head>
<body>

	<div style="height:100px;width:300px;padding:10px;border:1px solid blue;background-color:lightblue;">Click on this div element.</div>

</body>
</html>	

