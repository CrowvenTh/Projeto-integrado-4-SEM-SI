<?php
require_once '../model/ClassCliente.php';
require_once '../model/DAO/ClassClienteDAO.php';

//Cliente//
$id = @$_POST['idex'];
$excluirid = @$_POST['excluirid'];
$novoid = @$_POST['novoid'];
$nome = @$_POST['nome'];
$cpf = @$_POST['cpf'];
$endereco = @$_POST['endereco'];
$email = @$_POST['email'];
$senha = @$_POST['senha'];
$telefone = @$_POST['telefone'];

$acao = $_GET['ACAO'];

$processar = new ClassCliente();

//Cliente//
$processar->setId($id);
$processar->setNovoid($novoid);
$processar->setExcluirid($excluirid);
$processar->setNome($nome);
$processar->setCPF($cpf);
$processar->setEndereco($endereco);
$processar->setEmail($email);
$processar->setSenha($senha);
$processar->setTelefone($telefone);

$ClassClienteDAO = new ClassClienteDAO();


switch ($acao) {

    case "verificarLogin":
        $login = $ClassClienteDAO->login($processar);
        if ($login) {
            header('Location:../visao/visaoCliente/Perfil.php');
        } else {
            header('Location:../visao/visaoCliente/Login.php?&MSG=Não foi possível realizar o login!');
        }

        break;
        //
    case "cadastrarCliente":
        $cliente = $ClassClienteDAO->cadastrarcliente($processar);

        if ($cliente >= 1) {
            header('Location:../visao/visaoCliente/CadCliente.php?&MSG= Cadastro realizado com sucesso!');
        } else {
            header('Location:../visao/visaoCliente/CadCliente.php?&MSG= Não foi possivel realizar o cadastro!');
        }

        break;
        //
    case "excluircliente":
        $excluir = $ClassClienteDAO->excluircliente($processar);

        if ($excluir >= 1) {
            header('Location:../index.php?&MSG= Exclusão realizada com sucesso!');
        } else {
            header('Location:../visao/visaoCliente/ExcluirCliente.php?&MSG= Não foi possivel realizar a exclusão!');
        }
        break;
        //
    case "alterarcliente":
        $alterar = $ClassClienteDAO->alterarcliente($processar);
        if ($alterar >= 1) {
            header('Location:../visao/visaoCliente/Perfil.php?&MSG= Alteração realizada com sucesso!');
        } else {
            header('Location:../visao/AlterarCliente.php?&MSG= Não foi possivel realizar a alteração!');
        }

        break;
}
