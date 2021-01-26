<?php
    class caneta {
        private $modelo;
        private $cor;
        private $ponta;
        private $tampada;

        public function caneta($m, $c, $p) {//Metado construtor
            $this->modelo = $m;
            $this->cor= $c;
            $this->ponta= $p;
            $this->tampar();
        }//Para a construção do metado construtor tambem pode ser usado __construct(){...};

        public function tampar() {
            $this->tampada = true;
        }

        //metados especiais
        public function getModelo() {
            return $this->$modelo;

        }
        
        public function setModelo($m) {
            $this->$modelo = $m;
        }

        public function getPonta() {
            return $this->$ponta;
        }

        public function setPonta($p) {
            $this->ponta = $p;
        }
    }
?>