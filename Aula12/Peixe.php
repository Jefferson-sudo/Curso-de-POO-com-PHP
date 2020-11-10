<?php
require_once 'Animal.php';
class Peixe extends Animal{
    private $corEcama;
    
    public function alimentar() {
        echo"<p>Comendo subtanacias</p>";
    }

    public function emitirsom() {
        echo"<p>Peixe não emite som </p>";
    }

    public function locomover() {
        echo"<p>Nadando</p>";
    }
    
    function soltarBolha(){
        echo"Soltando BOlha";
    }
    
   
    function getCorEcama() {
        return $this->corEcama;
    }

    function setCorEcama($corEcama) {
        $this->corEcama = $corEcama;
    }


}
