<?php

$nothing = null;
$something = '';
$array = [1, 2, 3];

if(isset($nothing)) {
	echo '$nothing is SET'. PHP_EOL;
}
else {
	echo '$nothing is not SET' . PHP_EOL;
}

if(isset($something)) {
	echo '$something is SET' . PHP_EOL;
}

$array = serialize($array);

	echo $array . PHP_EOL;

$array = unserialize($array);

	echo $array . PHP_EOL;




