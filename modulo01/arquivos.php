<?php
/*
$handler = fopen ( 'C:\xampp/htdocs/variaveis.php', 'r');
while (!feof ($handler))
{
    print fgets ($handler, 4096);
    print '<br>';
}
fclose ($handler);

$handler = fopen ('modulo01/htdocs/teste2.txt', 'w');
fwrite ($handler, 'linha 1');
fwrite ($handler, 'linha 2');
fwrite ($handler, 'linha 3');
fclose ($handler);
*/
$arquivos = scandir ('C:\xampp\htdocs\modulo01\arquivos.php');
foreach ($arquivos as $arquivo)
{
    print $arquivo;
}


