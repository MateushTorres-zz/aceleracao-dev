<?php
class Revista{
    private $codigo;
    private $titulo;
    private $tipo;
    private $edicao;

    public function __construct(int $codigo, string $titulo, string $tipo)
    {
        $this->codigo = $codigo;
        $this->titulo = $titulo;
        $this->tipo = $tipo;
    }
    public function getEdicao(){
        return $this->edicao;
    }
    public function setEdicao(Edicoes $edicao){
        $this->edicao = $edicao;
    }
    public function setTitulo(string $titulo){
        $this->titulo = $titulo;
    }
    public function getTitulo(){
        return $this->titulo;
    }
    public function setTipo(string $tipo){
        $this->tipo = $tipo;
    }
    public function getTipo(){
        return $this->tipo;
    }
}
class Edicoes{
    private $ano;
    private $qntArtigos;
    private $numEdicao;

    public function __construct(int $ano, int $qntArtigos,int $numEdicao){
        $this->ano = $ano;
        $this->qntArtigos = $qntArtigos;
        $this->numEdicao = $numEdicao;
    }
    public function setEdicao($ano, $qntArtigos, $numEdicao)
    {
        $this->ano = $ano;
        $this->qntArtigos = $qntArtigos;
        $this->numEdicao = $numEdicao;
    }
    public function getEdicao()
    {
        return "Ano: {$this->ano}<br> Artigos: {$this->qntArtigos}<br> Edição: {$this->numEdicao}";
    }
}
$revista = new Revista(0,'Mateus','Book');
$edicao = new Edicoes(2021, 22, 1);
$revista->setEdicao($edicao);
var_dump($revista->getEdicao());
?>