<?php
$array = ['programming', 'php', 'basic', 'dev', 'is', 'program is PHP'];
sort($array, SORT_STRING);
foreach ($array as $value){
    echo $value;
    echo "<br>";
}
