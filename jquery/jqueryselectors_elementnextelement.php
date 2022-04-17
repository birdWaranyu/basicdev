
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("div + p").css("background-color", "yellow");
		});
	</script>
</head>
<body>

	<h2>What will $("div + p") select?</h2>

	<div style="border:1px solid black;padding:10px;">This is a div element.</div>
	<p>This p element is next to a div element.</p>
	<p>This is another p element.</p>

	<div style="border:1px solid black;padding:10px;">
		<p>This is a p element inside a div element.</p>
	</div>

	<h2>This is a heading next to a div element.</h2>
	<p>This is a p element (This p element will not be selected, because the h2 element above is the "next" element of the div element).</p>
	
</body>
</html>

