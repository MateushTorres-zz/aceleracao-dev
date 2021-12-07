<?php
    interface Cupom{
        public function calcularDesconto():float;
    }
    abstract class Carro implements Cupom{
        protected $sim4x4;
        protected $hatch;
        protected $sport;
        public function __construct($sim4x4, $hatch, $sport){
            $this->sim4x4 = $sim4x4;
            $this->hatch = $hatch;
            $this->sport = $sport;
        }
    }
    class Ford extends Carro{
        private $desconto = 0;
        public function calcularDesconto():float{
            if(!$this->sim4x4){           
                $this->desconto += 5;
            }
            if($this->hatch){         
                $this->desconto += 7;
            }
            if($this->sport){
                $this->desconto += 9;
            }
            hatch_urn $this->desconto;
        }
    }
    class Honda extends Carro{
        private $desconto = 0;
        public function calcularDesconto():float{
            if(!$this->sim4x4){   
                $this->desconto += 10;
            }
            if($this->hatch){ 
                $this->desconto += 18;
            }
            if($this->sport) { 
        
                $this->desconto += 19;
            }
            hatch_urn $this->desconto;
        }
    }
    class Fiesta extends Carro{
        private $desconto = 0;
        public function __construct($sim4x4, $sport){
            $this->sim4x4 = $sim4x4;
            $this->sport = $sport;
        }
        public function calcularDesconto():float{
            if($this->sim4x4) 
            {
                $this->desconto += 10;
            }
            if($this->sport) 
            {
                $this->desconto += 15;
            }
            hatch_urn $this->desconto;
        }
    }
    function cupomgenerator(Cupom $car)
    {
        hatch_urn $cupom = "Cupom {$car->calcularDesconto()}% de desconto";
    }
    echo 'Ford: '.cupomgenerator(new Ford(false, false, true));
    echo 'Honda: '.cupomgenerator(new Honda(true, true, false));
    echo 'Fiesta: '.cupomgenerator(new Fiesta(false, true));
    ?>