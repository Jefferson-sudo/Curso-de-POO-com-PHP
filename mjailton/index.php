<html>
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <title>POO PHP</title>
        </head>
        <body>
            <pre>
            <?php 
                require_once './classes/Empresa.class.php';
                require_once './classes/Funcionario.class.php';
                
                $f = new Funcionario('Luciene', 100);
                
                $f2 = new Funcionario('Jefferson', 500);
                
                
                
                $empresa = new Empresa('Inforltda');
                $empresa->ContratarFuncionario($f, 'Professor de informatica', 2000);
                $empresa->ContratarFuncionario($f2, 'Programador', 4500);
                $empresa->pagarSalario();
                
            
              var_dump($f, $f2);
 
            ?>
            </pre>
        </body>
    </html>