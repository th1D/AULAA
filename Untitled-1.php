<?php

namespace App;
require_once("banco.php");

class Cadastro extends Conexao{

    private $nome;

    private $cnpj_cpf;
    private $data_nascimento;
    private $endereco;
    private $titulo;
    private $valor;
    private $data_vencimento;

    /**
     * Get the value of nome
     */ 
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */ 
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of cnpj_cpf
     */ 
    public function getCnpj_cpf()
    {
        return $this->cnpj_cpf;
    }

    /**
     * Set the value of cnpj_cpf
     *
     * @return  self
     */ 
    public function setCnpj_cpf($cnpj_cpf)
    {
        $this->cnpj_cpf = $cnpj_cpf;

        return $this;
    }

    /**
     * Get the value of data_nascimento
     */ 
    public function getData_nascimento()
    {
        return $this->data_nascimento;
    }

    /**
     * Set the value of data_nascimento
     *
     * @return  self
     */ 
    public function setData_nascimento($data_nascimento)
    {
        $this->data_nascimento = $data_nascimento;

        return $this;
    }

    /**
     * Get the value of endereco
     */ 
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * Set the value of endereco
     *
     * @return  self
     */ 
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;

        return $this;
    }

    /**
     * Get the value of titulo
     */ 
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set the value of titulo
     *
     * @return  self
     */ 
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get the value of valor
     */ 
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Set the value of valor
     *
     * @return  self
     */ 
    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * Get the value of data_vencimento
     */ 
    public function getData_vencimento()
    {
        return $this->data_vencimento;
    }

    /**
     * Set the value of data_vencimento
     *
     * @return  self
     */ 
    public function setData_vencimento($data_vencimento)
    {
        $this->data_vencimento = $data_vencimento;

        return $this;
    }
}

public function incluir(){
    $devedor = $this-> setDevedor(
        $this-> getNome(),
        $this-> getCnpj_cpf(),
        $this-> getData_nascimento(),
        $this-> getEndereco()

    );
    $this-> setDividas(
        $this-> getTitulo(),
        $this-> getData_vencimento(),
        $this-> getValor(),
        $devedor
    );
}

}