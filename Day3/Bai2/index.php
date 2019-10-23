<?php
$arrs = ['đỏ', 'xanh', 'cam', 'trắng'];
$data0 = $arrs[0]; //đỏ
$data1 = $arrs[1]; //xanh
$data2 = $arrs[2]; //cam
$data3 = $arrs[3]; //trắng
$resultString = "<i>Màu <b>$data0</b> là màu yêu thích của Anh, 
<b>$data3</b> là màu yêu thích của Sơn, 
<b>$data2</b> là màu yêu thích của Thắng, 
còn màu yêu thích của tôi là màu <b>$data1</b></i>";
echo "<br />";
echo $resultString;