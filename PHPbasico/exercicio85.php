<?php
interface Arma {
    public function usarArma();
}
interface Personagem {
    public function lutar();
}
abstract class Reinado implements Personagem {
    public function lutar(){}
}
class Machado implements Arma{
    public function usarArma(){
        echo "Usando machado";
    }
}
class Espada implements Arma{
    public function usarArma(){
        echo "Usando espada";
    }
}
class Faca implements Arma{ 
    public function usarArma(){
        echo "Usando faca";
    }
}
class ArcoEFlexa{
    public function usarArma(){
        echo "Usando arco e flexa";
    }
}
class Rei extends Reinado implements Personagem{
    public function lutar(){ 
        echo "Usando REI";
    }    
}
class Duende implements Personagem{
    public function lutar(){ 
        echo "Usando duende";
    }
}
class Guerreiro implements Personagem {
    public function lutar(){ 
        echo "Usando guerreiro";
    }
}
class Rainha extends Reinado implements Personagem{
    public function lutar(){ 
        echo "Usando rainha";

    }
}
?>