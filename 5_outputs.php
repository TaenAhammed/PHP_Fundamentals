<?php

$firstName = "Taen";
$lastName = "Ahammed";
var_dump($firstName, $lastName);

echo ("My full name is {$firstName} {$lastName}. \n");
echo ("My FULL name is " . strtoupper($firstName) . " " . strtoupper($lastName) . ". \n");

printf("My full name is %s %s", $firstName, $lastName . ". \n");
printf("My %s name is %s %s", "FULL", strtoupper($firstName), strtoupper($lastName) . ". \n");

$info = "
My Name 
is
Taen
Ahammed
";

echo ($info);
