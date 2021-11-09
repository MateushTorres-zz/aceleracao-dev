<?php
$json = json_decode(file_get_contents('https://rickandmortyapi.com/api'), true);

if (empty($json)) {
    echo "Você não pode continuar";
} else {
    if (is_array($json)) {
        var_dump($json);
    } else {
        echo 'Tipo de dado não é array';
    }
}
?>