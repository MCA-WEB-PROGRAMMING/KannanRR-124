<html>
<head>
</head>
<body><center>
    <table border="1px" style="width:50%">
    <tr><th>No :</th>
    <th>Name</th></tr>
    <?php
        $s=array("Dhoni","Yuvraj","Sreesanth","Raina","Sachin");
        foreach($s as $x=>$c)
        {
            echo "<tr><td><h3>$x</h3></td><td><h3>$c</h3></td></tr>";
        }
    ?> 
    </table>
    </center>
</body>
</html>