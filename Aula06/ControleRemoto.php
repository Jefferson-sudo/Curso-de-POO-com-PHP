<?php

require_once 'Controlador.php';

class ControleRemoto implements Controlador {

    private $volume;
    private $ligado;
    private $tocando;

    //Metados especiais
    public function __construtor() {//Construtor
        $this->setVolume(50);
        $this->setLigado(false);
        $this->setTocando(false);
    }

    //Getter
    public function getVolume() {
        return $this->volume;
    }

    public function getLigado() {

        return $this->ligado;
    }

    public function getTocando() {

        return $this->tocando;
    }

    //Setters
    public function setVolume($Volume) {
        $this->volume = $Volume;
    }

    public function setLigado($ligado) {
        $this->ligado = $ligado;
    }

    public function setTocando($tocando) {
        $this->tocando = $tocando;
    }

    //Metados abstratos da interface Controlador.php
    public function abrirMenu() {
        echo "<br> Está ligado?: " . ($this->getLigado() ? "SIM" : "NÃO");
        echo "<br> Esta tocando?: " . ($this->getTocando() ? "SIM" : "NÃo");
        echo "<br>Volume: " . $this->getVolume();
        for ($i = 0; $i <= $this->getVolume(); $i+=10) {
            echo"| ";
        }
        echo "<br>";
    }

    public function desligar() {
        $this->ligado(false);
    }

    public function desligarMudo() {
        if ($this->getLigado() && $this->getVolume() == 0) {
            $this->setVolume(50);
        }
    }

    public function fecharMenu() {
        echo "Menu fechado";
    }

    public function ligar() {
        $this->setLigado(true);
    }

    public function ligarMudo() {
        if ($this->getLigado() && $this->getvolume() >= 1) {
            $this->setVolume(0);
        }
    }

    public function maisVolume() {
        if ($this->getLigado() && $this->getVolume() <= 100) {
            $this->setVolume($this->getVolume() + 10);
        }
    }

    public function menosVolume() {
        if ($this->getLigado() && $this->getVolume() >= 1) {
            $this->setVolume($this->getVolume() - 10);
        }
    }

    public function pause() {
        if ($this->getLigado() && $this->getTocando()) {
            $this->tocando(false);
        }
    }

    public function play() {
        if ($this->getLigado() && !($this->getTocando())) {
            $this->setTocando(true);
        }
    }

}
