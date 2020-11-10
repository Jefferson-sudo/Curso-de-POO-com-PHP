<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!--Dev Jefferson Mateus-->
        <title>Projeto Final</title>
        <style>
            body{
                font-family: ubuntu;
                color:darkslategrey;
            }
            pre{
                font-family: ubuntu;
                color: black;
                font-size: 20px;
            }
            h4{
                color:green;
            }
        </style>
    </head>
    <body>
        <h1>Jefferson Mateus</h1>
        <p>Esse é o projeto final do curso de Orientação a Objetos do curso em video do professor Gustavo Guanabara.</p>
        <h4>Aqui vai um print_r dos objetos: </h4>
        <pre>
            <?php
            require_once 'AcoesVideo.php';
            require_once 'Video.php';
            require_once 'Gafanhoto.php';
            require_once 'Visualizacao.php';

            //Video
            $v = [];
            $v[0] = new Video("As tranças do rei careca");
            $v[1] = new Video("Aulas de PHP");
            $v[2] = new Video("Curso de WordPress");

            //Gafanhoto
            $g = [];
            $g [0] = new Gafanhoto("Jose", 32, "m", "Jose32m");
            $g[1] = new Gafanhoto("Jefferson Mateus", 20, "Masculino", "Jeffeson6260");

            //Visualização
            $vis = [];
            $vis[0] = new Visualizacao($g[0], $v[0]); //Jose assiste As tranças do rei careca
            $vis[1] = new Visualizacao($g[1], $v[1]); //Jefferson mateus asssite Aulas de PHP
            $vis[2] = new Visualizacao($g[0], $v[2]);//Jefferson mateus assiste curso de WordPress
            $vis[3] = new Visualizacao($g[0], $v[2]);//Jose assiste curso de WordPress
            $vis[1]->avaliarPorce(90);
            $vis[0]->avaliar();
            
            print_r($v[2]);
            print_r($vis[0]);
            print_r($vis[1]);
            ?>
        </pre>
    </body>
</html>