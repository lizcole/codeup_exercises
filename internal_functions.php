<?php

$nothing = NULL;
$something = '';
$array = [1, 2, 3];


// if(isset($nothing)) {
// 	echo '$nothing is SET'. PHP_EOL;
// }
// else {
// 	echo '$nothing is not SET' . PHP_EOL;
// }

// if(isset($something)) {
// 	echo '$something is SET' . PHP_EOL;
// }

$array = serialize($array);

	echo $array . PHP_EOL;

$array = unserialize($array);

	echo $array . PHP_EOL;



function check_set_or_empty($value) {

	if(isset($value)){
		return "This value is SET";
	}
	else {
		return "This value is not SET";
	}
}

echo check_set_or_empty($nothing) . PHP_EOL;
echo check_set_or_empty($something) . PHP_EOL;

