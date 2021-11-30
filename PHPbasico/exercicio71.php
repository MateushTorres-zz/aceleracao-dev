<?php
class Correntista{
    protected string $cpf;
    protected float $saldo;
    public function __construct(string $cpf, float $saldo)
    {
        $this->cpf = $cpf;
        $this->saldo = $saldo;
    }
    public function getCpf(){
        return $this->cpf;
    }
    public function getSaldo(){
        return $this->saldo;
    }
    public function setSaldo(float $saldo){
        $this->saldo = $saldo;
    }
}
interface MovimentoConta{
    public function getCPFCorrentista();
    public function getValorMovimento();
interface OperacoesBanco{
    public function encontraCorrentista(array $todosCorrentistas,string $cpfProcurado);
}
?>