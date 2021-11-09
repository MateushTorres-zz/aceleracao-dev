<?php
$array = scandir("arr");
array_splice($array, 1, 2);

foreach ($array as $name){
    echo '<br>';
    print_r(pathinfo('./' . $name));
    echo '<br>';
}
?>