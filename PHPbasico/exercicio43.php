<?php
$scan = scandir("imagens");
array_splice($scan, 0, 2);

foreach ($scan as $img) {
    echo '<br>';
    print_r(pathinfo('./' . $img));
    echo '<br>';
}
?>