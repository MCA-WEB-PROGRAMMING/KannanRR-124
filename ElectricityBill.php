<html>
<head>
</head>
<body>
    <center>
        <table>
        <form method="POST" >
           <tr><td>Units consumed :</td><td> <input type="number" name="unit"></td><tr>
           <tr><td>Type of Area   :</td><td> <select name="area">
           <option value=""></option>
            <option value="Rural">Rural</option>
            <option value="urban">Urban</option>
            <option value="surban">Sub-Urban</option></select></td></tr>
            <tr><td colspan="2"><center><input type="submit" name="s"></center></td></tr>
        </form>
</table>
        <?php
        if(isset($_POST["s"]))
        {
            $unit=$_POST["unit"];
            $area=$_POST["area"];
            $amt=0;
            if($area="Rural"){
                $amt=$unit*5;
            }
            else if($area="surban"){
                $amt=$unit*10;
            }
            else{
                $amt=$unit*15;
            }
            if($unit <= 100){
                $amt=$amt+20;
            }
            else if($unit > 100 && $unit <= 300){
                $amt=$amt+30;
            }
            else{
                $amt=$amt+40;
            }
        echo "Amount = ",$amt;
        }
    ?>
    </center>   
</body>
</html>