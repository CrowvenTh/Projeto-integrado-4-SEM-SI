<?php
require_once '../Modelo/ClassUsuario.php';
require_once '../Modelo/DAO/ClassUsuarioDAO.php';

$id = @$_POST['idex'];
$nome = @$_POST['nome'];
$email = @$_POST['email'];
$senha = @$_POST['senha'];
$acao = $_GET['ACAO'];

$novoUsuario = new ClassUsuario();
$novoUsuario->setIdUsuario($id);
$novoUsuario->setNome($nome);
$novoUsuario->setEmail($email);
$novoUsuario->setSenha($senha);

$classUsuarioDAO = new ClassUsuarioDAO();
switch ($acao) {
    case "cadastrarUsuario":
        // $usuario = $classUsuarioDAO->cadastrar($novoUsuario);
        // if($usuario >= 1){
        //     header('Location:../visao/FormCadUsuario.php?&MSG= Cadastro realizado com sucesso!');
        // } else {
        //     header('Location:../index.php?&MSG= Não foi possivel realizar o cadastro!');
        // }
        $usuario = $classUsuarioDAO->cadastrar($novoUsuario);
        if ($usuario >= 1) {
            $_SESSION['mensagem'] = "Cadastro realizado com sucesso!";
            // header('Location:../visao/FormCadUsuario.php');
            include '../Visao/FormCadUsuario.php';
        } else {
            $_SESSION['mensagem'] = "Não foi possível realizar o cadastro!";
            // header('Location:../visao/FormCadUsuario.php');
        }
        break;
    case 'alterarUsuario':
        //codigo aqui   
        $usuario = $classUsuarioDAO->alterarUsuario($novoUsuario);
        if ($usuario == 1) {
            header('Location:../index.php?&MSG= Cadastro atualizado com sucesso!');
        } else {
            header('Location:../index.php?&MSG= Não foi possivel realizar a atualização!');
        }

        break;

    case "excluirUsuario":
        if (isset($_GET['idex'])) {
            $idUsuario = $_GET['idex'];
            $classUsuarioDAO = new ClassUsuarioDAO();
            $us = $classUsuarioDAO->excluirUsuarios($idUsuario);
            if ($us == TRUE) {
                header('Location:../index.php?PAGINA=listarUsuario&MSG= Usuario foi excluido com sucesso!');
            } else {
                header('Location:../index.php?PAGINA=listarUsuario&MSG=Não foi possivel realizar a exclusão do Usurio!');
            }
        }

        break;
    default:
        break;
}
