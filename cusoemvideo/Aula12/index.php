<html>
    <head>
     
    </head>
    <body>
        <pre>
         <?php
            require_once 'Mamifero.php';
            require_once 'Reptil.php';
            require_once 'Peixe.php';
            require_once 'Ave.php';
            require_once 'Canguru.php';
            require_once 'Cachorro.php';
            require_once 'Cobra.php';
            require_once 'Tartaruga.php';
            require_once 'GoldFish.php';
            require_once 'Arara.php';
            
            //Trabalhando com cores 
            require_once 'Cores.php';
            $cor = new Cores();
            $cor->corCorpo();
            $cor->corP();
         
            //Codigo Principal
            $c = new Canguru();
            $k = new Cachorro();
            $t = new Tartaruga();
            
            $c->locomover();
            $k->locomover();
            $t->locomover();
            $c->emitirsom();
            $k->emitirsom();
         ?>
        </pre>

    </body>
</html>
