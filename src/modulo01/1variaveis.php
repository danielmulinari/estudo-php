<?php

$nome = 'Daniel';
$Sobrenome = 'Mulinari';
$nome_completo =  "$nome   $Sobrenome";
print $nome_completo . "<br>";
print 'filiação:' . "<br>";
print 'Geraldo Prates da Silva' . "<br>" ;
print 'Angela Mulinari' . "<br>";
$a = 8;
$b = 3;
var_dump($a * $b);
$a = 5;
$b = $a;
$a = 10;
$b = $a;
var_dump($a);
var_dump($b);
$peso = 30;
$multa = ($peso > 25);
var_dump($multa);
if ($peso > 25) {
}
print 'multa' . "<br>";
$nome = "asdfff" . "<br>";
if ($nome) {
    print 'nome tem conteúdo' . "<br>";
}
$lista = ['vermelho','verde','azul','amarelo'];
var_dump($lista);
$pessoa = new stdClass();
$pessoa->nome = 'Daniel';
$pessoa ->altura = 1.7;
var_dump($pessoa);
