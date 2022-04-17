
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		h1 {
			margin: 0 0 50px 0;
		}

		h2 {
			margin: 20px 0 0 0;
		}
	</style>
</head>
<body>

	<p>In this example the h1 element has a bottom margin of 50px and the h2 element has a top margin of 20px. Then, the vertical margin between h1 and h2 should have been 70px (50px + 20px). However, due to margin collapse, the actual margin ends up being 50px.</p>

	<h1>Heading 1</h1>
	<h2>Heading 2</h2>
	
</body>
</html>


