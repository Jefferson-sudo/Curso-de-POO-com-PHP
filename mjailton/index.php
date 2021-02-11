<html>
    <!DOCTYPE html>

        <head>
            <title>POO PHP</title>
        </head>
        <body>
            <pre>
            <?php
            require_once './classes/Figura.class.php';
            require_once './classes/Circulo.class.php';
            require_once './classes/Quadrado.class.php';

            $circulo = new Circulo("ciculo", 2);
            echo $circulo->getArea();
            
            $quadrado = new Quadrado("Quadrado", 5);
            $quadrado->calcularArea();
            echo $quadrado->getArea();
            var_dump($circulo, $quadrado);
            ?>
            </pre>
        </body>
    </html>