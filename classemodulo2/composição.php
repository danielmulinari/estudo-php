<?php
require_once 'classes/produto.php';
require_once 'classes/Caracteristicas.php';

$p1 = new Produto ('Chocolate', 10, 7);
$p1 -> addCaracteristica('Cor', 'Branco');
$p1 -> addCaracteristica('Peso', '500gr');

var_dump($p1);