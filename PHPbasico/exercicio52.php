<?php
    $array1 = array(1,5,6,3,2,7,8,9,6,3,2,4,5,6,3,2,1,2,5,2);
    $array2 = array(-5,-6,-3,-2,-1,-4,-7,-8,-9,-6,-5,-2,-1,-4,-2,-5,-1,-2,-5,-4);
function soma($x,$y) {

    if ($x + $y < 0) return 0;
    return $x + $y;

    }

    for($i=0; $i<20; $i++){

        $arquivo = fopen("arrays.txt", "a");

        fwrite($arquivo, $array1[$i]." , ".$array2[$i]." = ".soma($array1[$i], $array2[$i])."\n");
        fclose($arquivo);
    }
?>
