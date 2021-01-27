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

    public function envelhecer($anos) {
        $this->setIdade($this->getIdade() + $anos);
    }

    public function aumentarSalario($porcentagem) {
        $porcentagem = ($porcentagem / 100) * $this->salario;
        $this->setSalario($this->getSalario() + $porcentagem);
    }

    public function diminuirSalario($porcentagem) {
        $porcentagem = ($porcentagem / 100) * $this->salario;
        $this->setSalario($this->getSalario() - $porcentagem);
    }

    public function ganharBonus($porcentagem) {
        if($porcentagem) {
            $porcentagem = ($porcentagem / 100) * $this->salario;
            $this->setSalario($this->getSalario() + $porcentagem);
        } else {
            $this->setSalario($this->getSalario());
        }
    }
    public function mostrarDados(){
        return "Objeto Pessoa <br><p>Nome:{$this->nome} <br>Idade: {$this->idade} <br>Altura: {$this->altura}<br>Salario Mensal: {$this->salario}</p>";
    }

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
