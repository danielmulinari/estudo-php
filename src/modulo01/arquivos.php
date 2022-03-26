<?php

$handler = fopen ( 'C:\xampp\htdocs\modulo01\variaveis.php', 'r');
while (!feof ($handler))
{
    print fgets ($handler, 4096);
    print '<br>';
}
fclose ($handler);

$handler = fopen ('C:\xampp\htdocs\modulo01\teste2.txt', 'w');
fwrite ($handler, 'linha 1');
fwrite ($handler, 'linha 2');
fwrite ($handler, 'linha 3');
fclose ($handler);


$arquivos = scandir ( __DIR__);
foreach ($arquivos as $arquivo)
{
    print $arquivo . '<br>';
}

