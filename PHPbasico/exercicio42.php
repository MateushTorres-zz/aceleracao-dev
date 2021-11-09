<?php

    $arq = fopen("paises.txt", "r");
    $pais = NULL;
    while(!feof($arq)){
        $lin = fgets($arq);
        $pais = json_decode($lin, true);
    }
    fclose($arq);
    $arq = fopen("lista.csv", "w");
    $cabecalho = array();
    foreach($pais as $pais){
        $cabecalho[] = $pais['nome'];
    }
    fwrite($arq, implode(",", $cabecalho)."\n");
    fclose($arq);
    
    ?>