<?php
require_once "connection.php";
	
	
	$sql="delete from registration where id=".$_GET["id"];

	$result=$conn->query($sql);
	 
  header("Location:showalldata.php");
?>