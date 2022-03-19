<?php
require_once 'C:\xampp\htdocs\classemodulo2\Conta.php';
require_once 'C:\xampp\htdocs\classemodulo2\ContaCorrente.php';
require_once 'C:\xampp\htdocs\classemodulo2\ContaPoupança.php';

$p = new ContaPoupança ('100', '123123', 500 );
echo $p ->getSaldo() . '<br>';
//var_dump( $p);
$p ->depositar (200);
echo $p ->getSaldo() . '<br>';
$p -> retirar (100);
echo $p->getSaldo() . '<br>';