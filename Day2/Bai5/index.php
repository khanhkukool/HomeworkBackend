<?php
    $n = 10;
    $sum = 0;
    for ($i = 1;$i <= $n; $i++){
        $sum += (1/$i);
    }
    $string = "";
for ($i = 1;$i <= $n; $i++){
    if($i == $n){
        $string .= "1/$i";
    }
    else $string .= "1/$i + ";
}
echo "<b>S($n) = $string = $sum</b>";
?>