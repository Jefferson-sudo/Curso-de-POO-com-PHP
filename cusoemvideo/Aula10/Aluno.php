<?php
require_once 'Pessoa.php';
class Aluno  extends Pessoa{//Inherits attributes and methods of the super class(Pessoa).
    private $mat;
    private $curso;
    
    public function cancelarMatr() {
        echo"<p>Matricula sera cancelada</p>";
    }
    public function getMat() {
        return $this->mat;
    }

    public function getCurso() {
        return $this->curso;
    }

    public function setMat($mat) {
        $this->mat = $mat;
    }

    public function setCurso($curso) {
        $this->curso = $curso;
    }


}
