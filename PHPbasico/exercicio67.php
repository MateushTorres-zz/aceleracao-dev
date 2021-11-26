<?php
    require_once('exercicio66.php');
    class Atendente extends Pessoa{
        private int $id;
        private string $funcao;
        private string $horarioentrada;
        private string $horariosaida;
        public function __construct($nome,$cpf,$endereco,$nomepai,$nomemae,$rg,$serialdeidentificacao,$id,$funcao,$horarioentrada,$horariosaida)
        {
            parent::__construct($nome,$cpf,$endereco,$nomepai,$nomemae,$rg,$serialdeidentificacao);
            $this->id = $id;
            $this->funcao = $funcao;
            $this->horarioEntrada = $horarioentrada;
            $this->horarioSaida = $horariosaida;
        }
        public function getId(){
            return $this->id;
        }
        public function getFuncao(){
            return $this->funcao;
        }
        public function getHorarioSntrada(){
            return $this->horarioentrada;
        }
        public function getHorarioSaida(){
            return $this->horariosaida;
        }
        public function toString(){
            $dados = array(
                'nome' => $this->nome,
                'cpf' => $this->cpf,
                'endereco' => $this->endereco,
                'nomepai' => $this->nomepai,
                'nomemae' => $this->nomemae,
                'rg' => $this->rg,
                'serialIdentificacao' => $this->serialdeidentificacao,
                'id' => $this->id,
                'funcao' => $this->funcao,
                'horarioentrada' => $this->horarioentrada,
                'horariosaida' => $this->horariosaida
            );
            return json_encode($dados);
        }
    }
    $atendente = new Atendente('Mateus','12345678','Rua 7','Kleber','Francsico',1234,5678,987654,'DEV','7:30','13:30');
    var_dump($atendente);
?> 