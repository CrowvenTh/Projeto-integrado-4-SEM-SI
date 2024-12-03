<?php
session_start();
// include("CadProduto.php");

require '../../model/DAO/Conexao.php';
require '../../model/Classes/ClassProduto.php';
require '../../model/DAO/ClassProdutoDAO.php';

$ClassProdutoDAO = new ClassProdutoDAO();
$pr = $ClassProdutoDAO->listarProduto();

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="visaoport" content="width=device-width, initial-scale=1.0">
    <title>Corvus_Tech</title>
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="icon" type="image/x-icon" href="../design//logotipo/Corvus.tech_logo.png">
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="../../index.php">Home</a></li>
                <li><a href="../visaoProduto/Produto.php">Produtos</a></li>
                <li><a href="../visaoCliente/login.php">Login</a></li>
                <li><a href="../visaoCliente/CadCliente.php">Cadastro</a></li>
                <li><a href="../visaoCliente/Perfil.php">Meu Perfil</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div>
            <h1>Catálogo de Produtos</h1>
            <section class="grid grid-template-columns-4">
                <?php
                foreach ($pr as $pr) {
                    echo "<div class='item'>";
                    echo "<img class='imgProduto' src=" . $pr['imagem'] . " alt='img'>";
                    echo "<h3>" . $pr['nome'] . "</h3>";
                    echo "<p>" . $pr['descricao'] . "</p>";
                    echo "<p> R$" . $pr['preco'] . "</p>";
                    // echo "<button class='adicionarCarrinho'><a href='../../controller/ControleCliente.php?ACAO=listarpedido'>Adicionar ao Carrinho</a></button>";
                    echo "<button class='adicionarCarrinho'><a href='../visaoPedido/ListarPedidos.php'>Adicionar ao Carrinho</a></button>";
                    echo "</div>";
                }
                ?>

        </div>
        </section>
    </main>

    <footer>
        <div class="footer-content">
            <ul class="autores">
                <h3>Autores</h3>
                <li><a href="https://github.com/CrowvenTh">Thiago</a></li>
            </ul>
            <ul>
                <h3>Contato</h3>
                <li> (61) 91234-5678</li>
                <li> <a style="color: white;" href="mailto:#"> email </a></li>
            </ul>
            <ul>
                <h3>Endereço</h3>
                <li>CEP: 123.456-789</li>
                <li>QS alguma coisa</li>
                <li>Rua tal, Samambaia Sul - Brasília/DF</li>
            </ul>
            <ul>
                <h3>Redes Sociais</h3>
                <li><a href="#">Instagram</a></li>
                <li><a href="#">WhatsApp</a></li>
                <li><a href="https://github.com/CrowvenTh">Github</a></li>
            </ul>
        </div>
    </footer>

</body>

</html>