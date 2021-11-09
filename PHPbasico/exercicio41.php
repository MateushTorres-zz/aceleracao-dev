<?php
$json = file_get_contents("https://servicodados.ibge.gov.br/api/v1/localidades/paises");

$arq = fopen("paises.txt", "w+");

fwrite($arq, $json);
fclose($arq);

echo "<a href=\"paises.txt\">";
?>
