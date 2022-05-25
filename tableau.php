<?php

$montableau = array(
    1 => "ce que je veux",
    2 => "et du bonus"
);

$montableau2 = [
    1 => "mon 2ème tableau",
    2 => $montableau
];

print_r($montableau2);
//$montableau

for ($i=1 ; $i<=sizeof($montableau) ; $i++) {
    print($montableau[$i]);
}

foreach ($montableau as $key => $value) {
    print($value);
}


$x = 75;
$p = 25;
    

function addition() {
    $GLOBALS ['z'] = $GLOBALS ['x'] + $GLOBALS ['p'] ;
}

addition();
echo $z;
