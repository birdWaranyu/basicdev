
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("#myInput").on("keyup", function() {
				var value = $(this).val().toLowerCase();
				$("#myList li").filter(function() {
					$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
				});
			});
		});
	</script>
</head>
<body>

	<h2>Filterable List</h2>
	<p>Type something in the input field to search the list for specific items:</p>  
	<input id="myInput" type="text" placeholder="Search..">
	<br>

	<ul id="myList">
		<li>First item</li>
		<li>Second item</li>
		<li>Third item</li>
		<li>Fourth</li>
	</ul>
	
</body>
</html>

