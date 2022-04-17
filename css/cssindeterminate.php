
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Css Element</title>
	<style>
		input:indeterminate { box-shadow: 0 0 1px 1px red; }
	</style>
</head>
<body>
	
	<h1>The indeterminate Selector</h1>
	<p>The checkbox below is in an indeterminate state (by JavaScript). If you click on it, it will change its state to "checked", and lose its red shadow color, as it is no longer indeterminate.</p>
	<p>Note that an indeterminate checkbox has a "-" icon, rather than a checkmark or an empty box.</p>

	<input type="checkbox" id="myCheckbox"> Checkbox

	<script>
		// Make the checkbox indeterminate via JavaScript
		var checkbox = document.getElementById("myCheckbox");
		checkbox.indeterminate = true;
	</script>

</body>
</html>