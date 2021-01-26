<?php

require_once 'Video.php';
require_once 'Gafanhoto.php';

class Visualizacao {

    private $espectador;
    private $filme;

    function __construct($espectador, $filme) {
        $this->espectador = $espectador;
        $this->filme = $filme;
        $this->filme->setViwes($this->filme->getViwes() + 1);//Adiciona mais um viwes 
        $this->espectador->setTotAssistido($this->espectador->getTotAssistido() + 1);//Adiciona mais 1 em TotAssistido
    }

    public function avaliar() {
        $this->filme->setAvaliacoes(5);
    }

// Recurso tecnico para fazer um tipo de "Sobrecarga" do metado avaliar em PHP. PHP não tem suporte a sobrecarga

    public function avaliarNota($nota) {
        $this->filme->setAvaliacoes($nota);
    }

    public function avaliarPorce($porc) {
        $nova = 0;
        if ($porc <= 20) {
            $nova = 3;
        } elseif ($porc <= 50) {
            $nova = 5;
        } elseif ($porc <= 90) {
            $nova = 8;
        } else {
            $nova = 10;
        }
        $this->filme->setAvaliacoes($nova);
    }

}

function getEspectador() {
    return $this->espectador;
}

function getFilme() {
    return $this->filme;
}

function setEspectador($espectador) {
    $this->espectador = $espectador;
}

function setFilme($filme) {
    $this->filme = $filme;
}
