<?php

// $x = 1;
// while ($x < 10) {
//     echo ($x . "\n");
//     $x++;
// }

// $y = 10;
// do {
//     echo ($y . "\n");
//     $y++;
// } while ($y < 5);


// Where we don't need initialization & increment there we can use while loop otherwise we can for loop.

$a = 10;

while ($a > 0) {
    $a = (int)($a / 2);
    echo "Divided <br/>";
}
