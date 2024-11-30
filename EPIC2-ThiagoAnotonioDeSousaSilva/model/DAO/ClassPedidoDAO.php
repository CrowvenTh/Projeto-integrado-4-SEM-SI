<?php
require_once '../Conexao.php';

Class ClassPedidoDAO{
    
    public function cadastrarpedido(ClassPedido $pedido)
    {
        try {

            $pdo = Conexao::getInstance();
            $sql = "INSERT INTO clientepedido (idcliente, idestoque, quantidadepedido, datapedido) values (?,?,?,curdate())";
            $stmt = $pdo->prepare($sql);

            $stmt->bindValue(1, $pedido->getIdcliente());
            $stmt->bindValue(2, $pedido->getIdestoque());
            $stmt->bindValue(3, $pedido->getQuantidadepedido());
            $stmt->execute();
            return TRUE;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function listarpedido()
    {
        try {

            $pdo = Conexao::getInstance();
            $sql = "SELECT cp.id AS ID, c.nome AS Cliente, c.endereco AS Endereço, e.nome AS Produto, cp.quantidadepedido AS Quantidade, cp.totalpedido AS Total, cp.datapedido AS Data_Pedido FROM clientepedido AS cp
            INNER JOIN cliente AS c ON cp.idcliente = c.id
            INNER JOIN estoque AS e ON cp.idestoque = e.id";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            $pedidos = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $pedidos;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    // public function alterarpedido(ClassCliente $alterarpedido)
    // {
    //     try {
    //         if (session_status() == PHP_SESSION_NONE) {
    //             session_start();
    //         }

    //         if (!isset($_SESSION['id_usuario'])) {
    //             throw new Exception("Usuário não autenticado.");
    //         }


    //         if ($_SESSION['id_usuario'] !== $pedido->getNovoid()) {
    //             throw new Exception("Você não tem permissão para alterar este pedido.");
    //         }

    //         $pdo = Conexao::getInstance();
    //         $sql = "UPDATE clientepedido SET idestoque=?, idcliente=?, quantidadepedido=? where id=?";
    //         $stmt = $pdo->prepare($sql);

    //         $stmt->bindValue(1, $pedido->getIdestoque());
    //         $stmt->bindValue(2, $pedido->getIdcliente());
    //         $stmt->bindValue(3, $pedido->getQuantidadepedido());
    //         $stmt->bindValue(4, $pedido->getNovoid());

    //         $stmt->execute();
    //         return TRUE;
    //     } catch (PDOException $exc) {
    //         echo $exc->getMessage();
    //     }
    // }

    public function excluirpedido(ClassCliente $excluirpedido)
    {
        try {
            $pdo = Conexao::getInstance();
            $sql = "DELETE FROM clientepedido where id = ?";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(1, $excluirpedido->getExcluirid());
            $stmt->execute();

            return TRUE;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
}