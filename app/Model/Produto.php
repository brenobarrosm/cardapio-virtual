<?php

namespace App\Model;

class Produto 
{
    private string $nome = "Não informado";
    private float $preco;
    public \DateTime $ultimaAlteracao;
    public static $localidade = "pt-BR";
    public const LOCALIDADE = "pt-BR";

    public function getNome()
    {
        return $this->nome
    }

    public function setNome()
    {
        $this->nome = filter_var($nome, FILTER_SANITIZE_STRING);
        $this->ultimaAlteracao = new \DataTime();
    }

    public function getPreco()
    {
        return $this->preco;
    }

    public function getPrecoFormatado()
    {
        return number_format($this->preco, 2, ',', '.');
    }

    public function setPreco(float $preco) 
    {
        $this->preco = filter_var($preco, FILTER_SANITIZE_NUMBER_FLOAT);
    }

    public function getUltimaAlteracao()
    {
        return $this->ultimaAlteracao;
    }

    public function getUltimaAlteracaoPtBr()
    {
        return $this->ultimaAlteracao->format('Y-m-d');
    }

    public function __construct($nome="", $preco=0)
    {
        $this->ultimaAlteracao = new \DateTime();
        if(!empty($nome))
        {
            $this->nome = $nome;
        }

        $this->preco = $preco;
    }
}