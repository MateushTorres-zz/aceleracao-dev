<?php
//Ruim
function email(Array $clientes):void {
    foreach ($clientes as $cliente) {
        $clienter = $db->find($cliente);
        if($clienter->isActive()){
            email($cliente);
        }
    }
}

//Bom
class cliente{}

class bancos{
    public function find(cliente $cliente){
        return $cliente;
    }
}

function email($cliente){}

function email($banco, Array $clientes):void {
    foreach ($clientes as $cliente) {
        $clientesativos = ClientesAtivos($banco,$cliente);
        $clientesativos instanceof cliente email($clientesativos) : null;
    }
}

function ClientesAtivos($banco,$cliente):cliente {
    $clienter = $banco->find($cliente);
    if($clienter->isActive()){
        return new cliente($clienter);
    }
    return null;
}
?>