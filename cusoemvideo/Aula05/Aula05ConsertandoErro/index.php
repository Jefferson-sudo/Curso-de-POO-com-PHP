<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
        require_once 'contaBanco.php';
        $p1 = new contaBanco();//Jubileu
        $p2 = new contaBanco();//Creuza
        
        $p1->abrirConta("CC");
        $p1->setDono("Jubileu");
        $p1->setNumConta(5010);
        $p1->depositar(300);
   
        
        $p2->abrirConta("CP");
        $p2->setDono("Creuza");
        $p2->setNumConta(6020);
        $p2->depositar(500);
        $p2->sacar(100);
        
        print_r($p1);
        print_r($p2);
        ?>
        </pre>
    </body>
</html>
