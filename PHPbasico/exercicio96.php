<?php
interface Aves{
    public function andar();
    public function voar();
    public function nadar();
}
interface AvesQueVoam{
    public function voar();
    public function andar();
}
interface AvesQueNadam{
    public function nadar();
    public function andar();
}
class Pato implements Aves{
    public function voar(){
    }
    public function nadar(){
    }
    public function andar(){
    }
}
class Pinguim implements AvesQueNadam{
    public function nadar(){
    }
    public function andar(){
    }
}
class Andorinha implements AvesQueVoam{
    public function voar(){
    }
    public function andar(){
    }
}
?>