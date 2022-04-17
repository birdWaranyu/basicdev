
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		.descendants * { 
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
			$("ul").children().css({"color": "red", "border": "2px solid red"});
		});
	</script>
</head>
<body class="descendants">body (great-grandparent)

	<div style="width:500px;">div (grandparent)
		<ul>ul (direct parent)  
			<li>li (child)
				<span>span (grandchild)</span>
			</li>
		</ul>   
	</div>
	
</body>
</html>

