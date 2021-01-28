<?php


class Funcionario {
   public $nomeFuncionario;
   public $cargo;
   public $empresaTrabalha;
   public $salario;
   public $saldoNaConta;
   
   public function __construct($nome, $saldoNaConta) {
     $this->nome = $nome ;
     $this->saldoNaConta = $saldoNaConta;
   }
   
   public function foitCOntratado($empresa, $cargo, $salario){
       $this->empresaTrabalha = $empresa;
       $this->cargo = $cargo;
       $this->salario = $salario;
   }
   public function receberSalario($valor){
       $this->saldoNaConta = $valor;
   }
   
}
