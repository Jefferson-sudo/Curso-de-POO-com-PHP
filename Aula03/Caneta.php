<?php 
    class caneta{
        //atributos
        public $modelo;
        public $cor;
        private $ponta;
        protected $carga;
        protected $tampada;

        //metados
        public function rabiscar(){
            if($this->tampada == true){
                echo"<p>Erro: Não posso rabiscar</p>";
            }else{
                echo"<p>Estou rabiscando...</p></br>";
            }
           
        }

        public function tampar(){
            $this->tampada = true;
        }

        public function destampar(){
            $this->tampada = false;
        }

    }
?>