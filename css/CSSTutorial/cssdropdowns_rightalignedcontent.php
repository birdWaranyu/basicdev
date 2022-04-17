
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
			z-index: 1;
		}

		.dropdown:hover .dropdown-content {
			display: block;
		}

		.desc {
			padding: 15px;
			text-align: center;
		}
	</style>
</head>
<body>

	<h2>Dropdown Image</h2>
	<p>Move the mouse over the image below to open the dropdown content.</p>

	<div class="dropdown">
		<img src="img_5terre.jpg" alt="Cinque Terre" width="100" height="50">
		<div class="dropdown-content">
			<img src="img_5terre.jpg" alt="Cinque Terre" width="300" height="200">
			<div class="desc">Beautiful Cinque Terre</div>
		</div>
	</div>
	
</body>
</html>

