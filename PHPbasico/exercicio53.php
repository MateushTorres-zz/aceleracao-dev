<?php
    $n1 =  array('Mateus'=> 4, 'Jorge'=>6, 'Ze'=>8, 
    'Kaua'=>1,'Kleber'=>3,'Kaka'=>7,
    'Fred'=>2,'Francisco'=>4,'Fernando'=>8,
    'Karla'=>3,'Quel'=>25,'Milton'=>9,
    'Yan'=>23,'Weyster'=>6,'Roberto'=>12,'Heitor'=>4) ;
    
    $n2 = array('Mateus'=> 7, 'Jorge'=>13, 'Ze'=>12, 
    'Kaua'=>6,'Kleber'=>16,'Kaka'=>6,
    'Fred'=>2,'Francisco'=>13,'Fernando'=>11,
    'Karla'=>3,'Quel'=>2,'Milton'=>15,
    'Yan'=>19,'Weyster'=>13,'Roberto'=>17,'Heitor'=>2) ;

    function aprovado($n1, $n2){
        $retorno = false;

        if(($n1>7)&&($n2>7)){
            if($n1+$n2 > 14){
                $retorno = true;
            }
        }
        return $retorno;
    }
    foreach($n1 as $key => $value){
        if(aprovado($n1[$key], $n2[$key])){
            $arq = fopen("Aprovados.txt", "a");
            fwrite($arq, $key."\n");
            fclose($arq);
        }
    }
?>
    
    