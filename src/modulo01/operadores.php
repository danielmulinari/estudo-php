<?php

 /*
 $valor = 100;
 $valor = $valor + 5;
 $valor ++;
 $valor += 5;
 $valor -= 5;
 $valor *= 5;
 $valor /= 5;
 var_dump($valor);

$teste = ++ $valor;
var_dump($valor);
var_dump($teste);
*/
//$a = 2;
//$b = 4;
//echo $a +3*4+5*$b . "<br>";
//echo ($a +3) * 4+ (5*$b) . "<br>";
/*
$valor = 100;
if ($valor > 50)
{
    var_dump($valor);
}
*/
/*
$valor1 = 100;
$valor2='100';
if ($valor1 == $valor2)
{
    echo 'sao iguais';
}
$valor1 = 100;
$valor2='100';
if ($valor1 === $valor2)
{
    echo 'sao iguais';
}
*/
$salario = 1000;
$cargo = 'gerente';
if ($salario > 800 and $cargo == 'gerente') {
    echo 'ok';
}
$salario = 500;
$cargo = 'gerente';
if ($salario > 800 || $cargo == 'gerente') {
    echo 'ok';
}
$salario = 500;
$cargo = 'gerente';
if (! ($salario > 800 || $cargo == 'gerente')) {
    echo 'ok';
}
