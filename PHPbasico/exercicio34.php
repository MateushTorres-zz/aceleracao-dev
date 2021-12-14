<?php

$valores = [0,20,30,40,50,60,70,80,90];

function Inverso($array)
{
    for ($i= count($array); $i >= 0 ; $i--) { 
        echo "<br>" . $array[$i];
    }
}

Inverso($valores);
?>
