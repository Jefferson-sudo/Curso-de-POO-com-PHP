<html>
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <title>POO PHP</title>
        </head>
        <body>
            <?php 
                require_once './classes/Pessoa.class.php';
                $p = new Pessoa();
                $p->setNome("jefferson");
                $p->setIdade(20);
                $p->setSalario(10000);
                $p->setAltura(1.80);
                echo"<pre>";
                print_r($p);
                echo "</pre>";
            ?>
        </body>
    </html>