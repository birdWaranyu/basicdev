<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form name="classic">
    <select name="countries" onChange="updatecities(this.selectedIndex)" >
        <option selected>Select A Country</option>
        <option value="usa">USA</option>
        <option value="canada">Canada</option>
        <option value="uk">United Kingdom</option>
    </select>

    <select name="cities">
        <option selected>Select A city</option>
    </select>
</form>

<script type="text/javascript">

    var countrieslist = document.classic.countries
    var citieslist = document.classic.cities

    var cities = new Array()
    cities[0]=""
    cities[1]=["New York|newyorkvalue", "Los Angeles|loangelesvalue", "Chicago|chicagovalue", "Houston|houstonvalue", "Austin|austinvalue"]
    cities[2]=["Vancouver|vancouvervalue", "Tonronto|torontovalue", "Montreal|montrealvalue", "Calgary|calgaryvalue"]
    cities[3]=["London|londonvalue", "Glasgow|glasgowsvalue", "Manchester|manchestervalue", "Edinburgh|edinburghvalue", "Birmingham|birminghamvalue"]

    function updatecities(selectedcitygroup){
        citieslist.options.length=0
        if (selectedcitygroup>0){
            for (i=0; i<cities[selectedcitygroup].length; i++)
                citieslist.options[citieslist.options.length] = new Option(cities[selectedcitygroup][i].split("|")[0], cities[selectedcitygroup][i].split("|")[1])
        }
    }

</script>

</body>
</html>