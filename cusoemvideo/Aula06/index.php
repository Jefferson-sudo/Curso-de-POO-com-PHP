<html>
    <head>
        <title>Projeto Controle Remoto Exemplo de Encapsulamento</title>
    </head>
    <body>
        <?php
            require_once 'ControleRemoto.php';
            $c = new ControleRemoto();
            $c->ligar();
            $c->abrirMenu();
            $c->maisVolume();
            $c->maisVolume();
            $c->ligarMudo();
            $c->desligarMudo();
            $c->play();
            $c->abrirMenu();
        ?>
    </body>
</html>

