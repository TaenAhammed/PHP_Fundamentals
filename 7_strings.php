<?php

$name = "My name is Taen Ahammed";

echo (strlen($name) . "\n");

echo (str_word_count($name) . "\n");

echo (strrev($name) . "\n");

echo (strpos($name, 'Taen') . "\n");

strrev($name);
echo (str_replace('Taen', 'Tarif', $name));
