<?php
class ItemOrcamento {
    private string $historico;
    private float $valor;

    public ItemOrcamento(string $historico, float $valor) {
        $this->historico = $historico;
        $this->valor = $valor;
    }
    public string getHistorico(){
        return $this->historico;
    }
    public float getValor(){
        return $this->valor;
    }
}
class ItemOrcamentoComplexo extends ItemOrcamento {
    private array $orcamentos;

    public function __construct(string $historico, float $valor, array $orcamentos) {
        parent::__construct($historico, $valor);
        $this->orcamentos = $orcamentos;
        $this->orcamentos[] = $this;
    }
    public function getValor(): float {
        $somatorio = 0;
        foreach ($this->orcamentos as $orcamento) {
            $somatorio += $orcamento->getValor();
        }
        return $somatorio;
    }
    public function encontraItem(string $historicoSubitem) {
        foreach ($this->orcamentos as $orcamento) {
            if ($orcamento->getHistorico() == $historicoSubitem) {
                return $orcamento;
            }
        }
        return null;
    }
}
?>
