<?php
session_start();
require_once '../Modelo/ClassUsuario.php';
require_once '../Modelo/DAO/ClassUsuarioDAO.php';

$nome = @$_POST['nome'];
$email = @$_POST['email'];
$senha = @$_POST['senha'];
$acao = $_GET['ACAO'];

$novoUsuario = new ClassUsuario();
$novoUsuario->setEmail($email);
$novoUsuario->setSenha($senha);

$classUsuarioDAO = new ClassUsuarioDAO();

switch ($acao) {
    case "cadastrarUsuario":
        $nome = @$_POST['nome'];
        $confirmarSenha = @$_POST['confirmarSenha'];

        if ($senha !== $confirmarSenha) {
            echo "<script>
                    alert('As senhas não coincidem!');
                    window.location.href = '../Visao/FormCadUsuario.php';
                  </script>";
            exit();
        }

        $novoUsuario->setNome($nome);
        $usuario = $classUsuarioDAO->cadastrar($novoUsuario);

        if ($usuario >= 1) {
            echo "<script>
                    alert('Cadastro realizado com sucesso!');
                    window.location.href = '../Visao/FormLogUsuario.php';
                  </script>";
        } else {
            echo "<script>
                    alert('Não foi possível realizar o cadastro!');
                    window.location.href = '../Visao/FormCadUsuario.php';
                  </script>";
        }
        break;

    case "loginUsuario":
        $usuario = $classUsuarioDAO->login($novoUsuario);

        if ($usuario && $usuario['senha'] === $senha) { 
            $_SESSION['usuario'] = $usuario['nome'];
            echo "<script>
                    alert('Login realizado com sucesso!');
                    window.location.href = '../index.php';
                  </script>";
        } else {
            echo "<script>
                    alert('E-mail ou senha incorretos!');
                    window.location.href = '../Visao/FormLogUsuario.php';
                  </script>";
        }
        break;

    case 'alterarUsuario':
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
