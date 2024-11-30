<?php

require_once '../model/Classes/ClassPedido.php';
require_once '../model/DAO/ClassPedidoDAO.php';

$idcliente = @$_POST['idcliente'];
$idestoque = @$_POST['idestoque'];
$quantidadepedido = @$_POST['quantidadepedido'];
$totalpedido = @$_POST['totalpedido'];
$datapedido = @$_POST['datapedido'];

$acao = $_GET['ACAO'];

$processar = new ClassPedido();

$processar->setIdcliente($idcliente);
$processar->setIdestoque($idestoque);
$processar->setQuantidadepedido($quantidadepedido);
$processar->setTotalpedido($totalpedido);
$processar->setDatapedido($datapedido);

$ClassPedidoDAO = new ClassPedidoDAO();

switch ($acao) {

    case "cadastrarPedido":
        $pedido = $ClassClienteDAO->cadastrarpedido($processar);

        if ($pedido >= 1) {
            header('Location:../visao/visaoPedido/CadPedido.php?&MSG= Cadastro realizado com sucesso!');
        } else {
            header('Location:../visao/visaoPedido/CadPedido.php?&MSG= Não foi possivel realizar o cadastro!');
        }

        break;
    
    case "AltPedido":

        $alterar = $ClassClienteDAO->AltPedido($processar);

        if ($alterar >= 1) {
            header('Location:../visao/visaoPedido/AltPedido.php?&MSG= Alteração realizada com sucesso!');
        } else {
            header('Location:../visao/visaoPedido/AltPedido.php?&MSG= Não foi possivel realizar a alteração!');
        }

        break;
     
    case "excluirpedido":

        $excluir = $ClassClienteDAO->excluirpedido($processar);

        if ($excluir >= 1) {
            header('Location:../visao/visaoPedido/ExcluirPedido.php?&MSG= Exclusão realizada com sucesso!');
        } else {
            header('Location:../visao/visaoPedido/ExcluirPedido.php?&MSG= Não foi possivel realizar a exclusão!');
        }

        break;

}
