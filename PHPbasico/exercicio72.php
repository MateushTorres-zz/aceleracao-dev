<?php
require_once('exercicio71.php');
'interface MovimentaConta {
    public function cpfcorrentista(): string;
    public function valor(): float;
}
interface OperacoesBanco {
    public function encontra(array $correntistas, string $procura): Correntista;
}
function metodo(array $c, array $m, $operacoesBanco) {
    foreach ($c as $correntista)
        foreach ($m as $movimentacao)
            if ($correntista->cpfcliente() === $movimentacao->cpfcorrentista())
                $correntista->setSaldo($movimentacao->valor());
}
?>
