<?php

class Produto
{
    private $descricao;
    private $estoque;
    private $preco;
    public function setDescricao($descricao)
    {
        if (is_string($descricao)) {
            $this->descrição = $descricao;
        }
    }
    public function getDescricao()
    {
        return $this->descricao;
    }
    public function setEstoque($estoque)
    {
        if (is_numeric($estoque) and $estoque > 0) {
            $this->estoque = $estoque;
        }
    }
    public function getEstoque()
    {
        return $this->estoque;
    }

    public function setpreco($preco)
    {
        if (is_numeric($preco) and $preco > 0) {
            $this->preco = $preco;
        }
    }

    public function getpreco()
    {

            return $this->preco;
    }

    public function aumentarEstoque($unidades)
    {
        if (is_numeric($unidades) and $unidades >= 0) {
            ;
        } {
            $this->estoque += $unidades;
        }
    }
    public function diminuirEstoque($unidades)
    {
        if (is_numeric($unidades) and $unidades >= 0) {
            ;
        } {
            $this->estoque -= $unidades;
        }
    }

    public function reajustarPreco($percentual)
    {
        if (is_numeric($percentual) and $percentual < 0) {
            ;
        } {
            $this->preco *= (1 + ($percentual / 100));
        }
    }
}



$p1 =  new Produto();
$p1->setDescricao('Chocolate');
$p1->setEstoque(10);
$p1->setPreco(8);
echo "O estoque de {$p1->getDescricao()} é {$p1->getEstoque()}";
echo "O preco de {$p1->getDescricao()} é {$p1->getPreco()}";
$p1->aumentarEstoque(10);
$p1->diminuirEstoque(5);
$p1->reajustarPreco(50);
echo "O estoque de  {$p1->getDescricao()} é {$p1->getEstoque()}";
echo "O preco de {$p1->getDescricao()} é {$p1->getPreco()}";
