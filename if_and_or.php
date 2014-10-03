<?php

$x = 0;
$y = 5;
$z = 10;

if ($x < $y && $y < $z) {
	echo "{$x} < {$y} < {$z} \n";
}

if ($x > 0 || $x < $z) {
	echo "$x is greater than 0 OR less than 10 \n";
}

if ($y > 0 || $y < $z) {
	echo "$y is greater than 0 OR less than 10 \n";
}

if ($z > 0 || $z < $z) {
	echo "$z is greater than 0 OR less than 10 \n";
}

if ($x > 0 && $x < $z) {
	echo "$x is greater than 0 OR less than 10 \n";
}

if ($y > 0 && $y < $z) {
	echo "$y is greater than 0 OR less than 10 \n";
}

if ($z > 0 && $z < $z) {
	echo "$z is greater than 0 OR less than 10 \n";
}

?>