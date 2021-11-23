<?php
function divisao($x1, $x2) {
    if ($x2 === 0) throw new Exception("Divisão por 0 inválida", 523);
    return $x1 / $x2;
    }

    return $conta = ($x1 / $x2);
    }
    try{
        echo divisao(7, 0);
    }catch(Exception $exc){
        echo "Erro: ".$exc->getCode();
        echo "Msg: ".$exc->getMessage();
    }
?>