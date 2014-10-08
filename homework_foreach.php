<?php 
 
//http://app.codeup.com/php_ii/control-structures-ii/foreach-with-keys.html
 
$trees = array(
    'Scale' => array(
        'genus' => 'Lepidodendron',
        'species' => 'freakius',
        'extinct' => true,
    ),
    'Lambert Pine' => array(
        'genus' => 'Pinus',
        'species' => 'lambertiana',
        'extinct' => false
    ),
    'English Oak' => array(
        'genus' => 'Quercus',
        'species' => 'robur',
        'extinct' => false
    ),
    'Coast Redwood' => array(
        'genus' => 'Sequoia',
        'species' => 'sempervirens',
        'extinct' => false
    )
);

foreach($trees as $type => $specs) {
   
    echo "$type ($specs[genus] $specs[species]) \n";
        if($specs[extinct] != True) {
            echo "Extinct? No \n";
        } 
        else {
            echo "Extinct? Yes \n";
        }
           
     echo "------------------- \n";
}
 


// Achieve the following output:
 
// Scale Tree (Lepidodendron freakius)
// Extinct? Yes
// ---------------
// Lambert Pine Tree (Pinus lambertiana)
// Extinct? No
// ---------------
// English Oak Tree (Quercus robur)
// Extinct? No
// ---------------
// Coast Redwood Tree (Sequoia sempervirens)
// Extinct? No
// ---------------
 
?>