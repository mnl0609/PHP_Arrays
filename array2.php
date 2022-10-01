<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Array Exercises part 2</title>
</head>
<body>
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