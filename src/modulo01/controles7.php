<?php

/*
$salario = 2000;
$tempo = 12;
if (($salario < 1000) AND ($tempo >= 12))
{
print 'promoção';
}
else
{
print 'sem promoção' . "<br>";
}
*/

//$valor_venda = 110;
/*
if ($valor_venda > 100)
{
    $resutado = 'muito caro';
}
else
{
    $resultado = 'pode comprar';
}
var_dump($resultado);
*/
//$resultado = ($valor_venda > 100)? 'muito caro': 'pode comprar';
//var_dump($resultado);
/*
$cont = 1;
while ( $cont < 5);
{
print $cont . '';
$cont ++;
}
*/
for ($cont = 1; $cont <= 10; $cont++) {
    print $cont . '' . "<br>";
}
$tipo = 'pdf';
switch ($tipo) {
    case 'pdf':
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    print 'arquivo PDF' . "<br>";

        break;
    case 'doc':
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    print 'arquivo DOC';

        break;
    default:
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    print 'arquivo default';
}

$tipo = 'pdf';
if ($tipo == 'pdf') {
    print 'arquivo PDF' . "<br>";
} elseif ($tipo == 'DOC') {
    print 'arquivo DOC';
} else {
    print 'arquivo default';
}
$lista = ['maça' , 'laranja' ,'banana'];
foreach ($lista as $fruta) {
    print $fruta . ' ' . "<br>";
}
