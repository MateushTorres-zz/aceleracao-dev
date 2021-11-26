<?php
class Nota {
    private int $id;
    private string $nom;
    private string $descri;
    private int $quant;
    private float $preco;
    private float $desco;

    public function __construct(int $id, string $nom, string $descri, float $preco, float $desco, int $quant = 0)
    {
        $this->id = $id;
        $this->nome = $nom;
        $this->descricao = $descri;
        $this->quantidade = $quant;
        $this->preco = $preco;
        $this->desconto = $desco;
    }
    public function setPreco(float $preco) {
        $this->$preco = $preco;
    }

    public function setDescricao(string $descri) {
        $this->$descri = $descri;
    }
    public function getId() : int{
        return $this->id;
    }
    public function getNome() : string{
        return $this->nome;
    }
    public function getDescricao() : string{
        return $this->descricao;
    }
    public function getQuantidade() : int{
        return $this->quantidade;
    }
    public function getPreco() : float {
        return $this->preco;
    }
    public function getDesconto() : float{
        return $this->desconto;
    }
    public function calcularFatura() : float{
        return $this->quantidade * $this->preco;
    }
}
?>