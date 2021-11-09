<?php
    $primeiro_grau = 80.5;
    $segundo_grau = 97.6;

    function parafahrenheit($temp) {
        return round(($temp - 32) * 5 / 9, 2);
    }

    echo "$primeiro_grau graus Fahrenheit = " . parafahrenheit($primeiro_grau) . " graus Celsius. <br>";
    echo "$segundo_grau graus Fahrenheit = " . parafahrenheit($segundo_grau) . " graus Celsius. <br>";
?>