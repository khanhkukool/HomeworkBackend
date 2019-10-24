<?php
function  change($array = []){
    $changeString =[];
    foreach ($array as $key => $value){
        $changeString[$key] = strtoupper($value);
    }
    print_r($changeString);
    echo "<br>";
}

$arrs1 = ['a', 'b', 'ABC'];
$arrs2 = ['1', 'B', 'C', 'E'];
$arrs3 = ['a', 0, null, false];
change($arrs1);
change($arrs2);
change($arrs3);
