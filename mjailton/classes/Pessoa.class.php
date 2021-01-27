<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/**
 * Description of Pessoa
 *
 * @author Jefferson Mateus
 */
class Pessoa {
    private $nome;
    private $idade;
    private $altura;
    private $salario;
 
    function getNome() {
        return $this->nome;
    }

    function getIdade() {
        return $this->idade;
    }

    function getAltura() {
        return $this->altura;
    }

    function getSalario() {
        return $this->salario;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setIdade($idade) {
        $this->idade = $idade;
    }

    function setAltura($altura) {
        $this->altura = $altura;
    }

    function setSalario($salario) {
        $this->salario = $salario;
    }


}