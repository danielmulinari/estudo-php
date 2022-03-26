<?php
require_once __DIR__ . '\7.3.1Cesta.php';
require_once __DIR__ . '\7.1.2Associação-Classe-Produto.php';

$c1 = new Cesta;
$p1 = new Produto('Chocolate', 10, 5);
$p2 = new Produto('Cafe', 100, 7);
$p3 = new Produto('Mostarda', 50, 3);

$c1->addItem($p1);
$c1->addItem($p2);
$c1->addItem($p3);

echo '<pre>';
var_dump($c1);
print_r($c1);
echo '<pre>';

/* foreach ($c1->getItens() as $item) 
{
    print "Item : {$item->getDescricao()} <br>";
} */
