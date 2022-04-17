<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	
</head>
<body>

	<select name='alarm_action' id="alarm_action" required>
		<option value="">Default Action</option>
		<option value='playsound' >Play Sound</option>
		<option value='saythis'>Say This</option>
		<option value='runcommand'>Run Command</option>
		<option value='runprogram'>Run Program</option>
	</select>
	<input name="speaker_other" id="speaker_other" type="text" style="display: none" />


	<script>
		var alarmInput = $('#alarm_action');
		alarmInput.on('change', function() {
			var speaker_other = $('#speaker_other');
			speaker_other.show();
			switch ($(this).val()) {
				case 'playsound':
				case 'runprogram':
				speaker_other.attr('type', 'file');
				break;
				case 'saythis':
				case 'runcommand':
				speaker_other.attr('type', 'text');
				break;
			}
		});
	</script>
	
</body>
</html>