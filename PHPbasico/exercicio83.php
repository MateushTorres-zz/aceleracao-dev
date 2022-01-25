<?php
interface Profissional{
    public function work();
}
class Compania{
    public function createSoftware(Profissional $profissional){
        $profissional->work();
    }
}
class Designer implements Profissional{
    public function work(){
        $this->designArq();
    }
    public function designArq(){
    }
}
class Programmer implements Profissional{
    public function work(){
        $this->writeCode();
    }
    public function writeCode() {
    }
}
class Tester implements Profissional{
    public function work(){
        $this->testSoftware();
    }
    public function testSoftware() {
    }
}
