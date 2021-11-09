
<?php

$salario_minimo = 1000;

$contribuintes = [
    [
        'nome'  => 'Patricia da Silva',
        'cpf'   => '98765432100',
        'dep' => 0,
        'renda' => 10000
    ],
    [
        'nome'  => 'Mateus da Silva',
        'cpf'   => '98765432101',
        'dep' => 1,
        'renda' => 6000
    ],
    [
        'nome'  => 'Fernando da Silva',
        'cpf'   => '98765432102',
        'dep' => 3,
        'renda' => 1000
    ]
];

echo "Salario minimo: {$salario_minimo}";
echo '<br />';

foreach($contribuintes as $contribuinte) {
    $nome = $contribuinte["nome"];
    $cpf = $contribuinte["cpf"];
    $dep = $contribuinte["dep"];
    $renda = $contribuinte["renda"];
    $imposto = 0;

    if ($renda < 2000) $imposto = $renda;
    else if ($renda < 3000) $imposto = $renda * 0.05;
    else if ($renda < 5000) $imposto = $renda * 0.10;

    echo "Nome-> {$nome}. CPF:-> {$cpf}. Depdendentes-> {$dep}. Renda-> {$renda}. Imposto-> {$imposto}.<br>";
}
?>