<?php 
class Fabricante
{
    private $nome;
    private $endereço;
    private $documento;
    
    public function __construct ($nome, $endereço, $documento)
    {
        $this ->nome =$nome;
        $this ->nome =$endereço;
        $this ->nome =$documento;
        
    }
    public function getNome ()
    {
        return $this-> nome;
    }
};