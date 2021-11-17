<?php
$urls = array(
    'https://random-data-api.com/api/stripe/random_stripe',
    'https://random-data-api.com/api/stripe/random_stripe',
    'https://random-data-api.com/api/app/random_app',
    'https://random-data-api.com/api/beer/random_beer',
    'https://random-data-api.com/api/commerce/random_commerce',
    'https://random-data-api.com/api/device/random_device',
    'https://random-data-api.com/api/subscription/random_subscription'
);
$arq = fopen("api.txt", "w+");

foreach ($urls as $value) {
    $json = file_get_contents($value);
    fwrite($arq,$json);
    fwrite($arq,"\r");
}
fclose($arq);
$arq = fopen("api.txt", "r");
$array = array();

while($l = fgets($arq)) {
    array_push($array, json_decode($l));
}
echo "<br>";
print_r($array);
echo "<br>";
?>