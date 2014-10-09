<?php


for ($i = 1; $i <= 100; $i++) {
    echo $i . "\n";
    if ($i == 5) {
        break; //this break will have it run up to 5 and then it will stop it, even 
        //though it is set to run till <= 100; you can set conditions for breaks (/, *, %, etc.)
    }
}

//"continue" serves as a condition check for the code; anything below the "continue" won't print if 
//it is true.
for ($i = 1; $i <= 10; $i++) {
    echo $i . "\n";
    if ($i % 2 == 0) {
        continue; //acts as a "skip" if # is divisible by 2
    }
    echo "^ that is an odd number.\n";
}


//Breaking nested arrays

$numbers = array(1, 2, 3, 4, 5);
// Loop 1
foreach ($numbers as $key => $value) {
    echo "{$value}\n";
    // Loop 2
    for ($i = 1; $i <= 10; $i++) {
        if ($i == 2) {
            echo "{$i}\n";
            break 2; //this will "break" both loops once the 'for' loop  reaches "2"
            //if you just do one break [break] then it will run the 'foreach' loop till 
            //it hits '5' and while the 'for' loop runs '2' over and over agian.
        }
    }
}
echo "done!\n";





