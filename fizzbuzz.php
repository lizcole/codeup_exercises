<?php

for ($a = 1; $a <= 100; $a++) {
 
	if($a % 3 == 0 && $a % 5 == 0) {
		echo "fizzbuzz \n";	
	}elseif($a % 3 == 0) {
		echo "fizz \n";
	}elseif($a % 5 == 0) {
		echo "buzz \n";
	}else{
		echo "$a \n";
	}

}


//why does the order matter?
//why do you have to use the modulos?
//why does the echo for the 'for' statement need to be at the end?
//








