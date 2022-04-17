
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Css Align Content Propety</title>
	<style>
		#main { width: 220px; height: 300px; border: 1px solid black; display: flex; align-items: center; }

		#main div { flex: 1; }
	</style>
</head>
<body>
	
	<div id="main">
		<div style="background-color:coral;">RED</div>
		<div style="background-color:lightblue;">BLUE</div>  
		<div style="background-color:lightgreen;">Green div with more content.</div>
	</div>

	<p><b>Note:</b> Internet Explorer 10 and earlier versions do not support the align-items property.</p>

</body>
</html>