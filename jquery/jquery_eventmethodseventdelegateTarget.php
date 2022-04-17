
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("div").on("click", "button", function(event){
				$(event.delegateTarget).css("background-color", "pink");
			});
		});
	</script>
</head>
<body>

	<div style="background-color:yellow">
		<p>Click the button to change the background color of this div.</p>
		<button>Click me!</button>
	</div>

	<div style="background-color:yellow">
		<p>Click the button to change the background color of this div.</p>
		<button>Click me!</button>
	</div>
	
</body>
</html>


