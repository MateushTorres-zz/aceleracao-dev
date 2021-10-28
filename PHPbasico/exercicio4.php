<?php
$cores = ["azul","roxo","preto","branco"];
$partes = ["parede","teto","chão","janela"];

foreach ($cores as $key => $value) {
    echo  "<br>" . $key . $value;
}
foreach ($partes as $key => $value) {
    echo  "<br>" . $key . $value;
}
$merged = array_merge($cores, $partes);
var_export($merged);
?>