

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("button").click(function(){
				$("#div1").empty();
			});
		});
	</script>
</head>
<body>
	
	<div id="div1" style="height:100px;width:300px;border:1px solid black;background-color:yellow;">

		This is some text in the div.
		<p>This is a paragraph in the div.</p>
		<p>This is another paragraph in the div.</p>

	</div>
	<br>

	<button>Empty the div element</button>

</body>
</html>


