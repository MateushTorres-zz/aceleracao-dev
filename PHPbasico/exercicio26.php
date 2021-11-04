<?php

$v1 = random_int(0,99);
$v2 = random_int(0,99);
$v3 = random_int(0,99);

while ($v1 <= 100 && $v2 <= 100 && $v3 <= 100) {
    if($v1 % 2 === 0) echo $v1 . "<br>";
    $v1++;

    if($v2 % 2 === 0) echo $v2 . "<br>";
    $v2++;

    if($v3 % 2 === 0) echo $v3 . "<br>";
    $v3++;
}
?>