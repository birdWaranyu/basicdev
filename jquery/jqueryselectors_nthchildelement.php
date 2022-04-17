
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("p:nth-child(2)").css("background-color", "yellow");
		});
	</script>
</head>
<body>

	<h1>This is a heading in body</h1>

	<p>The first paragraph in body.</p>
	<p>The second paragraph in body (and the 3rd child element in body).</p>

	<div style="border:1px solid;">
		<span>This is a span element in div</span>
		<p>The first paragraph in div.</p>
		<p>The second paragraph in another div (and the 3rd child element in this div).</p>
		<p>The last paragraph in div.</p>
	</div><br>

	<div style="border:1px solid;">
		<p>The first paragraph in another div.</p>
		<p>The second paragraph in another div.</p>
		<p>The last paragraph in another div (and the 3rd child element in this div).</p>
	</div>

	<p>The last paragraph in body.</p>
	
</body>
</html>
