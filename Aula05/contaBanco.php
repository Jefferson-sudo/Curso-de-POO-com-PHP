<?php
class contaBanco {

    //Atributos 
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    //metados
    public function abrirConta($t) {
        $this->setTipo($t);
        $this->settipo(true);
        if ($t == "CC") {
            $this->setsaldo(50);
        } elseif ($t == "CP") {
            $this->setsaldo(150);
        }
    }

    public function fecharConta() {
        if ($this->getsaldo() > 0) {
            echo"<p> Conta ainda tem dinheiro, não foi possivel cancelar a conta. Por favor, saque todo o dinheito!</p>";
        } elseif ($this->getsaldo() < 0) {
            echo"<p>Conta está em débito. Impossivel cancelar conta. Por favor pague toso os seus debitos!</p>";
        } else {
            $this->setstatus(false);
            echo"Operação efetuada com sucesso!";
        }
    }

    public function depositar($valor) {
        if ($this->getstatus() == true) {
            $this->setsaldo($this->getsaldo() + $valor);
        } else {
            echo"Não foi possivel efetuar o deposito.Verifique se a conta esta ativa e tenta novamente!";
        }
    }

    public function sacar($valor) {
        if ($this->getstatus()) {
            if ($this->getsaldo() > $valor) {
                $this->setsaldo($this->getsaldo() - $valor);
            } else {
                echo"Saldo insuficiente para saque!";
            }
        } else {
            echo"Não foi possivel fazer o saque. Por favor verifique se a conta esta ativa!";
        }
    }

    public function pagarMensal() {
        $v = NULL;
        if ($this->gettipo() == "CC") {
            $v = 12;
        } elseif ($this->gettipo() == "CP") {
            $v = 20;
        }

        if ($this->getstatus() == true) {
            $this->setvalor($this->getvalor() - $v);
        } else {
            echo"Um erro esta acontecendo!";
        }
    }

    //Metados especiais
    public function __contruct($d, $t) {//metado construtor
        $this->setdono($d);
        $this->settipo($t);
        $this->setsaldo(0);
        $this->setstatus(false);
        echo"Conta criada com sucesso!";
    }

    public function getnumConta() {
        return $this->numConta;
    }

    public function setnumConta($numConta) {
        $this->numConta = $numConta;
    }

    public function gettipo() {
        return $this->tipo;
    }

    public function settipo($tipo) {
        $this->tipo = $tipo;
    }

    public function getdono() {
        return $this->dono;
    }

    public function setdono($dono) {
        $this->dono = $dono;
    }

    public function getsaldo() {
        return $this->saldo;
    }

    public function setsaldo($saldo) {
        $this->saldo = $saldo;
    }

    public function getstatus() {
        return $this->status;
    }

    public function setstatus($status) {
        $this->status = $status;
    }

}
