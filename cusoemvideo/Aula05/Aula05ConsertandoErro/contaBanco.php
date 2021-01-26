<?php
/*
 * @author Analista Desenvolvedor -> Jefferson Mateus
 */
class contaBanco {
  //Atributos
  public $numConta;
  protected $tipo;
  private $dono;
  private $saldo;
  private $status;
  
  //Metados
    public function abrirConta($t){
      $this->setTipo($t);
      $this->setStatus(true);
      if($t == "CC"){
          $this->setSaldo(0);
      }elseif($t == "CP"){
          $this->setSaldo(0);
      }
}

    public function fecharConta() {
    if($this->getSaldo() > 0){
        echo"<p>Erro. A conta ainda possui dinhero. É nescessario sacar todo o valor antes de prosseguir</p>";
    }elseif ($this->getSaldo() < 0) {
            echo"<p>A conta esta em debito. Por favor pague suas dividas ao banco!</p>";
        } else {
            $this->setStatus(false);
            echo "<p>Conta cancelada</p>";
        }
}

    public function depositar($v){
        if($this->getStatus()){
            $this->setSaldo($this->getSaldo()+$v);//setSaldo recebe getSaldo mais $v
        }else{
            echo"Conta fechada";
        }
    }
    
    public function sacar($v) {
        if($this->getStatus()){
            if($this->getSaldo()>$v){
              //$this->saldo = $this->saldo - $v;
                $this->setSaldo($this->getSaldo() - $v);
                echo"<p>Saque de $v autorizado na conta do(a) ".$this->getDono()."</p>";
            }else{
                echo "<p>Saldo insuficiente. Você possui em conta R$ ".$this->getSaldo()."</p>";
            }
        }else{
            echo"<p>A conta não esta ativa. Impossivel fazer saque!</p>";
        }
    }


    public function pagarMensal() {
        if($this->getTipo()=="CC"){
            $v = 12;
        }elseif ($this->getTipo()=="CP") {
            $v = 20;
        }
        
        if($this->getStatus()){
            $this->setSaldo($this->getSaldo() - $v);
        }else{
            echo"<p>Problemas com a conta. Não posso cobrar!</p>";
        }
    }     
    
    //Metados especiais
    
    function __construct() {//Metado construtor
        $this->setSaldo(0);
        $this->setStatus(false);
        echo "<p>Conta criada com sucesso!</p>";
    }
    //settar and gettar
    function getNumConta() {
        return $this->numConta;
    }

    function getTipo() {
        return $this->tipo;
    }

    function getDono() {
        return $this->dono;
    }

    function getSaldo() {
        return $this->saldo;
    }

    function getStatus() {
        return $this->status;
    }

    function setNumConta($numConta): void {
        $this->numConta = $numConta;
    }

    function setTipo($tipo): void {
        $this->tipo = $tipo;
    }

    function setDono($dono): void {
        $this->dono = $dono;
    }

    function setSaldo($saldo): void {
        $this->saldo = $saldo;
    }

    function setStatus($status): void {
        $this->status = $status;
    }

}
?>
