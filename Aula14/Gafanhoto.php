<?php

require_once 'Pessoa.php';

class Gafanhoto extends Pessoa {

    private $login;
    private $totAssistido;

    function __construct($nome, $idade, $sexo, $login) {
        parent::__construct($nome, $idade, $sexo); //Chamada a atributos da super classe abstrata Pessoa
        $this->login = $login;
        $this->totAssistido = 0;
    }

    public function viuMaisum() {
        $this->torAssistidos += 1;
    }

    function getLogin() {
        return $this->login;
    }

    function getTotAssistido() {
        return $this->totAssistido;
    }

    function setLogin($login) {
        $this->login = $login;
    }

    function setTotAssistido($totAssistido) {
        $this->totAssistido = $totAssistido;
    }

}
