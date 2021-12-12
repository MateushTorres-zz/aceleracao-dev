<?php
$var1 = random_int(0,99);
$var2 = random_int(0,99);
$var3 = random_int(0,99);

function verif($valor)
{
    while(true){
        if($valor%2 == 0){
            echo "$valor <br>";
        }else{
            $valor +=1;
            echo "$valor <br>";
        }
        break;
    }
}
verif($var1);
verif($var2);
verif($var3);
?>
