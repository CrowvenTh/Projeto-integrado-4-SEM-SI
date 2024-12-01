<?php

require_once '../model/Classes/ClassProduto.php';
require_once '../model/DAO/ClassProdutoDAO.php';

$idproduto = @$_POST['idproduto'];
$imagem = @$_POST['imagem'];
$nome = @$_POST['nome'];
$descricao = @$_POST['descricao'];
$quantidade = @$_POST['quantidade'];
$preco = @$_POST['preco'];

$acao = $_GET['ACAO'];
// $idproduto = $_GET['idproduto'];
 
$produto = new ClassProduto();

$produto->setIdproduto($idproduto);
$produto->setImagem($imagem);
$produto->setNome($nome);
$produto->setDescricao($descricao);
$produto->setQuantidade($quantidade);
$produto->setPreco($preco);

$ClassProdutoDAO = new ClassProdutoDAO();

switch ($acao) {
    case "adicionarProduto":
        $produto = $ClassProdutoDAO->adicionarProduto($produto);

        if ($produto >= 1) {
            header('Location:../visao/visaoProduto/CadProduto.php?&MSG= Produto adicionado com sucesso ao estoque!');
        } else {
            header('Location:../visao/visaoProduto/CadProduto.php?&MSG= Não foi possivel adicionar produto ao estoque!');
        }

        break;

    case 'alterarProduto':
        $produto = $ClassProdutoDAO->alterarProduto($produto);

        if ($produto == 1) { //varivael == 1 - referencia do professor 
            header('Location:../visao/visaoProduto/Produto.php?&MSG= Produto alterado com sucesso!');
        } else {
            header('Location:../visao/visaoProduto/Produto.php?&MSG= Não foi possível alterar o produto!');
        }
        break;
        
    case "excluirProduto":
        if(isset($_GET['idproduto'])){
            $idproduto = $_GET['idproduto'];
            $ClassProdutoDAO = new ClassProdutoDAO();
            $pr = $ClassProdutoDAO->excluirProduto($idproduto);
            if($pr == TRUE){
                header('Location:../visao/visaoProduto/Produto.php?&MSG= Produto excluído com sucesso!');
            } else {
                header('Location:../visao/visaoProduto/Produto.php?&MSG= Não foi possível excluir o produto!');
            }
        }
        break;
}
