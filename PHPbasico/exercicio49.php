<?php   
    for ($i = 1; $i <= 150; $i++) {
        @mkdir("Pasta" . $i);
        echo "Pasta{$i} criada<br>";
        }
        if ($i % 2 != 0) {
            $arquivo = "./pastas/".$i."/log-".date('d-M-Y').".txt";
            $arq = fopen($arquivo, "w+");  
                     
            fwrite($arq, "Criado");
            print_r(pathinfo($arquivo));
            fclose($arq);
        }
?>