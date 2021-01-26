<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <link rel= "stylesheet" type= "text/css" href= "css/estilo.css" />
        <title>Swapping Songs</title>
    </head>
    <body>
        <div id="video">
            <pre>
                <?php
                require_once 'Video.php';
                require_once 'Gafanhoto.php';
                $v = [];
                $v[0] = new Video("Caracrachar caracrachar");
                $v[0]->pause();
                print_r($v);
                $g = [];
                $g[0] = new Gafanhoto("Jerson", 20, "M", "Meu@login");
                print_r($g);
                ?>
            </pre>
        </div>
    </body>
</html>