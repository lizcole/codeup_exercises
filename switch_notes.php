<?php
//long way of doing this instead use "switch"
$value = 'Hello!';

if (is_int($value)) {
    echo '$value is an integer';
} elseif (is_float($value)) {
    echo '$value is a float';
} elseif (is_bool($value)) {
    echo '$value is a boolean';
} elseif (is_array($value)) {
    echo '$value is an array';
} elseif (is_null($value)) {
    echo '$value is null';
} elseif (is_string($value)) {
    echo '$value is a string';
}

//SWITCH makes repetative 'elseif's' easier 

$value = 'Hello';

//GETTYPE = gets the type of variable and will return possibly (bool, integer, string, etc.)
//gettype([$set variable]) - gettype will run through the loop and match gettype to what is
//set after case and compare it to the set variable.
switch(gettype($value)) {
	case 'integer':
        echo '$value is an integer';
        break;
    case 'float':
        echo '$value is a float';
        break;
    case 'boolean':
        echo '$value is a boolean';
        break;
    case 'array':
        echo '$value is an array';
        break;
    case 'null':
        echo '$value is null';
        break;
    case 'string':
        echo '$value is a string';
        break;
}

//'DEFAULT' case is the same as 'else' in a 'ifelse' loop (ends the loop)

switch(gettype($value)) {
    case 'string':
        echo '$value is a string';
        break;
    default: // keep default at the end for best practice
        echo '$value is not a string';
        break;
}

//DATE FUNCTION - http://php.net/manual/en/function.date.php
// there are multiple different formats for 'date' check online to find the format
// that you want. 
date('F d, Y'); 
//will print out todays date in Month 0, 0000



