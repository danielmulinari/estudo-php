<?php
class Produto
{
private $descricão;
private $estoque;
private $preço;

public function setDescrição ($descricão)
{
if (is_string ($descricão))
{
    $this ->descrição =$descricão;
}
}
public function getDescrição($descricão)
{
             return $this ->descricão;
}
public function setEstoque($estoque)
{
    if (is_numeric($estoque) and $estoque>0)
    {
         $this-> estoque = $estoque;
    }
}
public function getEstoque($estoque)
    {
        return $this-> estoque;
    }

public function setpreço ($preço)
{
    if (is_numeric($preço) and $preço>0)
    {
        $this ->preço = $preço;
    }
}

public function getpreço ($preço)
{
    if (is_numeric($preço) and $preço>0)
    {
        return $this->preço;
    }
}

    public function aumentarEstoque($unidades)
    {
        if (is_numeric ($unidades) and $unidades >=0);
        {
        $this ->estoque +=$unidades;
        }
    }
    public function diminuirEstoque ($unidades)
    {
  if (is_numeric ($unidades) and $unidades >=0);
        {
        $this ->estoque -=$unidades;
        }
    }

public function reajustarPreço($percentual)
{
if (is_numeric ($percentual) and $percentual <0);
{
$this ->preço *=(1 +($percentual/100));
}
}
}



$p1 =  new Produto; 
$p1-> setDescrição('Chocolate');
$p1-> setEstoque(10);
$p1->setPreço(8);

echo "O estoque de { $p1 -> getDescricão} é { $p1 -> getEstoque}";
echo "O preço de { $p1 -> getDescricão} é { $p1 -> getPreço}";

$p1-> aumentarEstoque (10); 
$p1-> diminuirEstoque (5); 
$p1-> reajustarPreço (50); 
  
echo "O estoque de { $p1 -> getDescricão} é { $p1 -> getEstoque}";
echo "O preço de { $p1 -> getDescricão} é { $p1 -> getPreço}";