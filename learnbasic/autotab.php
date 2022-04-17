<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AutoTab</title>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>

</head>
<body>

<input type="text" data-max=2 oninput="skipIfMax(this)"/>
<input type="text" data-max=3 oninput="skipIfMax(this)"/>
<input type="text" data-max=4 oninput="skipIfMax(this)"/>
<input type="text" data-max=5 oninput="skipIfMax(this)"/>

<script type="text/javascript">
        function skipIfMax(element) {
            max = parseInt(element.dataset.max)
            if (element.value.length >= max && element.nextElementSibling) {
                element.nextElementSibling.focus();  
            }
            else {
                element.prevElementSibling.focus();
            }
         }
</script>

</body>
</html>