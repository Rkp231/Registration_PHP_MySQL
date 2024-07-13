<?php
	

require_once "connection.php";

	   $iid=$_POST["id1"];
         $update="update registration set 
			   tname='".$_POST["n1"]."',
			   tpassword='".$_POST["p1"]."',
			   tcpassword='".$_POST["p2"]."',
			   tgender='".$_POST["g1"]."',
			   taddress='".$_POST["a1"]."',
			   tstate='".$_POST["s1"]."',
			   tdob='".$_POST["d1"]."',
			   tmobile='".$_POST["m1"]."',
			   temail='".$_POST["e1"]."',
			   tindustry='".$_POST["i1"]."',
			   tphoto='".$_POST["p1"]."'
			   
			   where id=".$iid;	 
        if ($conn->query($update)===true) 
	{
		echo "Record updated";	   
	}
	else
	{  
        echo $conn->error;
		}

	?>
	<html>
		<body>
		<center><a href="form.html"><br><br><button type="button">BACK TO MAIN FORM</button></a><br><br>
		</center>	</body>
			</html>