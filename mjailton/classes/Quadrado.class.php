<?php

require_once 'Figura.class.php';

class Quadrado extends Figura {

    private $lado;

    function __construct($nomeFigura, $lado) {
        parent::__construct($nomeFigura);
        $this->lado = $lado;
    }

    public function calcularArea() {
        return $this->lado * $this->lado;
    }

}
