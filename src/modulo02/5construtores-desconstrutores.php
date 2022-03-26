<?php



class Produto
{
    private $descricao;
    private $estoque;
    private $preco;

    public function __construct($descricao, $estoque, $preco)
    {
        $this->setDescricao($descricao);
        $this->setEstoque($estoque);
        $this->setPreco($preco);
    }

    public function setDescricao($descricao)
    {
        if (is_string($descricao)) {
            $this->descricao = $descricao;
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
        if (is_numeric($unidades) and $unidades >= 0); {
            $this->estoque += $unidades;
        }
    }
    public function diminuirEstoque($unidades)
    {
        if (is_numeric($unidades) and $unidades >= 0); {
            $this->estoque -= $unidades;
        }
    }

    public function reajustarPreco($percentual)
    {
        if (is_numeric($percentual) and $percentual < 0); {
            $this->preco *= (1 + ($percentual / 100));
        }
    }
    public function __destruct()
    {
        echo "DESTRUIDO: Objeto  {$this->getDescricao()}";
    }
}



$p1 =  new Produto('Chocolate', 10, 8);



echo "O estoque de {$p1->getDescricao()} é {$p1->getEstoque()}";
echo '<br>';
echo "O preco de {$p1->getDescricao()} é {$p1->getPreco()}";
echo '<br>';
