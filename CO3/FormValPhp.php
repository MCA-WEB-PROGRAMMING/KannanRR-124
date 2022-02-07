<html>
<head>
</head>
<body>
    <center>
        <div style="border: 1px solid black;width:40%;padding:20px">
            <table>
                    <tr>
                        <td>Enter Name : </td>
                        <td><input type="text" placeholder="Name" id="name" required=""/></td>
                    </tr>
                    <tr>
                        <td><p>Mobile Number    :</p></td>
                        <td><input type="number" placeholder="number"  required="" id="num"/></td>
                    </tr>
                    <tr>
                        <td><p>Email   :</p></td>
                        <td><input type="text" placeholder="Email"  required="" id="email"/></td>
                    </tr>
                    <tr>
                        <td><p>Date Of Birth     :</p></td>
                        <td><input type="date" class="input" id="dob" required=""></td>
                    </tr>
                    <tr>
                        <td><input type="text" placeholder="Username" required="" name="user"></td>
                        <td><input type="text" placeholder="Password" required="" name="pass"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="submit" name="s"></center></td>
                    </tr>
            </table>
            <div>
            <div style="visibility: hidden;width: 50px;color :white;background-color: green;" id="p">No Errors</div>
    </center>
        <?php
        if(isset($_POST["s"]))
        {
            $C1=preg_match("/[a-z]/",$_POST["pass"]);
            $C2=preg_match("/[A-Z]/",$_POST["pass"]);
            $C3=preg_match("/[0-9]/",$_POST["pass"]);
            if(!($C1 && $C2 && $C3) && !strlen($_POST["pass"])<8)
            {
                echo "Password not strong";
            }
            ?><br><?php
            if($_POST["user"]=="")
            {
                echo "Enter Username";
            }
            ?><br><?php
            if($_POST["pass"]=="")
            {
                echo "Enter Password";
            }
        }
    ?>
    </center>   
</body>
</html>