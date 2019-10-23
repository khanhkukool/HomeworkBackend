<?php
$array = [12, 5, 10, 125, 130, 60, 90, 345, -123, -125, 0];
foreach ($array as $value){
    if(($value % 5 == 0) && ($value >= 100) && ($value <= 200))
        echo $value . "<br>";
}