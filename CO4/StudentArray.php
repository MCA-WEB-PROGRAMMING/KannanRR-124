<html>
<head>
</head>
<body><center>
    <?php
        $s=array("Gon","Kiliua","Hisoka","Jinn");
        echo "<h2>Printing Array using print_r</h2><br><h3>" ;
        print_r($s);
        echo "</h3>" ;
        echo "<br><br><h2>Sorted in ascending order</h2><br><h3>" ;
        asort($s);
        print_r($s);
        echo "</h3>" ;
        echo "<br><br><h2>Sorted in descending order</h2> <br><h3>" ;
        arsort($s);
        print_r($s);
        echo "</h3>" ;
    ?> 
    </center>
</body>
</html>