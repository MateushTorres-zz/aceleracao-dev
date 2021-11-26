<?php
class Pessoa {
    private $nome;   
    private $nomepai;
    private $nomemae;
    private $cpf;
    private $endereco;
    private $rg;
    private $serialdeidentificacao;

    public function __construct($nome, $nomepai, $nomemae, $cpf, $endereco,  $rg, $serialdeidentificacao)
    {
        $this->nome = $nome;   
        $this->nomepai = $nomepai;
        $this->nomemae = $nomemae;
        $this->cpf = $cpf;
        $this->endereco = $endereco;
     
        $this->rg = $rg;
        $this->serialdeidentificacao = $serialdeidentificacao;
    }
    public function getNome() {
        return $this->nome;
    }
    public function getNomePai() {
        return $this->nomepai;
    }
    public function getNomeMae() {
        return $this->nomemae;
    }
    public function getCpf() {
        return $this->cpf;
    }
    public function getEndereco() {
        return $this->endereco;
    }
    public function getRg() {
        return $this->rg;
    }
    public function getSerialDeIdentificacao() {
        return $this->serialdeidentificacao;
    }
    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }
    public function __toString()
    {
        return json_encode(array(
            "nome" => $this->nome, 
            "nomepai" => $this->nomepai,
            "nomemae" => $this->nomemae,
            "cpf" => $this->cpf,
            "endereco" => $this->endereco,
      
            "rg" => $this->rg,
            "serialdeidentificacao" => $this->serialdeidentificacao
        ));
}
$pessoa1 = new Pessoa("Mateus", "Xico", "Tobias", "123.456.789-87", "Rua 17",  "987654321", "987654321");
$pessoa2 = new Pessoa("Henrique", "Ze", "Sonia", "987.654.321-23", "Rua 13", "123456789", "123456789");

var_dump($pessoa1);
var_dump($pessoa2);
?>