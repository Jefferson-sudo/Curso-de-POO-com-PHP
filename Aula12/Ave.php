<?php

require_once 'Animal.php';
class Ave extends Animal{
    private $corPena;
    
    public function alimentar() {
        echo"<p>Comendo</p>";
    }

    public function emitirsom() {
        echo"<p>Cantando</p>";
    }

    public function locomover() {
        echo"<p>Voando</p>";
    }
    function getCorPena() {
        return $this->corPena;
    }

    function setCorPena($corPena) {
        $this->corPena = $corPena;
    }


}
