<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<style>
		.expand {
			font-weight: bold;
			font-style: italic;
			font-size: 12px;
			cursor: pointer;
		}
		.expandable {
			display:none;
		}
		div {
			margin: 10px;
		}
		.accordion h3 .plus {
			content: "+";
		}
		.accordion h3 active .plus {
			content: "-";
		}
		.plus {
			background-color: red;
		}
	</style>
</head>
<body>

	
	<div>
		<p class="expand" id="expand-1">Plus1 +</p>
	</div>
	<div class="expandable" id="expandable-1">
		<p>1. This is the content that was hidden before, but now is... Well, visible!"</p>
	</div>
	<div>
		<p class="expand" id="expand-2">Plus2 +</p>
	</div>
	<div class="expandable" id="expandable-2">
		<p>2. This is the content that was hidden before, but now is... Well, visible!"</p>
	</div>

	<br><br>

	<div class="accordion">
		<div class="info">test text here</div>
		<h3><button class="plus">+ More Info </button> </h3>
	</div>

	<script>
		$(document).ready(function() {
			$('.expand').click(function(){
				target_num = $(this).attr('id').split('-')[1];
				content_id = '#expandable-'.concat(target_num);
				$(content_id).slideToggle('fast');
			});
		});
		$(document).ready(function() {
			var $accordionIO = $('.accordion h3');
		     $accordionIO.prev('div').hide();

		      $(".accordion h3").click(function () {
		          //Inner 
		          var jqInner = $('.info', $(this).parent());
		          if (jqInner.is(":visible"))
		          {
		              jqInner.slideUp()
		              $(this).find('.plus').html('+ More Info');
		          }
		          else
		          {
		              jqInner.slideDown()
		              $(this).find('.plus').html('- More Info');
		          }
		    });
		});
	</script>

	
</body>
</html>