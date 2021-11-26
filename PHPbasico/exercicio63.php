<?php
class Porta {    
    private string $cor;
    private bool $aberta;
    private float $x;
    private float $y;
    private float $z;

    public function __construct(string $cor, float $x, float $y, float $z, bool $aberta = false)
    {
        $this->aberta = $aberta;
        $this->cor = $cor;
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;
    }
    public function abre() : void {
        $this->aberta = true;
    }
    public function fecha() : void {
        $this->aberta = false;
    }
    public function mcor(string $cor) : void {
        $this->cor = $cor;
    }
    public function aberta() : bool {
        return $this->aberta;
    }

}
class Imovel {
    protected string $cor;
    protected int $numero_portas;

    public function __construct(string $cor)
    {
        $this->cor = $cor;
    }
    public function portas_abertas() : int {
        return 0;
    }
    public function mcor(string $cor) : void {
        $this->cor = $cor;
    }
}
class Casa extends Imovel {
    protected Porta $p1;
    protected Porta $p2;
    protected Porta $p3;
    
    public function __construct(string $cor, Porta $p1, Porta $p2, Porta $p3)
    {
        $this->cor = $cor;
        $this->numero_portas = 3;
        $this->prim_porta = $p1;
        $this->seg_porta = $p2;
        $this->terc_porta = $p3;
    }
    public function portas_abertas() : int {
        $portas_abertas = 0;
        if ($this->prim_porta->aberta()) $portas_abertas++;
        if ($this->seg_porta->aberta()) $portas_abertas++;
        if ($this->terc_porta->aberta()) $portas_abertas++;
        return $portas_abertas;
    }
}
class Edificio extends Imovel {
    protected int $total_andares;
    protected $portas = [];
    
    public function __construct(string $cor, array $portas, int $total_andares)
    {
        $this->cor = $cor;
        foreach ($portas as $porta) {
            if (get_class($porta) == 'Porta') {
                array_push($this->portas, $porta);
            }
        }
        $this->total_andares = $total_andares;
    }
    public function portas_abertas() : int
    {
        $portas_abertas = 0;
        foreach ($this->portas as $porta) {
            if (get_class($porta) == '') {
                if ($porta->aberta()) {
                    $portas_abertas++;
                }
            }
        }
        return $portas_abertas;
    }
    public function add_porta(Porta $porta) : void {
        array_push($this->portas, $porta);
    }
    public function add_andar() : void {
        $this->total_andares++;
    }
    public function total_andares() : int {
        return $this->total_andares;
    }
}
?>