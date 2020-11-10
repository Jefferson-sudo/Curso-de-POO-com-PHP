<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula02 POO</title>
</head>
<body>
    <pre>
    <?php
        require_once 'Caneta.php';
        //objeto caneta c1
        $c1 = new caneta;

        //definicao de atributos
        $c1 -> modelo = 'Big';
        $c1 -> cor = 'Azul';
        $c1 -> ponta = 0.5;
        $c1 -> carga = "70%";
        $c1 -> tampada = true;

        //mostrar status do objeto
        print_r($c1);


       //chamando metados
        $c1 -> tampar();
        $c1 -> destampar();
        $c1 -> rabiscar();

       
        //objeto caneta c2
        $c2 = new caneta;

        //definicao de atributos

        $c2 -> modelo = 'Compactor';
        $c2 -> cor = 'Verde';
        $c2 -> ponta = 0.7;
        $c2 -> carga = '50%';
        $c2 -> tampada = false;

        //mostrar status do objeto

        print_r($c2);

        //chamando objetos
        $c2 -> tampar();
        $c2 -> rabiscar();

?>
</pre>
</body>
</html>