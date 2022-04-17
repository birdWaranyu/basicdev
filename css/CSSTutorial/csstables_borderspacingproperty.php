
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <style>
    table, td, th {
      border: 1px solid black;
    }

    #table1 {
      border-collapse: separate;
      border-spacing: 15px;
    }

    #table2 {
      border-collapse: separate;
      border-spacing: 15px 50px;
    }
  </style>
</head>
<body>

  <h2>border-spacing: 15px:</h2>
  <p>When using "border-collapse: separate", the border-spacing property can be used to set the space between the cells:</p>
  <table id="table1">
    <tr>
      <th>Firstname</th>
      <th>Lastname</th>
    </tr>
    <tr>
      <td>Peter</td>
      <td>Griffin</td>
    </tr>
    <tr>
      <td>Lois</td>
      <td>Griffin</td>
    </tr>
  </table>

  <h2>border-spacing: 15px 50px:</h2>
  <p>Using two values (the first sets the horizontal spacing and the second sets the vertical spacing):</p>
  <table id="table2">
    <tr>
      <th>Firstname</th>
      <th>Lastname</th>
    </tr>
    <tr>
      <td>Peter</td>
      <td>Griffin</td>
    </tr>
    <tr>
      <td>Lois</td>
      <td>Griffin</td>
    </tr>
  </table>
  
</body>
</html>

