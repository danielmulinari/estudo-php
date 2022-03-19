<?php
class Produto
{
    public $descrição;
    public $estoque;
    public $preço;
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
};



$p1 = new Produto;
$p1->descrição = 'Chocolate';
$p1->estoque =10;
$p1->preço = 8;
//echo '<pre>';
//var_dump($p1);
//echo '<pre>';
echo "O estoque de {$p1 ->descrição} é {$p1 ->estoque}" . '<br>';
echo "O preço de {$p1 ->descrição} é {$p1 ->preço}" .'<br>';
$p1-> aumentarEstoque (10); 
$p1-> diminuirEstoque (5); 
$p1-> reajustarPreço (50); 
echo "O estoque de {$p1 ->descrição} é {$p1 ->estoque}" . '<br>';
echo "O preço de {$p1 ->descrição} é {$p1 ->preço}"; 
    //echo '<pre>';
//var_dump($p1);
//echo '<pre>';

