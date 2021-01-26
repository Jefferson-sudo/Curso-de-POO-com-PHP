<?php
require_once 'Acoesvideo.php';
class Video implements Acoesvideo {
    private $titulo;
    private $avaliacao;
    private $viwes;
    private $curtidas;
    private $reproduzindo;

    function __construct($titulo) {
        $this->titulo = $titulo;
        $this->avaliacao = 0;
        $this->viwes = 0;
        $this->curtidas = 0;
        $this->reproduzindo = false;
    }

    function getTitulo() {
        return $this->titulo;
    }

    function getAvaliacao() {
        return $this->avaliacao;
    }

    function getViwes() {
        return $this->viwes;
    }

    function getCurtidas() {
        return $this->curtidas;
    }

    function getReproduzindo() {
        return $this->reproduzindo;
    }

    function setTitulo($titulo) {
        $this->tirulo = $titulo;
    }

    function setAvaliacao($avaliacao) {
        $this->avaliacao = $avaliacao;
    }

    function setViwes($viwes) {
        $this->viwes = $viwes;
    }

    function setCurtidas($curtidas) {
        $this->curtidas = $curtidas;
    }

    function setReproduzindo($reproduzindo) {
        $this->reproduzindo = $reproduzindo;
    }

    public function like() {
        $this->curtidas++;
    }

    public function pause() {
        $this->reproduzindo = false;
    }

    public function play() {
        $this->reproduzindo = true;
    }

}
