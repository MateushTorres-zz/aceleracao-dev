<?php
$a1 = array(1,2,3,4,5);
$a2 = array(6,7,8,9,10);
$a3 = array(11,12,13,14,15);
$a4 = array(16,17,18,19,20);
$a5 = array(21,22,23,24,25);

foreach ($a1 as $key => $value) {
    echo "{$key} => {$value}<br>";
}
echo "<br>";
foreach ($a2 as $key => $value) {
    echo "{$key} => {$value}<br>";
}
echo "<br>";
foreach ($a3 as $key => $value) {
    echo "{$key} => {$value}<br>";
}
echo "<br>";
foreach ($a4 as $key => $value) {
    echo "{$key} => {$value}<br>";
}
echo "<br>";
foreach ($a5 as $key => $value) {
    echo "{$key} => {$value}<br>";
}
echo "<br>";

var_export($ar1).'<br>';
var_export($ar2).'<br>';
var_export($ar3).'<br>';
var_export($ar4).'<br>';
var_export($ar5).'<br>';
?>