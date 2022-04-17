<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<form>
 <!--  <input type="checkbox" id="pizza" name="pizza" value="yes"> -->
  <select name="pizza" id="pizza">
  		<option>(choose one)</option>
  		<option value="margaritha">Margaritha</option>
    	<option value="hawai">Hawai</option>
  </select>
  <label for="pizza">I would like to order a</label>
  <select id="pizza_kind" name="pizza_kind">
    <option>(choose two)</option>
    <option value="margarithaone">Margaritha1</option>
    <option value="hawaione">Hawai1</option>
  </select>
  pizza.
</form>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script>
  var update_pizza = function () {
    if ($("#pizza").is(":checked")) {
        $('#pizza_kind').prop('disabled', false);
    }
    else {
        $('#pizza_kind').prop('disabled', 'disabled');
    }
  };
  $(update_pizza);
  $("#pizza").change(update_pizza);
</script>



	
</body>
</html>