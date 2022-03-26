<?php

$produto = new stdClass();
$produto->descrição = 'Chocolate';
$produto ->estoque = 100;
$produto ->preço = 7;
$vetor1 = (array)  $produto ;
echo '<pre>';
$vetor2 = [ 'descrição' => 'Café',
             'estoque' => 100,
              'preço' => 7 ];
$produto2 = (object) $vetor2;
var_dump($vetor1);
var_dump($produto2);
print $produto2 -> descrição;
echo '<pre>';
print $produto -> descrição;
$produto = [];
$produto ['descrição'] = 'Chocolate';
$produto ['estoque'] = 100;
$produto ['preço'] = 7;
