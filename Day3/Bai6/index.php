<?php
$keys = array(
    "field1"=>"first",
    "field2"=>"second",
    "field3"=>"third"
);
$values = array(
    "field1value"=>"dinosaur",
    "field2value"=>"pig",
    "field3value"=>"platypus"
);
//$keysAndValues = array_combine($keys,$values);
$keysAndValues = array();
for ($i=0; $i < count($keys); $i++) {
    $keysAndValues[$keys['field'.($i+1)]] = $values['field'.($i+1).'value'];
}
echo "<pre>";
print_r($keysAndValues);
echo "</pre>";

