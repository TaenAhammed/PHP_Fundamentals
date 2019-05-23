<?php

// Global variable
$x = 330;

function scope()
{
    global $x;
    $y = 10;
    echo ("{$y} \n");
    echo ($x);
}
scope();
