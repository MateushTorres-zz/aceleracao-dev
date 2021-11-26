<?php
class Plano {
    private int $prim_ponto;
    private int $seg_ponto;

    public function __construct(int $prim_ponto = 0, int $seg_ponto = 0)
    {
        $this->x = $prim_ponto;
        $this->y = $seg_ponto;
    }
    public function setPonto(Plano $plano) {
        $this->x = $plano->getX();
        $this->y = $plano->getY();
    }
    public function set_x(int $prim_ponto) {
        $this->x = $prim_ponto;
    }
    public function set_y(int $seg_ponto) {
        $this->y = $seg_ponto;
    }
    public function get_x() : int {
        return $this->x;
    }
    public function get_y() : int {
        return $this->y;
    }
    public function __toString() : string {
        return "x={$this->x} y= {$this->y}";
}
?>