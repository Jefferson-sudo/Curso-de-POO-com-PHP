<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<pre>
    <?php
        //Chamando a classe caneta e criando o objeto c1
        require_once 'caneta.php';
        $c1 = new caneta("BIG", "Azul", 0.5);
        $c2 = new caneta("Compactor", "Vermelha", 0.7);

        print_r($c1);
        print_r($c2);
    ?>
    </p>
</body>
</html>