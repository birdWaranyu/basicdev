
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
	<h2>Create Object from JSON String</h2>

	<p id="demo"></p>

	<script>
		var txt = '{"name":"John", "age":30, "city":"New York"}'
		var obj = JSON.parse(txt);
		document.getElementById("demo").innerHTML = obj.name + ", " + obj.age;
	</script>


</body>
</html>

