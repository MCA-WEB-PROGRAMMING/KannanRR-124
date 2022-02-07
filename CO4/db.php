<html>

<head> </head>

<body>
	<center>
		<div>
			<div style="width:47%;padding:20px;float:left">
				<form method="POST">
					<table>
						<tr>
							<td>Enter Name : </td>
							<td>
								<input type="text" placeholder="Name" name="user" />
							</td>
						</tr>
						<tr>
							<td>
								<p>Mobile Number :</p>
							</td>
							<td>
								<input type="text" placeholder="number" name="num" />
							</td>
						</tr>
						<tr>
							<td>
								<p>Email :</p>
							</td>
							<td>
								<input type="text" placeholder="Email" name="email" />
							</td>
						</tr>
						<tr>
							<td>
								<input type="text" placeholder="Username" name="user">
							</td>
							<td>
								<input type="text" placeholder="Password" name="pass">
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<center>
									<input type="submit" name="s">
								</center>
							</td>
						</tr>
					</table>
				</form>
				<?php
        if(isset($_POST["s"]))
        {
            $con=mysqli_connect("localhost","root","","MCA");
            $error=0;
            $name=$_POST["user"];
            $username=$_POST["user"];
            $pass=$_POST["pass"];
            $num=$_POST["num"];
            $email=$_POST["email"];
            $C1=preg_match("/[a-z]/",$pass);
            $C2=preg_match("/[A-Z]/",$pass);
            $C3=preg_match("/[0-9]/",$pass);
            $C5=preg_match("/[0-9]/",$num);
            $C4=preg_match("/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/",$email);
            
            if(!($C1 && $C2 && $C3) && !strlen($pass)<8)
            {
                echo "Password not strong";
                $error=1;
            }
            ?>
					<br>
					<?php
            if(!($C5) && $num!="")
            {
                echo "Enter number only in Number field";
                $error=1;
            }
            ?>
						<br>
						<?php
            if(!($C4) && $email!="")
            {
                echo "Enter email in correct format";
                $error=1;
            }
            ?>
							<br>
							<?php
            if($username=="" || $pass=="" || $num=="" || $email=="" || $name=="")
            {
                echo "Enter all data";
                $error=1;
            }
            if(!$error)
            {
                
                $query="INSERT INTO reg (NAME,NUMBER,EMAIL,USERNAME,PASSWORD) VALUES('{$name}','{$num}','{$email}','{$username}','{$pass}')";  
                mysqli_query($con,$query);
            }
        }
    ?>
			</div>
			<div style="width:47%;float:left"> 
            <h3>Content in DB</h3>
            <?php
            $con=mysqli_connect("localhost","root","","MCA");
            $q2="select * from reg";
            $q3="SELECT `COLUMN_NAME` FROM `INFORMATION_SCHEMA`.`COLUMNS`WHERE `TABLE_NAME`='reg'";
            $x1=mysqli_query($con,$q3);
            $rnum=mysqli_num_rows($x1);
            $z=1;
            echo "<table border=1px><tr>";
            while($result1=mysqli_fetch_array($x1))
            {
                if($z>=$rnum)
                {
                    break;
                    
                }
                echo "<th>{$result1[0]}</th>";
                $z++;
            }
            echo "</tr><tr>";
            $x=mysqli_query($con,$q2);
            while($result=mysqli_fetch_array($x))
            {
                echo "<tr><td>{$result["ID"]}</td>";
                echo "<td>{$result["NAME"]}</td>";
                echo "<td>{$result["NUMBER"]}</td>";
                echo "<td>{$result["EMAIL"]}</td>";
                echo "<td>{$result["USERNAME"]}</td></tr>";
            }
            echo "</tr></table>";
            ?>
        </div>
		</div>
	</center>
</body>

</html>