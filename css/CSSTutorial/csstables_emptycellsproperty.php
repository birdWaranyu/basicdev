
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		table.ex1 {
			empty-cells: hide;
		}

		table.ex2 {
			empty-cells: show;
		}
	</style>
</head>
<body>

	<h1>The empty-cells Property</h1>

	<h2>empty-cells: hide:</h2>
	<table class="ex1" border="1">
		<tr>
			<td>Peter</td>
			<td>Griffin</td>
		</tr>
		<tr>
			<td>Lois</td>
			<td></td>
		</tr>
	</table>

	<h2>empty-cells: show (default):</h2>
	<table class="ex2" border="1">
		<tr>
			<td>Peter</td>
			<td>Griffin</td>
		</tr>
		<tr>
			<td>Lois</td>
			<td></td>
		</tr>
	</table>
	
</body>
</html>

