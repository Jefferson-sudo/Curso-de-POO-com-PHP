<?php

require_once 'Mamifero.php';
class Cachorro  extends Mamifero {
    public function emitirSom(){
        echo"<p>Au! AU! Au!</p>";
    }
    public function reagirFrase($frase){
        if($frase == "Toma comida" || $frase == "Olá"){
            echo"<p>Abanar o rabo e brincar</p>";
        }else if($frase == "vai deitar"){
            echo"<p>Rosnar e latir dezendo, vai tomar no seu cu, deitar é o caralho porra. Tô puto !</p>";
        }
    }
    public function reagirHora($hora,$min){
        if($hora < 12 && $min > 50){
            echo"<p>Abanar</p>";
        }else if($hora >= 18){
            echo"<p>Ignorar</p>";
        }else{
            echo"<p>Abanar o rabo  e Latir</p>";
        }
    }
    public function reagirDono($Dono){
        if($Dono){
            echo"<p>Anar o rabo e latir</p>";
        }else {
            echo"<p>Rosnar e ficar branvo! </p>";
        }
    }
    public function reagirIdadePeso($idade, $peso){
        if($idade < 0.6 && $peso > 3){
            echo"<p>Ficar bravo e latir</p>";
        }else if($idade > 1){
            echo"<p>Bricnar  e lamber</p>";
        }
    }
}