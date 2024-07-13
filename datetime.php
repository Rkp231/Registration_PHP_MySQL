<?php
	
	echo date("y");
	echo strtotime("1992");
	$d=mktime(11, 14, 54, 12, 23, 2014);
echo "Created date is " . date("Y-m-d h:i:sa", $d);

$d=strtotime("tomorrow");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("next Saturday");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("10:30pm +3 Months");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$startdate = strtotime("15 april 2020");
$enddate = strtotime("+40 days", $startdate);

while ($startdate <= $enddate) {
  echo date("M d", $startdate) . "<br>";
  $startdate = strtotime("+5 day", $startdate);
}
echo date("r")
?>