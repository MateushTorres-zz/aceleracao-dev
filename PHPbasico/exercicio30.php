<?php
include 'funcoes.php';

$soma1 = rand(1,10000);
$soma2 = rand(1,10000);
$res = $soma1+$soma2;
$nome = (string) $res;

echo "Soma: ".soma($soma1, $soma2)."<bv><br>";
echo "par ou impar: ".parOrImpar($res)."<bv><br>";
echo "Realiza contagem de string: ".countString($nome)."<bv><br>";
echo "<hr>";
?>
