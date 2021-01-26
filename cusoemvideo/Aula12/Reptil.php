<?php
require_once 'Animal.php';

class Reptil extends Animal {
    private $corEscama;
    
    public function alimentar() {
        echo"<p>Comendo vegetais</p>";
    }

    public function emitirsom() {
        echo"<p>Som de reptilo</p>";
    }

    public function locomover() {
        echo"<p>Se rastejando </p>";
    }
    function getCorEscama() {
        return $this->corEscama;
    }

    function setCorEscama($corEscama) {
        $this->corEscama = $corEscama;
    }


}
