<?php
class Usuario{
    private $nome;
    private $cpf;
    private $tel;
    private $matricula;
    private $emprestimo=[];

    public function __construct(string $nome,string $cpf,string $tel,string $matricula){
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->telefone = $tel;
        $this->matricula = $matricula;
    }
    public function setTelefone(string $tel){
        $this->telefone = $tel;
    }
    public function getnome(){
        return $this->nome;
    }
    public function getcpf(){
        return $this->cpf;
    }
    public function getTelefone(){
        return $this->telefone;
    }
    public function getMatricula(){
        return $this->matricula;
    }
    public function setEmprestimo(Emprestimo $emprestimo){
        $this->emprestimo = $emprestimo;
    }
}
class Emprestimo{
    private $dataemprestimo;
    private $datadevolucao;
    private $datarealent;
    private $situacao;
    private $ex=[];
    public function __construct() {
    }
    public function setdataemprestimo(){
        $this->dataemprestimo = date("m/d/a");
    }
    public function setdatadevolucao(){
        $this->datadevolucao = $this->dataemprestimo + 5;
    }
    public function setdatarealent(){
        $this->datarealent = date("m/d/a");
    }
    public function setSituacao(int $situacao){
        $this->situacao = $situacao;
    }
    public function setex(ex $ex){
        $this->ex = $ex;
        $ex->emprestado = true;
    }
}
class ex {
    private $codigo;
    private $cativa;
    private $emprestado;
    public function __construct(int $codigo,bool $cativa){
        $this->codigo = $codigo;
        $this->cativa = $cativa;
        $this->emprestado = false;
    }
}
class Livro{
    private $titulo;
    private $autor;
    private $ano;
    private $edicao;
    private $editora;
    private $ISBN;
    public function __construct(string $titulo, string $autor, string $ano, int $edicao, string $editora, string $ISBN){
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->ano = $ano;
        $this->edicao = $edicao;
        $this->editora = $editora;
        $this->ISBN = $ISBN;
    }
    public function getTitulo(){
        return $this->titulo;
    }
    public function getAutor(){
        return $this->autor;
    }
    public function getAno(){
        return $this->ano;
    }
    public function getEdicao(){
        return $this->edicao;
    }
    public function getEditora(){
        return $this->editora;
    }
    public function getISBN(){
        return $this->ISBN;
    }
}
?>