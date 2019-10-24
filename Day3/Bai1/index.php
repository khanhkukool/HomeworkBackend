<?php
$arrs = [2, 5, 6, 9, 2, 5, 6, 12 ,5];
function sum($array = []){
    $sum = 0;
    foreach ($array as $value){
        $sum += $value;
    }
    return $sum;
}
function hieu($array = []){
    $hieu = 0;
    foreach ($array as $value){
        $hieu -= $value;
    }
    return $hieu;
}
function tich($array = []){
    $tich = 1;
    foreach ($array as $value){
        $tich *= $value;
    }
    return $tich;
}
function thuong($array = []){
    $thuong = 0;
    foreach ($array as $value){
        $thuong /= $value;
    }
    return $thuong;
}
function showResult($string = "", $array = []){
    $showString = "";
    foreach ($array as $key => $value){
        if($key < (count($array) - 1)){
            $showString .= "$value" . " $string ";
        }
        else $showString .= "$value = ";
    }
    return $showString;
}
echo "Tổng các phần tử = " . showResult("+",$arrs) . sum($arrs);
echo "<br>";
echo "Hiệu các phần tử = " . showResult("-",$arrs) . hieu($arrs);
echo "<br>";
echo "Tích các phần tử = " . showResult("*",$arrs) . tich($arrs);
echo "<br>";
echo "Thương các phần tử = " . showResult("/",$arrs) . thuong($arrs);
