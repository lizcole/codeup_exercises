<?php

function add($a, $b) {
    
    if(checkInput($a, $b)) {
		return $a + $b;
	}
	else {
		return genError($a, $b);
	}
}

echo add(4, ducky) . PHP_EOL;

function subtract($a, $b) {

	if(checkInput($a, $b)) {
    	return $a - $b;
	}
	else {
		return genError($a, $b);
	}
}

echo subtract(4, 5) . PHP_EOL;

function multiply($a, $b) {
	if(checkInput($a, $b)) {
	return $a * $b;	
	}
	else {
		echo genError($a, $b);
	}
}

echo multiply(4, 5) . PHP_EOL;

function divide($a, $b) {
   if($b == 0) {
		return "Error: Please enter number higher than 0 to divide by";
		return false;
	}
	elseif(checkInput($a, $b)) {
    	return $a / $b;
    }
	else {
		echo genError($a, $b);
	}

}

echo divide(0, 90) . PHP_EOL;

function modulus($a, $b) {
	if(checkInput($a, $b)) {
		return ($a % $b);
	} else {
		echo genError($a, $b);
	}	
}

echo modulus(5, 'ducky') . PHP_EOL;

function checkInput($a, $b){
	if( is_numeric($a) && is_numeric($b)) {
    	return true;
    }
	else {
		return false;
	}
}

function genError($a, $b) {
	return "Error: Please input only numeric values. Note you entered $a for \$a, and $b for \$b.";
}




?>