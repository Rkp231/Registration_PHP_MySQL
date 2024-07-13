<?php
require_once "connection.php";	
	
session_start();	

if ($_SERVER["REQUEST_METHOD"] == "POST")
 {
	$cuser=$_POST["uname"];
	$cpass=$_POST["pwd"];
	$sql="select * from registration where tname ='".$cuser."' and tpassword ='".$cpass."'";
	$result=$conn->query($sql);
    if($result->num_rows > 0)
    {
        $row = $result->fetch_array();
        setcookie("name",$cuser,time()+3600);
		setcookie("pass",$cpass,time()+3600);
	    $_SESSION["r1"]=$row[1];
		$_SESSION["r5"]=$row[5];
		$_SESSION["r8"]=$row[8];
		$_SESSION["r9"]=$row[9];
		$_SESSION["r10"]=$row[10];
		
        header("location:details.php");
		exit();
	}
	else
	{  

      echo "Wrong login or password.";
	  echo '<a href="login.php"'
    }
 }
 else

 {
	header("location:login.php");
	
 }



?>