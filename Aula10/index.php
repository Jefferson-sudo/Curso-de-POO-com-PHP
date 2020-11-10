<!DOCTYPE html>
<html lang="PT-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Escola Estadual Waldomiro Mendes de Almeida</title>
    </head>
    <body>
        <pre>
            <?php
            require_once 'Pessoa.php';
            require_once 'Aluno.php';
            require 'Professor.php';
            require 'Funcionario.php';

            //Main program
            $p1 = new Pessoa();
            $p2 = new Aluno();
            $p3 = new Professor();
            $p4 = new Funcionario();

            $p1->setNome("Pedro");
            $p2->setNome("Maria");
            $p3->setNome("Claudia");
            $p4->setNome("Fabiana");

            $p2->setCurso("Análise e Desenvolvimento de Sistemas");
            $p3->setSalario(2500.75);
            $p4->setSetor("Informatica");
            
            print_r($p1);
            print_r($p2);
            print_r($p3);
            print_r($p4);
                
            ?>
          </pre>
    </body>
</html>