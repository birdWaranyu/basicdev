
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		p.ex1 {
			border: 2px solid black;
			outline-style: solid;
			outline-color: hsl(0, 100%, 50%); /* red */
		}

		p.ex2 {
			border: 2px solid black;
			outline-style: dotted;
			outline-color: hsl(240, 100%, 50%); /* blue */
		}

		p.ex3 {
			border: 2px solid black;
			outline-style: solid;
			outline-color: hsl(0, 0%, 73%); /* grey */
		}
	</style>
</head>
<body>

	<h2>The outline-color Property</h2>
	<p>The color of the outline can also be specified using HSL values:</p>

	<p class="ex1">A solid red outline.</p>
	<p class="ex2">A dotted blue outline.</p>
	<p class="ex3">A solid grey outline.</p>
	
</body>
</html>


