<?php
    $ps = array("Mateus", "Patricia", "Isabela", "Sarah", "Ana", "Rafa", "MAite", 
                    "Kleber", "Klaudio", "Kira", "Lais", "Lorena", "Fernando", "Fernanda");
    foreach ($ps as $p) {
        if (!file_exists($p)) {
            mkdir($p);
            $arq = fopen($p . "/" . $p . ".txt", "w");
            fwrite($arq, $p);
            fclose($arq);
        }
    }
?>