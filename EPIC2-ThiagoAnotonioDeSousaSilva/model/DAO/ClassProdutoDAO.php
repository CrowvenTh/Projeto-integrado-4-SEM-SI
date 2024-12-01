<?php
require_once 'Conexao.php';

class ClassProdutoDAO
{

    public function adicionarProduto(ClassProduto $produto)
    {
        try {
            $pdo = Conexao::getInstance();
            $sql = "INSERT INTO produto (idproduto, imagem, nome, descricao, quantidade, preco) values (?,?,?,?,?)";
            $stmt = $pdo->prepare($sql);

            $stmt->bindValue(1, $produto->getIdproduto());
            $stmt->bindValue(2, $produto->getImagem());
            $stmt->bindValue(3, $produto->getNome());
            $stmt->bindValue(4, $produto->getDescricao());
            $stmt->bindValue(5, $produto->getQuantidade());
            $stmt->bindValue(6, $produto->getPreco());
            $stmt->execute();
            return TRUE;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function listarProduto()
    {
        try {

            $pdo = Conexao::getInstance();
            $sql = "SELECT * FROM produto";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            $produtos = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $produtos;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
    public function buscarProduto($idproduto)
    {
        try {
            $produto = new ClassProduto();
            $pdo = Conexao::getInstance();
            $sql = "SELECT idproduto, imagem, nome, descricao, quantidade, preco FROM produto WHERE idproduto = :idproduto LIMIT 1";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(':idproduto', $idproduto);

            $stmt->execute();
            $produtoAssoc = $stmt->fetch(PDO::FETCH_ASSOC);

            $produto->setIdproduto($produtoAssoc['idproduto']);
            $produto->setImagem($produtoAssoc['imagem']);
            $produto->setNome($produtoAssoc['nome']);
            $produto->setDescricao($produtoAssoc['descricao']);
            $produto->setQuantidade($produtoAssoc['quantidade']);
            $produto->setPreco($produtoAssoc['preco']);

            return $produto;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function alterarProduto(ClassProduto $produto)
    {
        try {
            $pdo = Conexao::getInstance();
            $sql = "UPDATE produto SET imagem=?, nome=?, descricao=?, quantidade=?, preco=? where idproduto=?";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(1, $produto->getImagem());
            $stmt->bindValue(2, $produto->getNome());
            $stmt->bindValue(3, $produto->getDescricao());
            $stmt->bindValue(4, $produto->getQuantidade());
            $stmt->bindValue(5, $produto->getPreco());
            $stmt->bindValue(6, $produto->getIdproduto());
            $stmt->execute();

            return $stmt->rowCount();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
    public function excluirProduto($idproduto)
    {
        try {
            $pdo = Conexao::getInstance();
            $sql = "DELETE FROM produto WHERE idproduto = :idproduto";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(':idproduto', $idproduto);
            $stmt->execute();
            return TRUE;
        } catch (PDOException $exc) {
            echo $exc->getMessage();        
    }
}
}