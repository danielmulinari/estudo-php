<?php
$pessoa = [];
$pessoa ['nome'] = 'Joao';
$pessoa  ['endereço'] = 'Rua do Joao';
$pessoa ['codigo'] = '001';
//var_dump($pessoa); 
foreach ($pessoa as $chave => $informação)
{ 
      print  $chave . ':' .$informação . '<br>';
}
echo '<br>';
$pessoa = [];
$pessoa ['nome'] = 'Ari';
$pessoa  ['endereço'] = 'Rua do Ari';
$pessoa ['codigo'] = '002';
foreach ($pessoa as $chave => $informação)
{ 
      print  $chave . ':' .$informação . '<br>';
}