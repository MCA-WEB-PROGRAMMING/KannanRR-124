<html>
<head>
</head>
<body>
    <center>
        <div style="border: 1px solname black;wnameth:40%;padding:20px">
        <form method="POST" >
            <table>
                    <tr>
                        <td>Enter Name : </td>
                        <td><input type="text" placeholder="Name" name="name"/></td>
                    </tr>
                    <tr>
                        <td><p>Mobile Number    :</p></td>
                        <td><input type="text" placeholder="number"  name="num"/></td>
                    </tr>
                    <tr>
                        <td><p>Email   :</p></td>
                        <td><input type="text" placeholder="Email" name="email"/></td>
                    </tr>
                    <tr>
                        <td><input type="text" placeholder="Username" name="user"></td>
                        <td><input type="text" placeholder="Password" name="pass"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><center><input type="submit" name="s"></center></td>
                    </tr>
            </table>
</form>
            <div>
        <?php
        if(isset($_POST["s"]))
        {
            $C1=preg_match("/[a-z]/",$_POST["pass"]);
            $C2=preg_match("/[A-Z]/",$_POST["pass"]);
            $C3=preg_match("/[0-9]/",$_POST["pass"]);
            $C5=preg_match("/[0-9]/",$_POST["num"]);
            $C4=preg_match("/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/",$_POST["email"]);

            if(!($C1 && $C2 && $C3) && !strlen($_POST["pass"])<8)
            {
                echo "Password not strong";
            }
            ?><br><?php
            if(!($C5) && $_POST["num"]!="")
            {
                echo "Enter number only in Number field";
            }
            ?><br><?php
            if(!($C4) && $_POST["email"]!="")
            {
                echo "Enter email in correct format";
            }
            ?><br><?php
            if($_POST["user"]=="" || $_POST["pass"]=="" || $_POST["num"]=="" || $_POST["email"]=="" || $_POST["name"]=="")
            {
                echo "Enter all data";
            }
        }
    ?>
    </center>   
</body>
</html>