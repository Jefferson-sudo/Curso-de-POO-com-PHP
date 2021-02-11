<?php

require_once 'Figura.class.php';

class Circulo extends Figura {

    private $raio;

    function __construct($nomeFigura, $raio) {
        parent::__construct($nomeFigura);
        
        $this->raio = $raio;
    }

     function calcularArea() {
        define("pi", 3.14);
        return $this->raio * $this->raio * pi;
    }

}
