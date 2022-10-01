<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Array Exercises Part 2</title>
</head>

<body>
<h3>COUNTING DUPLICATE ELEMENTS IN AN ARRAY</h3>

<?php 

$array=array(1,2,2);
print_r(array_count_values($array));

?>

<h3>FREQUENCY OF EACH ELEMENT IN AN ARRAY</h3>

<?php
$a=array(6,1,32,54,16,48,92);
$fr=array_fill(0, count($a), 0);
$check= -1;

for($i=0; $i < count($a); $i++);
{
	$count = 1;
	for($j = $i+1; $j < count($a); $j++)
	{
		if($a[$i] == $a[$j])
		{
			$count++;
			$fr[$j] = $check;
		}
	}

}

echo("The Array Elements are: ");
foreach( $a as $b )
{
echo $b."  ";
}
 


echo (" frequency of given array elements: " );
for( $i = 0; $i < count($fr); $i++)
{
if($fr[$i] != $check)
{
echo( $a[$i] ." occurs " );

echo(" ");
}
}
return 0;
?>

<h3>ODD AND EVEN INTEGERS IN SEPARATE ARRAY</h3>

<?php

$input = array(4, 3, 6, 5, 8, 7, 2);

function oddCmp($input)
{
    return ($input & 1);
}
  
function evenCmp($input)
{
    return !($input & 1);
}
  
$odd = array_filter($input, "oddCmp");

$even = array_filter($input, "evenCmp");
  
$odd = array_values(array_filter($odd));
  
$even = array_values(array_filter($even));

print"Odd array :\n";
print_r($odd);
  
print"\nEven array :\n";
print_r($even);


?>
</body>
</html>