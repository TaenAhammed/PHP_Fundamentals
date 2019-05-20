<?php
define("PI", 3.1416);

echo ("Value of PI: {PI} \n"); // Outputting constant inside 2nd bracket isn't possible.
echo ("Value of PI: " . PI . "\n");

echo (constant("PI") . "\n");

$constant = 'constant';

echo ("Value of PI: {$constant('PI')} \n");

define("NAME", "Tarif Ahammed", true);
echo (name);
