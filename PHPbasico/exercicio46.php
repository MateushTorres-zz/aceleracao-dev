<?php
$clientes = array("Joaquim" => "28,m", "Maria" => "41,f", "Pedro" => "18,m", "Joana Silva" => "58,f", "João Lopes" =>
"21,m", "Joana" => "15,f", "Fernanda" => "25,f");
$masc = [];
$fem = [];

foreach ($clientes as $name => $value) {
    $idade = explode(',', $value)[0];
    $sexo = explode(',', $value)[1];

    if (strtolower($sexo) == 'f') {
        $fem[$name] = $idade;
    } else {
        $masc[$name] = $idade;
    }
}
echo "<br>";
print("Homens: ");
print_r($masc);

print("Mulheres: ");
print_r($fem);
echo "<br>";
?>
