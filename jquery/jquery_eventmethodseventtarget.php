
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("p, button, h1").click(function(event){
				$("div").html("Triggered by a " + event.target.nodeName + " element.");
			});
		});
	</script>
</head>
<body>

	<h1>This is a heading</h1>

	<p>This is a paragraph</p>
	<button>This is a button</button>
	<p>The heading, paragraph and button element have a click event defined. Click on each element to display which element triggered the event.</p>
	<div style="color:blue;"></div>
	
</body>
</html>

