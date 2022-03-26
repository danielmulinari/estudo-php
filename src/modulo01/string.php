<?php
$nome = 'Maria';
$sobrenome =' da  Silva';
$nome_completo ="{$nome}  {$sobrenome}";
var_dump($nome_completo);
echo '<br>';
print "Exemplo de 'aspas'"; 
echo '<br>';
print strtoupper($nome .  $sobrenome);
echo '<br>';
print strtolower ($nome . $sobrenome);
echo '<br>';
print strlen ($nome);
echo '<br>';
print substr( $nome . $sobrenome, 5, 3);
echo '<br>';
print substr( $nome . $sobrenome, -3);
echo '<br>';
print str_replace ('a', 'e', $nome . $sobrenome);
