<?php
require_once 'Mamifero.php';
require_once 'Lobo.php';
require_once 'Cachorro.php';

$cachorro = new Cachorro();
$cachorro->emitirSom();
$c = [];
$c[0] = new Cachorro();
$c[0]->reagirFrase("Olá");

$c[1] = new Cachorro();
$c[1]->reagirFrase("vai deitar");
$c[1]->reagirHora(12, 49);



