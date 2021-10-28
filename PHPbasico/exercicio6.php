<?php
$val1 = $_GET["val1"];
$val2 = $_GET["val2"];
$val3 = $_GET["val3"];
$val4 = $_GET["val4"];
$val5 = $_GET["val5"];
$val6 = $_GET["val6"];

$media = ($val1 + $val2 + $val3 + $val4 + $val5 + $val6) / 6;

echo "Média: ".$media;
?>