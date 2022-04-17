
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		.dropdown {
			position: relative;
			display: inline-block;
		}

		.dropdown-content {
			display: none;
			position: absolute;
			background-color: #f9f9f9;
			min-width: 160px;
			box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
			padding: 12px 16px;
			z-index: 1;
		}

		.dropdown:hover .dropdown-content {
			display: block;
		}
	</style>
</head>
<body>

	<h2>Hoverable Dropdown</h2>
	<p>Move the mouse over the text below to open the dropdown content.</p>

	<div class="dropdown">
		<span>Mouse over me</span>
		<div class="dropdown-content">
			<p>Hello World!</p>
		</div>
	</div>
	
</body>
</html>


