<?php
interface Comunicacao{
    public function enviar($msg): void;
}
class Email implements Comunicacao{
    public function enviar($msg): void{
    }
}
class Notificacao{
    public function __construct(Comunicacao $meiocomunicacao){
        $this->msg = $meiocomunicacao;
    }
    public function enviar($msg){
        $this->msg->enviar($msg);
    }
}
?>