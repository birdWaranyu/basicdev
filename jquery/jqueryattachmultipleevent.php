
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("p").on({
				mouseenter: function(){
					$(this).css("background-color", "lightgray");
				},  
				mouseleave: function(){
					$(this).css("background-color", "lightblue");
				}, 
				click: function(){
					$(this).css("background-color", "yellow");
				}  
			});
		});
	</script>
</head>
<body>
	
	<p>Click or move the mouse pointer over this paragraph.</p>

</body>
</html>

