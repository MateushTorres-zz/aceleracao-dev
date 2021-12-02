<?php
interface Persistenciabase{
    public function insert();
    public function update();
    public function delete();
}
class Mysql implements Persistenciabase{
    public function insert(){}
    public function update(){}
    public function delete(){}
}
class Budgereport{  
    public function open($data){
    }
    public function save(Persistenciabase $per){  
    }
}
?>