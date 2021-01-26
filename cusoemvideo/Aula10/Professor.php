<?php
require_once 'Pessoa.php';
class Professor extends Pessoa{//Inherits attributes and methods of the super class.
    private $especialidade;
    private $salario;
    
    public function receberAumento($aum) {
        $this->salario = $this->salario + $aum;
    }
    //Special methods
    
    public function getEspecialidade() {
        return $this->especialidade;
    }

    public function getSalario() {
        return $this->salario;
    }

    public function setEspecialidade($especialidade) {
        $this->especialidade = $especialidade;
    }

    public function setSalario($salario) {
        $this->salario = $salario;
    }


}
