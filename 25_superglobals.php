<?php

$x = 10;
$y = 20;

function superGlobal()
{
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}
superGlobal();
echo ($z);
