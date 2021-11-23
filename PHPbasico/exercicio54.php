<?php
function par_impar($n)
{
    if ($n % 2 !== 0) {
        throw new Exception("Número não válido para essa operacao", 535);
    }
    return true;
}
$random = [random_int(1, 99), random_int(1, 99), random_int(1, 99), random_int(1, 99), random_int(1, 99), random_int(1, 99), random_int(1, 99), random_int(1, 99),random_int(1, 99), random_int(1, 99), random_int(1, 99), random_int(1, 99), random_int(1, 99), random_int(1, 99), random_int(1, 99)];

var_dump($random);
echo "<br>";

try {
    foreach ($random as $num) {
        par_impar($num);
    }
} catch (Exception $exception) {
    echo "Erro {$exception->getMessage()}, Code {$exception->getCode()}";
}
?>
