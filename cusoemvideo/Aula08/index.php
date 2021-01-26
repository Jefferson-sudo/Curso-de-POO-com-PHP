<!DOCTYPE>
<html>
    <body>
        <pre>
            <?php
            require 'Pessoa.php';
            require 'Livro.php';

            $p[0] = new Pessoa("jose", 20, "M");
            $p[1] = new Pessoa("Maria", 21, "F");

            $l[0] = new Livro("PHP basico", "Dias", 200, $p[1]);
            $l[1] = new Livro("POO PHP", "Souza", 250, $p[0]);
            $l[2] = new Livro("PHP AVANCADO", "Ferreira", 450, $p[1]);

            print_r($l[0]);//continuar 15;16
            ?>
        </pre>
    </body>
</html>