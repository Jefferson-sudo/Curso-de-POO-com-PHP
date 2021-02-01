<?php

class Empresa {
    public $nomeEmpresa;
    public $qtdFuncionarios;
    
    /**@var Funcionario **/  //Com isso tenho acesso a todos os metados da classe Funcionario
    public $funcionario;    // $funcionario é do tipo Funcionario
    
    public function __construct($nome){
        $this->nomeEmpresa = $nome;
        $this->qtdFuncionarios = 0;
    }
    
    public function ContratarFuncionario($funcionario, $cargo, $salario){
        $this->funcionario = (object) $funcionario;//Cash dizendo que vai retornar um objeto
        $this->funcionario->foitContratado($this->nomeEmpresa, $cargo, $salario);
        $this->qtdFuncionarios +=1;
    }
    
    public function pagarSalario(){
        $this->funcionario->receberSalario($this->funcionario->salario);
    }
}
