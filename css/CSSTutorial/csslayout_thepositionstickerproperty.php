
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		div.sticky {
			position: -webkit-sticky;
			position: sticky;
			top: 0;
			padding: 5px;
			background-color: #cae8ca;
			border: 2px solid #4CAF50;
		}
	</style>
</head>
<body>

	<p>Try to <b>scroll</b> inside this frame to understand how sticky positioning works.</p>
	<p>Note: IE/Edge 15 and earlier versions do not support sticky position.</p>

	<div class="sticky">I am sticky!</div>

	<div style="padding-bottom:2000px">
		<p>In this example, the sticky element sticks to the top of the page (top: 0), when you reach its scroll position.</p>
		<p>Scroll back up to remove the stickyness.</p>
		<p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
		<p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
	</div>

	
</body>
</html>

