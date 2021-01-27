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
                $p->setSalario(1100);
                $p->setAltura(1.80);
                $p->envelhecer(0);
                $p->aumentarSalario(100);
                $p->diminuirSalario(3);
                $p->ganharBonus(15);
                
                echo"<pre>";
                echo $p->mostrarDados();
                echo "</pre>";
            ?>
        </body>
    </html>