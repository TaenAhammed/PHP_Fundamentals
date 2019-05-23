<?php

$names = ["Taen", "Abdullah", "Zaman", "Rakib", "Jannat"];

sort($names);
rsort($names);

for ($i = 0; $i < count($names); $i++) {
    echo ($names[$i] . "\n");
}

$numbers = [20, 40, 2, 5, 28, 4];

sort($numbers);
rsort($numbers);

for ($i = 0; $i < count($numbers); $i++) {
    echo ($numbers[$i] . "\n");
}

$ages = ["Taen" => 20, "Zaman" => 22, "Abir" => 23];

asort($ages);
ksort($ages);

foreach ($ages as $name => $age) {
    echo ("Name: {$name}, Age: {$age} \n");
}
