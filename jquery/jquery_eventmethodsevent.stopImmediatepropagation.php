
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("div").click(function(event){
				alert("Event handler 1 executed");
				event.stopImmediatePropagation();  
			});
			$("div").click(function(event){
				alert("Event handler 2 executed");
			});
			$("div").click(function(event){
				alert("Event handler 3 executed");
			});
		});
	</script>
</head>
<body>

	<div style="height:100px;width:300px;padding:10px;border:1px solid blue;background-color:lightblue;">Click on this div element.</div>

	<p>The second and third click event will not be executed due to event.stopImmediatePropagation(). Try to erase this method and see what happens.
		
	</body>
	</html>

