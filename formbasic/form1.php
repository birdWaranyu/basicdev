<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>form disabled form readonly</title>
</head>
<body>
		
	<form method="POST">
		<?php if (empty($_POST['lists'])) { ?>
		<table align="center" border="1">
			<tr>
				<th>No</th>
				<th>Product</th>
				<th>Price</th>
				<th>Qty</th>
			</tr>
			<tr>
				<td>1</td>
				<td>aaa</td>
				<td><input type="number" name="price" value="5000" readonly> บาท </td>
				<td><input type="number" name="qty" value="3" disabled></td>
			</tr>
		</table>

		<br><div align="center"><input type="submit" name="lists" value="บันทึก"></div>

	</form>

	<?php } else if (isset($_POST['lists'])) { 

		echo '<pre>';
		print_r($_POST);
		echo '</pre>';
		exit;
	}

?>

</body>
</html>