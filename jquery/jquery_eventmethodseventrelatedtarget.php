
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("div, p").mouseenter(function(event){
				$("#msg").html("Related target is: " + event.relatedTarget.nodeName);
			});
		});
	</script>
</head>
<body>

	<div style="height:200px;border:solid">This is a div element 
		<p style="background-color:pink">This is a paragraph</p>
	</div><br>

	<div id="msg" />
	
</body>
</html>


