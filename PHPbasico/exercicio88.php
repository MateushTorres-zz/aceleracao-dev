<?php
class Cliente{
    public function is_valid(){
    }
}
class RepCli{
    public function addcliente(){
    }
}
class ClienteService{
    public function addcliente(Cliente $cliente, RepCli $repo): string{
        if (!$cliente->is_valid()) {
            return 'Dados inválidos';
        }
        if ($repo->addcliente($cliente)) {
            return 'Cliente cadastrado';
        } else {
            return 'Erro';
        }
    }
}
?>