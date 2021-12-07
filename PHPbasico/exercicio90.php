<?php
    class Logs{
        private static $instancia;
        private function __construct(){}
        private function __clone(){}
        public static function getInstancia(){
            if(self::$instancia==null){
                self::$instancia = new self;
            }
            return self::$instancia;
        }
        public function escreverLog($dir){
            $agora = date('Y-m-d-H:i:s');
            $nomeLog = 'log-'.$agora.'.txt';
            if(!file_exists($dir))
                mkdir($dir, 777, true);
            $arq = fopen($dir.DIRECTORY_SEPARATOR.$nomeLog, 'w');
            fwrite($arq, 'Criado em '.$agora);
            fclose($arq);
        }
        public function buscarLog($dir) {
            echo '';
            echo "Na pasta '{$dir}':";
            $dir = dir($dir);
            while($arq = $dir->read()){
                if(($arq != '..')&&($arq != '.')){
                    print_r(self::exibirLog($arq));
                }
            }
        }
        public static function exibirLog($arq){
            return pathinfo($arq);
        }
    }
$primeirolog = Logs::getInstancia();
$primeirolog->escreverLog('1');
$primeirolog->buscarLog('1');
$segundolog = Logs::getInstancia();
$segundolog->escreverLog('2');
$segundolog->buscarLog('2');
$terceirolog = Logs::getInstancia();
$terceirolog->escreverLog('3');
$terceirolog->buscarLog('3');
$quartolog = Logs::getInstancia();
$quartolog->escreverLog('4');
$quartolog->buscarLog('4');
$quintolog = Logs::getInstancia();
$quintolog->escreverLog('5');
$quintolog->buscarLog('5');
?>