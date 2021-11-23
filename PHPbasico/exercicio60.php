<?php
    $arq1 = fopen('arquivo1.txt', 'w');
    $arq2 = fopen('arquivo2.txt', 'w');
    $arq3 = fopen('arquivo3.txt', 'w');
    fwrite($arq1, file_get_contents('https://jsonplaceholder.typicode.com/photos'));
    fwrite($arq2, file_get_contents('https://jsonplaceholder.typicode.com/photos'));
    fwrite($arq3, file_get_contents('https://jsonplaceholder.typicode.com/photos'));
    fclose($arq1);
    fclose($arq2);
    fclose($arq3);

    unlink('arquivo2.txt');

    function open($file){ 
        
        $file = fopen($file, 'r');

        if(!$file){
            throw new Exception('Arquivo não encontrado');
        }

        $array = file($file);

        var_export($array);
        
    }

    try{
        open('arquivo1.txt');
        open('arquivo2.txt');

    }catch(Exception $exc){
        echo $exc->getMessage();
    }
?>