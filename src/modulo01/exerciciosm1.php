<?php

$pessoa = [];
$pessoa ['nome'] = 'Joao';
$pessoa  ['endereco'] = 'Rua do Joao';
$pessoa ['codigo'] = '001';
$vetor['Joao001'] = $pessoa;
$pessoa = [];
$pessoa ['nome'] = 'Ari';
$pessoa  ['endereco'] = 'Rua do Ari';
$pessoa ['codigo'] = '002';
$vetor['Ari002'] = $pessoa;
asort($vetor);
// echo '<pre>';
// var_dump($vetor);
// echo '</pre>';

// foreach ($pessoa as $chave => $informação)
// {
//       print  $chave . ':' .$informação . '<br>';
// }
