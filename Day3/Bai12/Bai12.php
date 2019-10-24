<?php
$numbers = [
    'key1' => 12,
    'key2' => 30,
    'key3' => 4,
    'key4' => -123,
    'key5' => 1234,
    'key6' => -12565,
];
$first = $numbers['key1'];
$last = end($numbers);
$max = max($numbers);
$min = min($numbers);
$sum = 0;
foreach ($numbers as $value) {
    $sum += $value;
}
echo "First = $first" . "<br>" . "Last = $last" . "<br>" . "Max = $max" . "<br>" . "Min = $min" . "<br>" . "Sum = $sum" . "<br>";
// Sap xep gia tri
sort($numbers);
rsort($numbers);
echo "<pre>";
print_r($numbers);
echo "</pre>";
//Sap xep key
ksort($numbers);
rsort($numbers);
echo "<pre>";
print_r($numbers);
echo "</pre>";