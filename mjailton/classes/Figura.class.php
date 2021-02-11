<?php


class Figura {
    protected $nomeFigura;
    protected $area;
    
    
    function __construct($nomeFigura) {
        $this->nomeFigura = $nomeFigura;
        
    }

    public function calcularArea(){
        //Calcular area
        
    }
    public function getArea(){
        $this->area = $this->calcularArea();//retornar o resultado do calculo
        return "<br>A are do {$this->nomeFigura} é : {$this->area}<br>";
    }
}
