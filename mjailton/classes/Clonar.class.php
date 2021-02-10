<?php

 class Clonar{
     public $valor;
     
     public function __construct($valor) {
         $this->valor = $valor;
     }
     
     public function imprimeValor(){
         return $this->valor;
     }
     public function __clone() {
         return "Obejeto clonado novo valor; ".$this->valor += 50;
         $this->valor += 50;
     }
}
