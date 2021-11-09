<?php
$cep = file_get_contents("https://viacep.com.br/ws/GO/Goiania/Domingos/json/");
$cep = json_decode($cep,true);
$array = [];

for ($i=0; $i < 15 ; $i++) { 
    array_push($array, str_replace("-","",$cep[$i]["cep"]));
}
$cep = [];
foreach ($array as $cep) {
    $link = "https://viacep.com.br/ws/{$cep}/json/";
    $ch = curl_init($link);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

    $response = curl_exec($ch);
    $dt = json_decode($response, true);
    array_push($cep,$dt);   
}
curl_close($ch);

$cepEmJSON = json_encode($cep);
$file = fopen("ceps.txt", "w+");

fwrite($file, $cepEmJSON);
fclose($file);
echo " arquivo gerado";