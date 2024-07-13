<?php
session_start();
session_destroy();
if(isset($_COOKIE["name"]) && isset($_COOKIE["pass"]))
	{
		$cuser=$_COOKIE["name"];
		$cpass=$_COOKIE["pass"];
		setcookie("name",$cuser,time()-1);
		setcookie("pass",$cpass,time()-1);
		header("location:login.php");
		exit();
		//echo "you are logged out of system.";
		}

//echo "you are logged out of system.";
?>

