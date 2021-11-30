<?php 
abstract class Produto {
    private $cod, $valor;
    public function __construct($cod, $valor){
        $this->cod = $cod;
        $this->valor = $valor;
    }
}
interface Perecivel {
    public function svencido();
}
class carne extends Produto implements Perecivel  {
    private $marca, $volume, $dtval;
    public function __construct($cod, $valor, $marca, $volume, $dtval )
    {
        parent::__construct($cod,$valor);
        $this->marca = $marca;
        $this->volume = $volume;
        $this->dtval = $dtval;
    }
    public function svencido()
    {
        if($this->validade === true){
            echo "Em dia ";
        } else {
            echo "Fora da validade";
        }
    }
    public function getMarca()
    {
        return $this->marca;
    }
    public function setMarca($marca)
    {
        $this->marca = $marca;
        return $this;
    }
    public function getAno()
    {
        return $this->ano;
    }
    public function setAno($ano)
    {
        $this->ano = $ano;
        return $this;
    }
    public function getVolume()
    {
        return $this->volume;
    }
    public function setVolume($volume)
    {
        $this->volume = $volume;
        return $this;
    }
    public function getdtval()
    {
        return $this->dtval;
    }
    public function setdtval($dtval)
    {
        $this->dtval = $dtval;
        return $this;
    }
}
class DVD extends Produto{
    private $titulo, $ano;
    public function getTitulo()
    {
        return $this->titulo;
    }
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
        return $this;
    }
    public function getAno()
    {
        return $this->ano;
    }
    public function setAno($ano)
    {
        $this->ano = $ano;
        return $this;
    }
}
$produto = new Produto('123123','123');
$ = new carne($produto->cod, $produto->valor, 'xxx','123123','123321');
$carne->getdtval();
?>