<?php

class ContaPoupança extends Conta
{
    public function retirar($quantia)
    {
        if ($this->saldo >= $quantia) {
            $this->saldo -= $quantia;
        } else {
            return false;
        }
        return true;
    }
}
