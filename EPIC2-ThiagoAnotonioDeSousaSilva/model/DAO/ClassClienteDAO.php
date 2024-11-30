<?php
require_once 'Conexao.php';

class ClassClienteDAO
{

    public function login(ClassCliente $loginCliente)
    {
        try {
            if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }
            $pdo = Conexao::getInstance();
            $sql = "SELECT * FROM cliente WHERE email = ? AND senha = ?";
            $stmt = $pdo->prepare($sql);

            $stmt->bindValue(1, $loginCliente->getEmail());
            $stmt->bindValue(2, $loginCliente->getSenha());
            $stmt->execute();

            $resultado = $stmt->fetch(PDO::FETCH_ASSOC);


            if ($resultado) {

                $_SESSION['id_usuario'] = $resultado['id'];
                $_SESSION['nome'] = $resultado['nome'];
                $_SESSION['endereco'] = $resultado['endereco'];
                $_SESSION['telefone'] = $resultado['telefone'];
                $_SESSION['email'] = $resultado['email'];

                return TRUE;
            } else {
                return false;
            }
        } catch (PDOException $ex) {
            return $ex->getMessage();
        }
    }

    public function cadastrarcliente(ClassCliente $cadastrarCliente)
    {
        try {
            if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }
            $pdo = Conexao::getInstance();
            $sql = "INSERT INTO cliente (nome, cpf, endereco, email, telefone, senha) values (?,?,?,?,?,?)";
            $stmt = $pdo->prepare($sql);

            $stmt->bindValue(1, $cadastrarCliente->getNome());
            $stmt->bindValue(2, $cadastrarCliente->getCpf());
            $stmt->bindValue(3, $cadastrarCliente->getEndereco());
            $stmt->bindValue(4, $cadastrarCliente->getEmail());
            $stmt->bindValue(5, $cadastrarCliente->getTelefone());
            $stmt->bindValue(6, $cadastrarCliente->getSenha());

            $stmt->execute();
            return TRUE;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function excluircliente(ClassCliente $excluircliente)
    {
        try {
            if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }

            $pdo = Conexao::getInstance();
            $sql = "DELETE FROM cliente where id = ?";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(1, $excluircliente->getExcluirid());
            $stmt->execute();

            return TRUE;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function alterarCliente(ClassCliente $alterarcliente)
    {
        try {
            if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }

            $pdo = Conexao::getInstance();
            $sql = "UPDATE cliente SET nome=?, CPF=?, endereco=?, email=?, telefone=?, senha=? WHERE id=?";
            $stmt = $pdo->prepare($sql);

            $stmt->bindValue(1, $alterarcliente->getNome());
            $stmt->bindValue(2, $alterarcliente->getCpf());
            $stmt->bindValue(3, $alterarcliente->getEndereco());
            $stmt->bindValue(4, $alterarcliente->getEmail());
            $stmt->bindValue(5, $alterarcliente->getTelefone());
            $stmt->bindValue(6, $alterarcliente->getSenha());
            $stmt->bindValue(7, $alterarcliente->getNovoid());

            $stmt->execute();

            if ($stmt->rowCount() > 0) {

                $_SESSION['id_usuario'] = $alterarcliente->getNovoid();
                $_SESSION['nome'] = $alterarcliente->getNome();
                $_SESSION['cpf'] = $alterarcliente->getCpf();
                $_SESSION['endereco'] = $alterarcliente->getEndereco();
                $_SESSION['telefone'] = $alterarcliente->getTelefone();
                $_SESSION['email'] = $alterarcliente->getEmail();

                return true;
            } else {
                return false;
            }
        } catch (PDOException $exc) {
            echo $exc->getMessage();
            return false;
        }
    }

    public function buscarCliente($idCliente)
    {
        try {
            $cliente = new ClassCliente();
            $pdo = Conexao::getInstance();
            $sql = "SELECT id, nome, cpf, endereco, email, telefone, senha FROM cliente WHERE id =:id LIMIT 1";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(':id', $idCliente);

            $stmt->execute();
            $clienteAssoc = $stmt->fetch(PDO::FETCH_ASSOC);

            $cliente->setId($clienteAssoc['id']);
            $cliente->setNome($clienteAssoc['nome']);
            $cliente->setCpf($clienteAssoc['cpf']);
            $cliente->setEndereco($clienteAssoc['endereco']);
            $cliente->setEmail($clienteAssoc['email']);
            $cliente->setTelefone($clienteAssoc['telefone']);
            $cliente->setSenha($clienteAssoc['senha']);

            return $cliente;
        } catch (PDOException $ex) {
            return $ex->getMessage();
        }
    }

    public function listarClientes()
    {
        try {
            $pdo = Conexao::getInstance();
            $sql = "SELECT * FROM cliente order by (nome) asc";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            $clientes = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $clientes;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
}
