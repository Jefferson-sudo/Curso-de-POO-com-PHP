<?php

 class Clonar{
     public $valor;
     
     public function __construct($valor) {
         $this->valor = $valor;
     }
     
     public function imprimeValor(){
         return $this->valor;
     }
}
