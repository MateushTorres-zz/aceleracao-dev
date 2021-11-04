<?php
$dis = file_get_contents("https://servicodados.ibge.gov.br/api/v1/localidades/distritos");
$obj = New stdClass;
$obj -> distritos = $dis;
var_export($obj);
?>