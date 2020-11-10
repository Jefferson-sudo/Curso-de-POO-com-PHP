<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
            <?php
            require_once'Aluno.php';
            require_once 'Bolsista.php';
            /* require 'Visitante.php';
              $v1 = new Visitante();
              $v1->setNome("Juvenal");
              $v1->setIdade(19);
              $v1->setSexo("M");
              $v1->fazerAniversario(); */

            $a = new Aluno();
            $a->setNome("Pedro");
            $a->setMatricula(11);
            $a->setIdade(20);
            $a->setSexo("M");
            $a->setCurso("Ańalise e desenvolvimento de sistemas");
            $a->pagarMensalidade();
            print_r($a);

            $b1 = new Bolsista();
            $b1->setMatricula(1.2);
            $b1->setNome("Jubileu");
            $b1->setBolsa(3234646566464.554545);
            $b1->setCurso("Desenvolvimento de sistemas Web");
            $b1->setIdade(53);
            $b1->pagarMensalidade();
            
            print_r($b1);
            
           
            //print_r($v1);
            ?>
        </pre>
    </body>
</html>
