<?php
require_once 'AcoesVideo.php';
class Video implements AcoesVideo {
    private $titulo;
    private $avaliacoes;
    private $viwes;
    private $curtidas;
    private $reproduzindo;
    
    function __construct($titulo) {
        $this->titulo = $titulo;
        $this->avaliacoes = 1;
        $this->viwes = 0;
        $this->curtidas = 0;
        $this->reproduzindo = false;
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
    function getTitulo() {
        return $this->titulo;
    }

    function getAvaliacoes() {
        return $this->avaliacoes;
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
        $this->titulo = $titulo;
    }

    function setAvaliacoes($avaliacoes) {
        //Media e avaliacoes + P.avaliacao / views
        $media = ($this->avaliacoes + $avaliacoes) / $this->viwes;
        $this->avaliacoes = $media;
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


    
}
