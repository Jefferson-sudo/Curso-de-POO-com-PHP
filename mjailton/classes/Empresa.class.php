<?php

class Empresa {
    public $nomeEmpresa;
    public $qtdFuncionarios;
    public $funcionario;
    
    public function __construct($nome){
        $this->nomeEmpresa = $nome;
        $this->qtdFuncionarios = 0;
    }
    
    
}
