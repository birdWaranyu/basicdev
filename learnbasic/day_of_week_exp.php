<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>day of week Examples</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.7.2.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script type="text/javascript">
        $(document).ready(function() { 
            $("#datepicker").datepicker({ 
                dateFormat: 'yy-mm-dd' 
            });
            $("#datepicker1").datepicker({ 
                dateFormat: 'yy-mm-dd' 
            });
            $(".refresh").click(function() { 
                window.location.href = window.location.href;
            });
        });
    </script>
    <style>
        .tb_calendar{ width : 300px;}
        .resizetextarea { resize: none; }
        .form-design { border: 1px solid black; padding-top: 2%; padding-bottom: 2%; } 
    </style>
</head>
<body>
    
    <?php
        
        //echo ''.$year.'-'.$month.'<br>';

        $a = date(j); // , 1 to 31
        $b = date(a); // am,
        $c = date(A); // AM,
        $d = date(B); // Swatch Internet time 000 -999
        $e = date(d); // , 01 to 31
        $f = date(D); // , sat
        $g = date(F); // , November
        $h = date(g); // , 1 through 12
        $hh = date(G); // , 0 through 23
        $i = date(h); // , 01 through 12
        $j = date(H); // , 00 through 23
        $k = date(i); // , 00 to 59
        $l = date(I); // 0, 1 if Daylight Savings Time, 0 otherwise.
        $m = date(l); // , Sunday through Saturday
        $n = date(L); // 0, 1 if it is a leap year, 0 otherwise.
        $o = date(m); // , 01 through 12
        $p = date(M); // , Jan through Dec
        $q = date(n); // , 1 through 12
        $r = date(o); // Example: +0200
        $s = date(r); // Example: Thu, 21 Dec 2000 16:01:07 +0200
        $t = date(s); // 00 through 59
        $u = date(S); // st, nd, rd or th. Works well with j
        $v = date(t); // 28 through 31
        $w = date(T); // time zoneseting Examples: EST, MDT ...
        $x = date(u); // See also time()
        $y = date(w); // 0 (for Sunday) through 6 (for Saturday)
        $z = date(W); // Example: 42 (the 42nd week in the year)
        $aa = date(y); // Examples: 99 or 03
        $bb = date(Y); // Examples: 1999 or 2003
        $cc = date(z);
    
        if(!$mon) {
            $mon = $o;
        }
        else {
            $mon = $mon;
        }
        if(!$year) {
            $year = $bb;
        }
        else {
            $year = $year;
        }

        echo $mon.' '.$bb.'<br>';
        echo 'year '.$year.'<br>';
        $dday = date('d');
        echo 'dday '.$dday.'<br>';
        $firstday = mktime(0,0,0,$mon,1,$year);
        echo 'firstday '.$firstday.'<br>';
        $daystart = date('d',$firstday);
        // echo 'daystart '.$daystart.'<br>';
        $firstdays = date('w',$firstday);
        // echo 'firstdays '.$firstdays.'<br>';
        // $lastdays = date('t',$firstday);
        // echo 'lastdays '.$lastdays.'<br>';
        $year_view = date('Y',$firstday);
        // echo 'year_view '.$year_view.'<br>';
        // $mon_view = date('m',$firstday);
        // echo 'mon_view '.$mon_view.'<br>';

        $date = $dday.'-'.$mon.'-'.$year;
        echo 'day '.$dday.'-'.$mon.'-'.$year.'<br>';

        echo '<br><br>';
        $lastdays = date('t',$firstday);
        echo 'lastdays '.$lastdays.'<br>';
        $mon_view = date('m',$firstday);
        echo 'mon_view '.$mon_view.'<br>';
        $month_text = date('F',$firstday);
        echo 'month_text '.$month_text.'<br>'; 

        echo "
        <script>
        function d_s( su , mnp) {
            if(mnp == 'm') {
                document.dat_form.mon.value = su - 1 ;
            }
            else {
                document.dat_form.mon.value = su + 1 ;
            }
            document.dat_form.submit();
        }
        </script>
        <form name=dat_form action='$PHP_SELF' method=post>
        <input type=hidden name=mon value=''>

        <div align='center'><a style='text-decoration: none;' href='day_of_week.php'>ดูปฏิทินกิจกรรม</a></div>
        <br><br>

        <table align='center' border=1 class='tb_calendar' cellpadding=0 cellspacing=0 bordercolor=#999999>
        <tr bgcolor=pink>
        <td colspan=7 align=center><a href=\"javascript:d_s($mon,'m')\"> < </a>&nbsp;$year_view - $mon_view <a href=\"javascript:d_s($mon,'p')\"> > </a></td>
        </tr>
        </form>
        <tr align=center>
            <td><font color=red>อา</a></td>
            <td>จ</td>
            <td>อ</td>
            <td>พ</td>
            <td>พฤ</td>
            <td>ศ</td>
            <td><font color=blue>ส</font></td>
        </tr>
        <tr align=right>";
        ////
        for($i = 0; $i < 7; $i++) {
            
            if($firstdays == $i) {
                break;
            }
            else {
                echo "<td width=50px;>&nbsp;</td>";
            }
            $week++;

        }

        for($i = 1; $i <= $lastdays; $i++) {
            
            if($week % 7 == 0) {
                echo "</tr><tr align=right>";
            }
            if($a == $i) {
                $bgcolor = "bgcolor=pink";
            } 
            else {
                $bgcolor = '';
            }

            if($week % 7 == 0) {
                echo "<td $bgcolor><font size=2 color=red>$i</font></td>";
            }
            else if($week % 7 == 6) {
                echo "<td $bgcolor style='width:50px;'><font size=2 color=blue>$i</font></td>";
            }
            else { //
                echo "<td $bgcolor><font size=2>$i</font></td>";
            }
            
            $week++;
        }

        while($week % 7 != 0) {
            echo "<td>&nbsp;</td>";
            $week++;
        }

        echo "</tr>
        </table>
        ";

    ?>

</body>
</html>    