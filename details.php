<?php
session_start();
echo  "hello Mr.".$_SESSION["r1"].".Your address is ".$_SESSION["r5"].".Your mobile no is ".$_SESSION["r8"].".Your industry is ".$_SESSION["r10"];

?>
<html>
<body><br><br>
<center><a href="logout.php"><br><br><button type="button">Log out</button></a><br><br>
</center>	</body>
</html>