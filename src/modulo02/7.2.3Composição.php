<?php

require_once 'C:\xampp\htdocs\modulo02\7.2.1Composição-Caracteristica.php';
require_once 'C:\xampp\htdocs\modulo02\7.2.2Composição-Produto.php';
$p1 = new Produto('Chocolate', 10, 7);
$p1->addCaracteristica('Cor', 'Branco');
$p1->addCaracteristica('Peso', '500gr');
/*
echo'<pre>';
print_r ($p1);
echo'<pre>';
*/
print 'Produto:' . $p1->getDescricao() . '<br>';
foreach ($p1->getCaracteristicas() as $caracteristica) {
    $nome =  $caracteristica->getNome();
    $valor = $caracteristica->getValor();
    print "Caracteristica {$nome} = {$valor} <br>";
}
