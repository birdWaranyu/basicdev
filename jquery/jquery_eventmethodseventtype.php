
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("p").on("click dblclick mouseover mouseout",function(event){
				$("div").html("Event: " + event.type);
			});
		});
	</script>
</head>
<body>

	<p>This paragraph has a click, double-click, mouseover and mouseout event defined.<br>If you trigger one of the events, the div element below will display the event type.</p>
	<div />
	
</body>
</html>

