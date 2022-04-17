
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		.ancestors * { 
			display: block;
			border: 2px solid lightgrey;
			color: lightgrey;
			padding: 5px;
			margin: 15px;
		}
	</style>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("span").parents().css({"color": "red", "border": "2px solid red"});
		});
	</script>
</head>
<body class="ancestors">body (great-great-grandparent)

	<div style="width:500px;">div (great-grandparent)
		<ul>ul (grandparent)  
			<li>li (direct parent)
				<span>span</span>
			</li>
		</ul>   
	</div>
	
</body>
</html>

