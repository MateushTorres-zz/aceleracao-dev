<?php
if (!is_dir("alunos")) mkdir("alunos");
if (!is_dir("professores")) mkdir("professores");

$arq = fopen('./alunos/arquivo.txt', 'w');

    fclose($arq);

    function verifica($caminho){
        if(is_dir($caminho)){
            if(count(scandir($caminho)) > 2){
                return true;
            }
        }
        throw new Exception($caminho);
    }

    try{
        verifica('./alunos');
        verifica('./professores');

    }catch(Exception $x){

        $log = fopen('log.txt', 'w');

        fwrite($log, 'A pasta '.$x->getMessage().' não vazia'.PHP_EOL);
        fwrite($log, "Arquivo: " . $x->getFile().PHP_EOL);
        fwrite($log, "Linha: " . $x->getLine().PHP_EOL);

        fclose($log);
    }
?>