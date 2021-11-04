<?php

$meso = file_get_contents("https://servicodados.ibge.gov.br/api/v1/localidades/mesorregioes/1101");
$array = array($meso);
var_export($array);

?>