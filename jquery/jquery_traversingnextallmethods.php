
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		.siblings * { 
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
			$("li.start").nextAll().css({"color": "red", "border": "2px solid red"});
		});
	</script>
</head>
<body>

	<div style="width:500px;" class="siblings">
		<ul>ul (parent)  
			<li>li (sibling)</li>
			<li>li (sibling)</li>
			<li class="start">li (sibling with class name "start")</li>
			<li>li (the next sibling of li with class name "start")</li>
			<li>li (the next sibling of li with class name "start")</li>
			<li>li (the next sibling of li with class name "start")</li>
		</ul>   
	</div>

	<p>In this example, we return all elements that are the next siblings of the li element with class name "start".</p>
	
</body>
</html>
