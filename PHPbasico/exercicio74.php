<?php
class Correntista{
    private string $cpf;
    private float $saldo;
    public function __construct(string $cpf, float $saldo){
        $this->cpf = $cpf;
        $this->saldo = $saldo;
    }
    public function getcpf(): string{
        return $this->cpf;
    }

    public function getSaldo(): float{
        return $this->saldo;
    }
    public function setSaldo(float $saldo): void{
        $this->saldo = $saldo;
    }
}
class Despesa extends Correntista{
    private array $despesasPrev;
    public function __construct( string $cpf, float $saldo, array $despesasPrev){
        parent::__construct($cpf, $saldo);
        $this->despesasPrev = $despesasPrev;
    }
    public function getDespesasPrev(): array{
        return $this->despesasPrev;
    }
}
function verifica (array $correntistas): array{
    $correntistas = [];

    foreach ($correntistas as $correntista) {
        $tot = 0;

        foreach ($correntista->getDespesasPrev() as $despesaPrev) {
            $tot += $despesaPrev->getValor();
        }
        if ($correntista->getSaldo() > $tot) {
            $correntistas[] = $correntista;
        }
    }
    return $correntistas;
?>
