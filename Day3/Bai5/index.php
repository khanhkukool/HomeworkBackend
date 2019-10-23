<?php
$a = array(
    "a"=>array(
        "b"=>0,
        "c"=>1
   ),
   "b"=>array(
       "e"=>2,
       "o"=>array(
           "b"=>3
       )
   )
);
echo "<h3>Hãy lấy giá trị = 3 mà có key là b từ mảng trên</h3>";
echo $a["b"]["o"]["b"];
echo "<br>";
echo "<h3>Hãy lấy giá trị = 1 mà có key là c từ mảng trên</h3>";
echo $a["a"]["c"];
echo "<br>";
echo "<h3>Hãy lấy thông tin của phần tử có key là a</h3>";
foreach ($a["a"] as $value){
    echo $value;
    echo "<br>";
}

