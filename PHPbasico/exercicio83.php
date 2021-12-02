<?php
interface Funcionario{
    public function funcao();
}
class Designer implements Funcionario{
    public function funcao()
    {
        echo "Design";
    }
}
class Dev implements Funcionario{
    public function funcao()
    {
       echo  "Codigo";
    }
}
class Tester implements Funcionario{
    public function funcao()
    {
        echo "Testes";
    }
}
class Empresa{
    function buscaFuncionario(Funcionario $funcionario){
        echo "Faz: ".$funcionario->funcao();
    }
}
?> 