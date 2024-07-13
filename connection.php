<?php
$conn = new mysqli("localhost", "root", "", "edb");
if(!$conn)
{
	echo $conn->connect_error;
}
 ?>