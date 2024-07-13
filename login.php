<?php
	session_start();
	if(isset($_COOKIE["name"]) && isset($_COOKIE["pass"]))
	{
		$cuser=$_COOKIE["name"];
		$cpass=$_COOKIE["pass"];
		}
		
		
?>
<html>
    <head>
	</head>
	<body bgcolor="red">
	<fieldset>
            <legend>LOGIN FORM</legend>
       

<br><br><br><br><br><br><center><form action="validate.php" method="POST">
            Username : <input type="text" name="uname" ><br><br>
            Password : <input type="password" name="pwd" ><br><br>
			
            <input type="submit" value="Login" />
       </form></center>
</fieldset>
</body>
</html>
