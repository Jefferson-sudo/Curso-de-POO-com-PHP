<html>
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <title>POO PHP</title>
        </head>
        <body>
            <?php 
                require_once './classes/Pessoa.class.php';
                $p = new Pessoa("jefferson",20);//Para criar um objeto é obrigatorio coloca nome e idade
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