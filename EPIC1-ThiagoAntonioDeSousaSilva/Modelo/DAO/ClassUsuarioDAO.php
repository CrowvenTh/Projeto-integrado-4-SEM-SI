<?php
require_once 'Conexao.php';
class ClassUsuarioDAO
{
    public function cadastrar(ClassUsuario $cadastrarUsuario)
    {
        try {
            $pdo = Conexao::getInstance();
            $sql = "INSERT INTO usuario (nome, email, senha) values (?,?,?)";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(1, $cadastrarUsuario->getNome());
            $stmt->bindValue(2, $cadastrarUsuario->getEmail());
            $stmt->bindValue(3, $cadastrarUsuario->getSenha());
            $stmt->execute();
            return TRUE;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function login(ClassUsuario $loginUsuario)
    {
        try {
            $pdo = Conexao::getInstance();
            $sql = "SELECT * FROM usuario WHERE email=:email";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(':email', $loginUsuario->getEmail());

            $stmt->execute();
            return $stmt->fetch();
        } catch (PDOException $ex) {
            return $ex->getMessage();
        }
    }
}