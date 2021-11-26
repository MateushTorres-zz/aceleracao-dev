<?php
    interface Servicos{
        public function calculaSalario(int $diasTrabalhados, String $cargo):float;
        public function calculaSalarioMaisGratificacao(int $diasTrabalhados, String $valorGravacao);
    }
    class funcionarios implements Servicos{
        public function calculaSalario(int $diasTrabalhados, String $cargo):float{
            $salarioBase = 6500;
            $valorDiario = $salarioBase/30;
            $valorRecebido = $valorDiario * $diasTrabalhados;
             
            if ($diasTrabalhados >= 15) {
                echo "Salário sem desconto, valor recebido por dia = {$salarioDiario}<br>";
                return $salarioDiario;
            }
    
            $salarioDiarioComDesconto = round($salarioDiario * 0.7, 2);
                echo "Salário após desconto, valor recebido por dia = {$salarioDiarioComDesconto}<br>";
                return $salarioDiarioComDesconto;
        }
        
        public function calculaSalarioMaisGratificacao(int $diasTrabalhados, string $valorGravacao){
            $salarioBase = 4970;
            $valorDiario = $salarioBase/30;
            $porcentagem = 10;

            if ($diasTrabalhados === 9) {
                $salarioDiario = round($salarioDiario * 1.2, 2);
                echo "Salário completo +20%<br>Recebido {$salarioDiario} por dia<br>";
                
            } else if ($diasTrabalhados >= 10 && $diasTrabalhados <= 15) {
                $salarioDiario = round($salarioDiario * 1.5, 2);
                echo "Salário completo<br>Recebido {$salarioDiario} por dia<br>";
        }
    }
    $funcionario = new Funcionarios();

    $funcionario->calculaSalario(12, "Dev");
    $funcionario->calculaSalario(9, "Dev");
    
    $funcionario->calculaSalarioMaisGratificacao(74, "");
    $funcionario->calculaSalarioMaisGratificacao(8, "");