<?php
class Produto
{
   private $descrição;
   private $estoque; 
   private $preço;  
   private $fabricante;   
   private $caracteristicas;
   
public function __construct($descrição, $preço, $estoque)
                  {
                  $this ->descrição = $descrição;
                  $this ->estoque = $estoque;
                  $this ->preço = $preço;
                  $this ->caracteristicas =[];
                   }
public function addCaracteristica($nome, $valor)
{
               $this ->caracteristicas[] = new Caracteristica($nome, $valor);
}
public function getCaracteristicas()
{
return $this->caracteristicas;
}
public function  getDescrição()
     {
         return $this->descrição;
     }
}