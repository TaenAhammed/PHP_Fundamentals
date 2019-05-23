<?php

$x = 10;
$y = 20;

function superGlobal()
{
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}
superGlobal();
echo ("{$z} <br/>");

// Returns the filename of the currently executing script
echo $_SERVER['PHP_SELF'] . '<br/>';

// Returns the name of the host server
echo $_SERVER['SERVER_NAME'] . '<br/>';

// Returns the path of the current script
echo $_SERVER['SCRIPT_NAME'] . '<br/>';

// Returns the client information
echo $_SERVER['HTTP_USER_AGENT'] . '<br/>';

// Returns the IP address of the host server
echo $_SERVER['SERVER_ADDR'];
