<?php
class Lutador {

    private $nome, $categoria, $nacionalidade;
    private $altura, $peso;
    private $vitorias, $derrotas, $empates, $idade;

    //Methods

    function apresentar() {
        echo "<p>------------------</p>";
        echo "<p>CHEGOU A HORA ! O lutador " . $this->getNome() . "</p>";
        echo "<p>Veio diretamente de " . $this->getNacionalidade() . "</p>";
        echo "<p>Tem " . $this->getIdade() . "anos e pesa " . $this->getPeso() . "Kg</p>";
        echo "<p>Ele tem " . $this->getVitorias() . " vitórias</p>";
        echo "<p>" . $this->getDerrotas() . " derrotas e " . $this->getEmpates() . " empates</p>";
    }

    function status() {
        echo "<p>-----------------</p>";
        echo "<p>" . $this->getNome() . " é um peso " . $this->getCategoria() . "</p>";
        if($this->getVitorias() > 1){
            echo "e ja ganhou " . $this->getVitorias() . " vezes";
        }elseif ($this->getVitorias() == 1) {
            echo "e ja ganhou uma vez";
        }else{
            echo "e nunca perdeu uma luta";
        }
        
        if($this->getDerrotas() > 1) {
            echo " perdeu " . $this->getDerrotas()." vezes";
        }elseif($this->getDerrotas() == 1){
            echo " e perdeu somente uma vez" ;
        }else{
            echo " e nuca perdeu nenhuma luta";
        }
    }

    function ganharLuta() {
        $this->setVitorias($this->getVitorias() + 1);
    }

    function perderLuta() {
        $this->setDerrotas($this->getDerrotas() + 1);
    }

    function empatarLuta() {
        $this->empates = $this->empates + 1;
    }

    //Special methods
    function __construct($nome, $nacionalidade, $idade, $altura, $peso, $vitorias, $derrotas, $empates) {//Metado construtor
        $this->nome = $nome;
        $this->nacionalidade = $nacionalidade;
        $this->idade = $idade;
        $this->altura = $altura;
        $this->setPeso($peso); //Note: If I do not use the special method of setPeso, the method will not be validated and the setCategoria will not work. Reference -> line 99
        $this->vitorias = $vitorias;
        $this->derrotas = $derrotas;
        $this->empates = $empates;
    }

    function getNome() {
        return $this->nome;
    }

    function getNacionalidade() {
        return $this->nacionalidade;
    }

    function getIdade() {
        return $this->idade;
    }

    function getAltura() {
        return $this->altura;
    }

    function getPeso() {
        return $this->peso;
    }

    function getCategoria() {
        return $this->categoria;
    }

    function getVitorias() {
        return $this->vitorias;
    }

    function getDerrotas() {
        return $this->derrotas;
    }

    function getEmpates() {
        return $this->empates;
    }

    function setNome($nome): void {
        $this->nome = $nome;
    }

    function setNacionalidade($nacionalidade): void {
        $this->nacionalidade = $nacionalidade;
    }

    function setIdade($idade): void {
        $this->idade = $idade;
    }

    function setAltura($altura): void {
        $this->altura = $altura;
    }

    function setPeso($peso): void {
        $this->peso = $peso;
        $this->setCategoria(); //Calling method setCategoria
    }

    private function setCategoria(): void {
        if ($this->peso < 52.2) {
            $this->categoria = "Inválido";
        } elseif ($this->peso <= 70.3) {
            $this->categoria = "Leve";
        } elseif ($this->peso <= 83.9) {
            $this->categoria = "Médio";
        } elseif ($this->peso <= 120.2) {
            $this->categoria = "Pesado";
        } else {
            $this->categoria = "Inválido";
        }
    }

    function setVitorias($vitorias): void {
        $this->vitorias = $vitorias;
    }

    function setDerrotas($derrotas): void {
        $this->derrotas = $derrotas;
    }

    function setEmpates($empates): void {
        $this->empates = $empates;
    }

}
