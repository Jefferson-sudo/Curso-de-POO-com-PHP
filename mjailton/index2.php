<html>
    <!DOCTYPE html>
        <head>
            <title>POO PHP</title>
        </head>
        <body>
<?php
            
            require_once './classes/Clonar.class.php';
            /*
              require_once './classes/Empresa.class.php';
              require_once './classes/Funcionario.class.php';
              $f = new Funcionario('Luciene', 100);
              $f2 = new Funcionario('Jefferson', 500);
              $empresa = new Empresa('Inforltda');
              $empresa->ContratarFuncionario($f, 'Professor de informatica', 2000);
              $empresa->ContratarFuncionario($f2, 'Programador', 4500);
              $empresa->pagarSalario();
              var_dump($f, $f2);
              $objA = new Clonar(10);
              echo"Valor inicial do objeto A é {$objA->imprimeValor()}";
              $objB = clone($objA);
              echo"<br>-------------Clonando o obj A------------------";
              echo "<br>Valor do objeto A é {$objA->imprimeValor()}";
              echo "<br>Valor do objeto B é {$objB->imprimeValor()}";
              echo"<br>-------------Alterando o valor do obj B------------------";
              $objB->valor = 20;
              echo "<br>Valor do objeto A clonado é {$objA->imprimeValor()}";
              echo "<br>Valor do objeto B clonado é {$objB->imprimeValor()}";
              echo"<br>-------------Alterando o valor do obj A------------------";
              $objA->valor = 30;
              echo "<br>Valor do objeto A clonado é {$objA->imprimeValor()}";
              echo "<br>Valor do objeto B clonado é {$objB->imprimeValor()}"; */
            $objA = new Clonar(10);
            
            $objB = clone($objA);
            echo"<br>-------------Clonando o obj A------------------";
            echo "<br>Valor do objeto A é {$objA->imprimeValor()}";
            echo "<br>Valor do objeto B é {$objB->imprimeValor()}";
            ?>

        </body>
    </html>
