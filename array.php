<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>HANDS ON EXERCISES ODL</title>
</head>
<body>
<h3>Php Array Exercise 1</h3>

<?php


$weather = array ("Rain","Sunshine","Clouds","Hail","Sleet","Snow","Wind") ;

echo "We've seen all kinds of weather this month. At the beginning of the month, we had "
. $weather = strtolower("$weather[5]"). " and ". $weather = strtolower("$weather[6].") . " Then came " . $weather = strtolower(" $weather[1]") . " with a few " . $weather = strtolower("$weather[2] and some ") . $weather = strtolower("$weather[0].") . " At least we didn't get any " . $weather = strtolower("$weather[3] or ") . $weather = strtolower("$weather[4].");


?>



<h3>Php Array Exercise 2</h3>

<?php

$cities = array("Tokyo","Mexico City","New York City","Mumbai","Seoul","Shanghai","Lagos","Buenos Aires","Cairo","London");
$list = implode(', ', $cities);

for ($i=0; $i < 94; $i++) { 
	print($list[$i]);
}


if( count( $cities) > 0) {
	sort($cities);
    echo '<ul>';
    echo '<li>' . implode( '</li><li>', $cities) . '</li>';
    echo '</ul>';
    echo "\n";
}

array_push($cities, "Los Angeles","Calcutta","Osaka","Beijing");

if( count( $cities) > 0) {
	sort($cities);
    echo '<ul>';
    echo '<li>' . implode( '</li><li>', $cities) . '</li>';
    echo '</ul>';
    echo "\n";
}
?>

</body>
</html>



