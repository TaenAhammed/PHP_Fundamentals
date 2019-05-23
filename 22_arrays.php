<?php
//************** Indexed array **************//
$numbers = [10, 40, 50, 60, 30, 10];

echo (array_sum($numbers) . "\n");

// Array length
echo (count($numbers) . "\n");
$length = count($numbers);

for ($i = 0; $i < $length; $i++)
    echo ($numbers[$i] . " \n");

//******************* Associative Array ********************//
$ages = [
    "Taen" => 20,
    "Tamim" => 10,
    "Tarif" => 5
];

foreach ($ages as $name => $age)
    echo ("{$name}: {$age} \n");


// ********************* Multi Dimensional Array ********************//
$persons = [
    ["Taen", "Phulpur", 20],
    ["Soboj", "Mymensingh", 30],
    ["Tofain", "HalouaGhat", 8]
];

for ($row = 0; $row < count(($persons)); $row++) {
    echo ("Row: {$row} \n");
    for ($col = 0; $col < count($persons[$row]); $col++) {
        echo ("Col: {$col}:::" . $persons[$row][$col] . "\n");
    }
}
