<?php

$produto = [];
$produto ['descrição'] = 'Chocolate';
$produto ['estoque'] = 100;
$produto ['preço'] = 7;
$objeto = new stdClass();
foreach ($produto as $chave => $valor) {
    $objeto ->$chave = $valor;
}
echo '<pre>';
print_r($objeto);
