<?php
require_once 'Aluno.php';
class Bolsista extends Aluno{
    private $bolsa;

    public function renovaBolsa() {
        echo"<p>Bolsa renovada Sr. ".$this->getNome()."</p>>";
    }
    public function pagarMensalidade() {
        echo"<p>".$this->getNome()." é bolsista! Então paga a mensalidade com <strong> desconto</p>";
    }

    public function setBolsa($b) {
        $this->bolsa = $b;
    }

}
