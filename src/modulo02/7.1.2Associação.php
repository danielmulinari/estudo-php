<?php

require_once 'C:\xampp\htdocs\modulo02\7.1.1Associação-Classe-Fabricante.php';
require_once 'C:\xampp\htdocs\modulo02\7.1.2Associação-Classe-Produto.php';
$p1 = new Produto('Chocolate', 10, 7);
$f1 = new Fabricante('Fabrica de Chocolate', 'Rua tal', '93.38233892');
$p1->setFabricante($f1);
$descricao = $p1->getDescricao();
$nome_fabr = $p1->getFabricante()->getNome('Chocolate');
print "O Fabricante do produto {$descricao} é {$nome_fabr}";

//echo '<pre>';
//var_dump($p1);
//var_dump ($f1);
