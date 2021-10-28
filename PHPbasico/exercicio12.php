<?php
$num = [1,2,5,4,6,1,4,8,9,7,4,2,5,4,6,2];
$total = 0;

foreach ($num as $key => $value) {
    $total = $total + $value;
}

$media = $total / count($num);

print($media);
var_export($num);
?>