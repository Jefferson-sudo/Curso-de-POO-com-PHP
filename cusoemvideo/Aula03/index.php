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


       //chamando metados
       $c1 -> rabiscar();
       $c1 -> tampar();
       $c1 -> destampar();
       
      //mostrar status do objeto
      print_r($c1);
?>
</pre>
</body>
</html>