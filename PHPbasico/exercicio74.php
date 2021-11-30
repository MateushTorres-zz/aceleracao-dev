<?php
function x(array $correntistas) {
    $despesas = [];
    foreach ($correntistas as $correntista) {
        if ($correntista->getMes() === 3) {
            if($correntista->getSaldo() <= $correntista->getDespesasPrevistas()) {
                $despesas[] = $correntista;
            }
        }
    }
    return $despesas;
}
?>