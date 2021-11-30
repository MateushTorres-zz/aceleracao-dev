<?php
interface MovimentoConta{
    public function movimentacao():string;
    public function valormovimento():float;
}
interface OperacoesBancos{
    public function encontrarCorrentista($correntistas=[], string $cpfProcurado):Correntista;
}
class Correntista implements MovimentoConta{
    private $cpf;
    private $saldo;
    private $valormovimento;
    public function __construct(string $cpf, float $saldo){
        $this->cpf = $cpf;
        $this->saldo = $saldo;
        $this->valormovimento = $this->saldo;
    }
    public function cpf(){
        return $this->cpf;
    }
    public function getSaldo(){
        return $this->sa
    public function setSaldo(float $saldo){
        $this->saldo += $saldo;
        $this->valormovimento += $this->saldo;
    }
    public function sacar($valoraSacar){
        if($this->saldo>=$valoraSacar){
            $this->saldo -= $valoraSacar;
        }else{
            echo"Insuficiente";
        } 
    }
    public function movimentacao():string{
        return $this->cpf;
    }
    public function valormovimento():float{
        return $this->valormovimento;
    }
?>