<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script LANGUAGE="javascript">
      
        function check()
        {
            //var burns = [];
            var letters = document.joe.burns.value.length +1;
            if (letters <= 4)
            {document.joe.burns.focus()}
            else
            {document.joe.tammy.focus()}
        }
   
        function check2()
        {
            //var tammy = [];
            var letters2 = document.joe.tammy.value.length +1;
            if (letters2 <= 4)
            {document.joe.tammy.focus()}
            else
            {document.joe.chloe.focus()}
        }
  
        function check3()
        {
            //var chloe = [];
            var letters3 = document.joe.chloe.value.length +1;
            if (letters3 <= 4)
            {document.joe.chloe.focus()}
            else
            {document.joe.mardi.focus()}
        }

        function check4()
        {
            //var mardi = [];
            var letters4 = document.joe.mardi.value.length +1;
            if (letters4 <= 4)
            {document.joe.mardi.focus()}
            else
            {document.joe.go.focus()}
        }
    </script>
</head>
<body>

<!-- This is the form -->
<FORM NAME="joe">
    <INPUT TYPE="text" name="burns" size="13" MAXLENGTH="4" onKeyUp="check()"><BR>
    <INPUT TYPE="text" name="tammy" size="10" MAXLENGTH="4" onKeyUp="check2()"><BR>
    <INPUT TYPE="text" name="chloe" size="10" MAXLENGTH="4" onKeyUp="check3()"><BR>
    <textarea name="mardi" MAXLENGTH="4" onKeyUp="check4()"></textarea><BR>
    <!-- <INPUT TYPE="text" name="mardi" size="10" MAXLENGTH="4" onKeyUp="check4()"><BR> -->
    <INPUT TYPE="submit" VALUE="Click to Send" NAME="go">
</FORM>

</body>
</html>