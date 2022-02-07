<html>

<head> </head>

<body>
	<center>
		<div>
			<div style="width:47%;padding:20px;float:left">
				<form method="POST">
					<table>
						<tr>
							<td> Emp Id : </td>
							<td>
								<input type="text" name="id" />
							</td>
						</tr>
						<tr>
							<td>
								<p>Name :</p>
							</td>

							<td>
								<input type="text" name="name" />
							</td>
						</tr>
						<tr>
							<td>
								<p>Job :</p>
							</td>
							<td>
								<input type="text" name="job" />
							</td>
						</tr>
                        <tr>
							<td>
								<p>Manager Id :</p>
							</td>
							<td>
								<input type="text"  name="mid" />
							</td>
						</tr>
                        <tr>
							<td>
								<p>salary :</p>
							</td>
							<td>
								<input type="text" name="salary" />
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
            $name=$_POST["name"];
            $job=$_POST["job"];
            $salary=$_POST["salary"];
            $id=$_POST["id"];
            $mid=$_POST["mid"];
            $check="select id from book where id={$id}";
            $c=mysqli_query($con,$check);
            if(mysqli_num_rows($c)==0)
            {
                $query="INSERT INTO Employee (id,name,job,salary,mid) VALUES('{$id}','{$name}','{$job}','{$salary}','{$mid}')";  
                mysqli_query($con,$query); 
            }
            else{
                echo "Employee already exists";
            }
            mysqli_close($con);
            
        }
    $con=mysqli_connect("localhost","root","","MCA");
    $check="select * from Employee where salary > 35000";   
    $c=mysqli_query($con,$check);
    echo "<table  border=1px><tr><th>Name</th><th>Salary</th></tr>";
    if(mysqli_num_rows($c)!=0)
    {
    while($result=mysqli_fetch_array($c))
    {
        echo "<tr><td>{$result["name"]}</td>";
        echo "<td>{$result["salary"]}</td>";
    }
    }
    mysqli_close($con);
    ?>
		</div>
	</center>
</body>

</html>