<?php
interface Animal{
    public function getNomeEspecie();
    public function getNomeAnimal();
}
interface Ferramentas{
    public function filtraEspecie($animal = [], string $espercieFiltrar);
    public function classificaEspecies($animal = []);
}
class Animais implements Animal{
    private string $nomeEspecie;
    private string $nomeAnimal;

    public function __construct(string $nomeEspecie, string $nomeAnimal)
    {
        $this->nomeEspecie = $nomeEspecie;
        $this->nomeAnimal = $nomeAnimal;
    }
    function getNomeEspecie(): string {
        return $this->nomeEspecie;
    }
    function getNomeAnimal(): string
    {
        return $this->nomeAnimal;
    }
}
class Ferramenta implements Ferramentas {
    function filtraEspecie(array $completo, string $especieFiltrar): array
    {
        $completoFiltrado = [];
        foreach ($completo as $key => $animal) {
            if ($animal instanceof Animal) {
                if ($animal->getNomeEspecie() === $especieFiltrar) {
                    $completoFiltrado[] = $animal;
                }
            }
        }
        return $completoFiltrado;
    }
    function classificaEspecie(array $completo): array
    {
        $especies = [];
        foreach ($completo as $key => $animal) {
            if ($animal instanceof Animal) {
                if (!in_array($animal->getNomeEspecie(), $especies)) {
                    array_push($especies, $animal->getNomeEspecie());
                }
            }
        }
        return $especies;
    }
    class Resultado {
        private string $nomeEspecie;
        private int $quantidade;
    
        function getNomeEspecie(): string {
            return $this->nomeEspecie;
        }
        function getQuantidade() {
            return $this->quantidade;
        }
    }   
    $cachorro = new Animais('golden', 'hana' ,'honda');   
    $arrayDeAnimais = [$cachorro];
    
    print_r($arrayDeAnimais);
    
    $ferramenta = New Ferramenta();   
    $especies = $ferramenta->classificaEspecie($arrayDeAnimais);
    
    print_r($especies);
    
    $Golden = $ferramenta->filtraEspecie($arrayDeAnimais, 'golden');
    
    print_r($Golden)  
    ?>