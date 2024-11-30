<?php
class ClassPedido {

    private $idcliente;
    private $idestoque;
    private $quantidadepedido;
    private $totalpedido;
    private $datapedido;

    function getIdcliente(){
        return $this->idcliente;
    }
    function setIdcliente($idcliente){
        $this->idcliente = $idcliente;
    }

    function getIDestoque(){
        return $this->idestoque;
    }
    function setIdestoque($idestoque){
        $this->idestoque = $idestoque;
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