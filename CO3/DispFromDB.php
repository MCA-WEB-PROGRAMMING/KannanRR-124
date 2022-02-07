<html>
<head>
</head>
<body>
    <h2>Employe Details</h2>
    <?php
         $con=mysqli_connect("localhost","root","","MCA");
         $check="select * from Employee where salary";   
         $c=mysqli_query($con,$check);
         echo "<table  border=1px><tr><th>Name</th><th>Job</th><th>Salary</th><th>Manager id</th></tr>";
         if(mysqli_num_rows($c)!=0)
         {
         while($result=mysqli_fetch_array($c))
         {
             echo "<tr><td>{$result["name"]}</td>";
             echo "<td>{$result["job"]}</td>";
             echo "<td>{$result["salary"]}</td>";
             echo "<td>{$result["mid"]}</td></tr>";
         }
         }
         mysqli_close($con);
    ?> 
</body>
</html>