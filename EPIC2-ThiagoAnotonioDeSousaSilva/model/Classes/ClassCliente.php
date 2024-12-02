<?php
class ClassCliente
{
    private $id;
    private $excluirid;
    private $novoid;
    public  $idatual;
    private $nome;
    private $cpf;
    private $endereco;
    private $email;
    private $telefone;
    private $senha;

    //pedido
    private $idcliente;
    private $idproduto;
    private $quantidadepedido;
    private $totalpedido;
    private $datapedido;

    function getId()
    {
        return $this->id;
    }

    function setId($id)
    {
        $this->id = $id;
    }

    public function getNovoid()
    {
        return $this->novoid;
    }

    public function setNovoid($novoid)
    {
        $this->novoid = $novoid;
    }

    public function getExcluirid()
    {
        return $this->excluirid;
    }

    public function setExcluirid($excluirid)
    {
        $this->excluirid = $excluirid;
    }

    function getNome()
    {
        return $this->nome;
    }

    function setNome($nome)
    {
        $this->nome = $nome;
    }

    function getCpf()
    {
        return $this->cpf;
    }

    function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    function getEndereco()
    {
        return $this->endereco;
    }

    function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }

    function getEmail()
    {
        return $this->email;
    }

    function setEmail($email)
    {
        $this->email = $email;
    }

    function getTelefone()
    {
        return $this->telefone;
    }

    function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    function getSenha()
    {
        return $this->senha;
    }

    function setSenha($senha)
    {
        $this->senha = $senha;
    }

    //pedido
    function getIdcliente(){
        return $this->idcliente;
    }
    function setIdcliente($idcliente){
        $this->idcliente = $idcliente;
    }

    function getidproduto(){
        return $this->idproduto;
    }
    function setidproduto($idproduto){
        $this->idproduto = $idproduto;
    }

    function getQuantidadepedido(){
        return $this->quantidadepedido;
    }
    function setQuantidadepedido($quantidadepedido){
        $this->quantidadepedido = $quantidadepedido;
    }

    function getTotalpedido(){
        return $this->totalpedido;
    }
    function setTotalpedido($totalpedido){
        $this-> totalpedido = $totalpedido;
    }

    function getDatapedido(){
        return $this->datapedido;
    }
    function setDatapedido($datapedido){
        $this-> datapedido = $datapedido;
    }

}
