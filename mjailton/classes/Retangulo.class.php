<?php

require_once 'Figura.class.php';

class Retangulo extends Figura {

    private $altura;
    private $base;

    function __construct($nomeFigura, $altura, $base) {
        parent::__construct($nomeFigura);
        $this->altura = $altura;
        $this->base = $base;
    }

    public function calcularArea() {
        return $this->base * $this->altura;
    }

}
