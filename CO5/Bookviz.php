<html>

<head> </head>

<body>
	<center>
		<div>
			<div style="width:47%;padding:20px;float:left">
				<form method="POST">
					<table>
						<tr>
							<td> Accession number : </td>
							<td>
								<input type="text" name="num" />
							</td>
						</tr>
						<tr>
							<td>
								<p>Title :</p>
							</td>

							<td>
								<input type="text" name="title" />
							</td>
						</tr>
						<tr>
							<td>
								<p>Authors :</p>
							</td>
							<td>
								<input type="text" name="author" />
							</td>
						</tr>
                        <tr>
							<td>
								<p>Edition :</p>
							</td>
							<td>
								<input type="text"  name="edition" />
							</td>
						</tr>
                        <tr>
							<td>
								<p>Publisher :</p>
							</td>
							<td>
								<input type="text" name="pub" />
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
            $title=$_POST["title"];
            $author=$_POST["author"];
            $pub=$_POST["pub"];
            $num=$_POST["num"];
            $edition=$_POST["edition"];
            $check="select id from book where id={$num}";
            $c=mysqli_query($con,$check);
            if(mysqli_num_rows($c)==0)
            {
                $query="INSERT INTO book (title,author,publisher,edition) VALUES('{$title}','{$author}','{$pub}','{$edition}')";  
                mysqli_query($con,$query); 
            }
            else{
                echo "Book already exists";
            }
            mysqli_close($con);
            
        }
    ?>
			</div>
            <div style="width:47%;padding:20px;float:left">
			<form  method="POST">
                Title : <input type="text" name="title1">
                <input type="submit" name="s2">
            </form>
    </div>
    <?php
    if(Isset($_POST["s2"]))
    {
        
    $title=$_POST["title1"];
    $con=mysqli_connect("localhost","root","","MCA");
    $check="select * from book where title='{$title}'";   
    $c=mysqli_query($con,$check);
    echo "<table  border=1px><tr><th>Accession number</th><th>Title</th><th>Author</th><th>Publisher</th><th>Edition</th></tr>";
    if(mysqli_num_rows($c)!=0)
    {
    while($result=mysqli_fetch_array($c))
    {
        echo "<tr><td>{$result["id"]}</td>";
        echo "<td>{$result["title"]}</td>";
        echo "<td>{$result["author"]}</td>";
        echo "<td>{$result["publisher"]}</td>";
        echo "<td>{$result["edition"]}</td></tr>";
    }
    }
    else{
        echo "Book doesnt't exists";
    }
    mysqli_close($con);
    }
    
    ?>
		</div>
	</center>
</body>

</html>