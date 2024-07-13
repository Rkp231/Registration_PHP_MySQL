<?php
require_once "connection.php";
	
if($result = $conn->query("SELECT * FROM registration"))
{
    if($result->num_rows > 0)
	{
        echo "<center><table border=2>";
            echo "<tr>";
                echo "<th>id</th>";
                echo "<th>NAME</th>";
                echo "<th>PASSWORD</th>";
				echo "<th>GENDER</th>";
				echo "<th>ADDRESS</th>";
				echo "<th>STATE</th>";
				echo "<th>DOB</th>";
				echo "<th>MOBILE</th>";
				echo "<th>EMAIL</th>";
				echo "<th>INDUSTRY</th>";
				echo "<th>PHOTO</th>";
			    
            echo "</tr>";
        while($row = $result->fetch_array())
		{
            echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["tname"] . "</td>";
                echo "<td>" . $row["tpassword"] . "</td>";
                echo "<td>" . $row["tgender"] . "</td>";
				echo "<td>" . $row["taddress"] . "</td>";
				echo "<td>" . $row["tstate"] . "</td>";
				echo "<td>" . $row["tdob"] . "</td>";
				echo "<td>" . $row["tmobile"] . "</td>";
				echo "<td>" . $row["temail"] . "</td>";
				echo "<td>" . $row["tindustry"] . "</td>";
				echo "<td>" . $row["tphoto"] ."</td>";
				echo "<td><a href='update.php?id=". $row['id'] ."'>Edit </a></td>";
				echo "<td><a href='delete.php?id=". $row['id'] ."'>Delete </a></td>";
            echo "</tr>";
        }
        echo "</table> </center>";
       
    } 
	else
	{
        echo "No records were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}
 ?>
 <html>
		<body>
		<center><a href="form.html"><br><br><button type="button">BACK TO MAIN FORM</button></a><br><br>
		</center>	</body>
			</html>