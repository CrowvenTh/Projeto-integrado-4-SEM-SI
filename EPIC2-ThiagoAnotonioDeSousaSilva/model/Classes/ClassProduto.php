<?php

class ClassProduto
{
    private $idproduto;
    private $imagem;
    private $nome;
    private $quantidade;
    private $preco;

    //GETTERS    
    public function getIdproduto()
    {
        return $this->idproduto;
    }

    public function getImagem()
    {
        return $this->imagem;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getQuantidade()
    {
        return $this->quantidade;
    }

    public function getPreco()
    {
        return $this->preco;
    }

    //SETTERS

    public function setIdproduto($idproduto)
    {
        $this->idproduto = $idproduto;
    }

    public function setImagem($imagem)
    {
        $this->imagem = $imagem;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function setQuantidade($quantidade)
    {
        $this->quantidade = $quantidade;
    }

    public function setPreco($preco)
    {
        $this->preco = $preco;
    }
}
