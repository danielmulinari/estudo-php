<?php 
/*
$codigo = 5.5;
$nome = 'teste';
var_dump ($nome);
var_dump ($codigo);
var_dump(4 . 5); 
var_dump (4+4);
*/
function  calcula_imc($peso, $altura)
{       
    return $peso/ ($altura* $altura);

}
var_dump ( calcula_imc( 75, 1.8 ) );

