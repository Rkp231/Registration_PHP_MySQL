
<?php
$age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);
echo "Peter is " . $age. " years old.";
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
print_r(array_change_key_case($age,CASE_UPPER));
$pets=array("a"=>"Cat","B"=>"Dog","c"=>"Horse","b"=>"Bird");
print_r(array_change_key_case($pets,CASE_UPPER));
$a = array(
  array(
    'id' => 5698,
    'first_name' => 'Peter',
    'last_name' => 'Griffin',
  ),
  array(
    'id' => 4767,
    'first_name' => 'Ben',
    'last_name' => 'Smith',
  ),
  array(
    'id' => 3809,
    'first_name' => 'Joe',
    'last_name' => 'Doe',
  )
  
);

$last_names = array_column($a, 'last_name', 'id');
print_r($last_names);
$a=array(5,5);
echo(array_product($a));


$people = array("Peter", "Joe", "Glenn", "Cleveland");

echo current($people) . "<br>"; 
echo next($people) . "<br>"; 
echo current($people) . "<br>";
echo prev($people) . "<br>"; 
echo end($people) . "<br>"; 
echo prev($people) . "<br>";
echo current($people) . "<br>";
echo reset($people) . "<br>"; 
echo next($people) . "<br>"; 

print_r (each($people)); 
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");

foreach($age as $x=>$x_value)
  {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
  }
  
  
  $pets=array("a"=>"Cat","B"=>"Dog","c"=>"Horse","b"=>"Bird");
print_r(array_change_key_case($pets,CASE_UPPER));

$a=array("A","Cat","Dog","A","Dog");
print_r(array_count_values($a));


$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"green","g"=>"blue");

$result=array_diff($a1,$a2);
print_r($result);

$a1=array_fill(3,4,"blue");
$b1=array_fill(0,1,"red");
print_r($a1);
echo "<br>";
print_r($b1);

$a=array("a"=>"red","b"=>"green","c"=>"blue");
echo array_search("red",$a);

$a=array(5,15,25);
echo array_sum($a);

$a=array("red","green");
print_r(array_pad($a,5,"blue"));


$a=array("red","green","blue");
array_pop($a);
print_r($a);


$a=array(5,5,2,10);
echo(array_product($a));


$a1=array("red","green");
$a2=array("blue","yellow");
print_r(array_merge($a1,$a2));

?>