<?php

function calcula_imc(float $peso, float $altura): float
{
    return $peso / ($altura * $altura);
}
echo calcula_imc(75, 1.85) . "<br>";
function km2milhas($km)
{
    return $km * 0.6;
}
echo km2milhas(100) . "<br>";
function percorre($km)
{
      static $total;
    $total += $km;
    print "percorreu mais $km de $total <br>";
}
percorre(100);
percorre(100);
percorre(100);
function incrementa(&$variavel, $valor)
{
       $variavel += $valor;
}
$teste = 100;
incrementa($teste, 20);
var_dump($teste) . "<br>";
$remove_acento = function ($str) {

     return str_replace(
         ['á', 'é', 'í', 'ó', 'ú'],
         ['a', 'e', 'i', 'o', 'u'],
         $str
     );
};
var_dump($remove_acento('bábébíbóbú'));

function teste($palavra, $funcao)
{
    $palavra = $funcao($palavra);
    return strtoupper($palavra);
}
var_dump(teste('bábébíbóbú', $remove_acento));
