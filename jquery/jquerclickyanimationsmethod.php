
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link rel="stylesheet" href="">
	<script> 
		$(document).ready(function(){
			$("button").click(function(){
				$("div").animate({left: '250px'});
			});
		});
	</script>
</head>
<body>

	<button>Start Animation</button>

	<p>By default, all HTML elements have a static position, and cannot be moved. To manipulate the position, remember to first set the CSS position property of the element to relative, fixed, or absolute!</p>

	<div style="background:#98bf21;height:100px;width:100px;position:absolute;"></div>

	<div>
		<div>
		
		</div>
	</div>
	
</body>
</html>	


