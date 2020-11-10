<?php 
    class caneta{
        //atributos
        var $modelo;
        var $cor;
        var $ponta;
        var $carga;
        var $tampada;

        //metados
        function rabiscar(){
            if($this->tampada == true){
                echo"<p>Erro: Não posso rabiscar</p>";
            }else{
                echo"<p>Estou rabiscando...</p></br>";
            }
           
        }

        function tampar(){
            $this->tampada = true;
        }
        function destampar(){
            $this->tampada = false;
        }

    }
?>