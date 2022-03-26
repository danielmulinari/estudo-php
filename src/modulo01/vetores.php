<?php

//$cores = array ('vermelho', 'verde', 'amarelo');
//print ($cores [0]);
//$cores = ['vermelho', 'verde', 'amarelo'];
//var_dump($cores);
//$cores = [];
//$cores[] = 'vermelho';
//$cores[] = 'verde';
//$cores[] = 'amarelo';
//print ($cores [2]);
//var_dump($cores);
/*
$cores = [];
$cores[1] ='vermelho';
$cores[3] = 'verde';
$cores[5] = 'amarelo';
var_dump($cores);
*/
/*
$pessoa = [];
$pessoa ['nome'] = 'Daniel';
$pessoa  ['endereço'] = 'rua tal';
$pessoa ['nascimento'] = '14-09-1997';
$pessoa ['cidade'] = 'Passo Fundo';
//var_dump ($pessoa);
//echo $pessoa ['nascimento'];
foreach ($pessoa as $chave => $informação)
{
      print  $chave . ':' .$informação . '<br>';

}
*/
$carros = ['palio' => ['cor' => 'azul',
                       'marca' => 'fiat',
                       'ano' => 2002],
            'corsa' => ['cor' => 'prata',
                        'marca' => 'GM',
                        'ano => 2003']
];
print $carros ['palio'] ['cor'] . '<br>';
/*
foreach ($carros as $modelo => $informações)

{ NAO DEU CERTO!!!
    print"<b>$modelo<b><br>';
    foreach ($informações as $atributo => $valor )
{
     print '$atributo: $valor <br>";
}
}
*/
$cores = ['vermelho', 'verde', 'amarelo'];
//$cores [ ] = 'ciano';
//array_push ($cores, 'ciano');
//array_unshift($cores, 'ciano');
//array_shift ($cores);
//array_pop ($cores);
//$cores = array_reverse ($cores);
$resultado = array_merge($cores, ['ciano', 'magenta']);
var_dump($resultado);
$carros = [];
$carros[10001] = 'Palio 2002';
$carros[73933] = 'Corsa 2003';
$carros[82634] = 'Celta 2005';
$carros[12838] = 'Uno 1999';
//ksort ($carros);
//sort ($carros);
//asort ($carros);
//echo '<pre>';
//var_dump ( ($carros)) ;
//var_dump ( in_array ( 'Uno 1999', $carros));
$data = '14-03-22';
$partes = explode('-', $data);
print $partes [2];
echo '<br>';
$partes = ['14', '03','2022'];
print implode('-', $partes);
