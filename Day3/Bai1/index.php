<?php
    $arrs = [2, 5, 6, 9, 2, 5, 6, 12, 5];
    function result($arrs = []){
        foreach($arrs as $key => $value) {
            $Tong += $value;
            $showTong = "";
            if($key < (count($arrs) - 1))
                $showTong = $value . "+";
            else $showTong += $value;
        }
    }
    result($arrs);

?>