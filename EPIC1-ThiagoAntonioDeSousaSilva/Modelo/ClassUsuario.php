<?php
class ClassUsuario
{
    private $idUsuario;
    private $nome;
    private $email;
    private $senha;

    function getIdUsuario()
    {
        return $this->idUsuario;
    }

    function getNome()
    {
        return $this->nome;
    }

    function getEmail()
    {
        return $this->email;
    }
    function getSenha()
    {
        return $this->senha;
    }

    function setIdUsuario($idUsuario)
    {
        $this->idUsuario = $idUsuario;
    }

    function setNome($nome)
    {
        $this->nome = $nome;
    }

    function setEmail($email)
    {
        $this->email = $email;
    }
    function setSenha($senha)
    {
        $this->senha = $senha;
    }
}
