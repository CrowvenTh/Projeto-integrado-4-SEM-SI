<?php
include '../model/DAO/conexao.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos - Loja de Tecnologia</title>
    <link rel="stylesheet" href="../view/css/index.css">
    <link rel="icon" type="image/x-icon" href="../view/imagens/Corvus.tech_logo.png">
</head>

<body>
    <header>
        <h1>Nossos Produtos</h1>
        <nav>
            <ul>
                <li><a href="../index.php">Home</a></li>
                <li><a href="../controler/produtos.php">Produtos</a></li>
            </ul>
        </nav>
    </header>
    <section>
        <h2>Lista de Produtos</h2>
        <div class="produtos-container">
            <?php
            $sql = "SELECT * FROM produtos";
            $result = $conexao->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='produto'>";
                    echo "<img src='" . $row['imagem'] . "' alt='" . $row['nome'] . "'>";
                    echo "<h3>" . $row['nome'] . "</h3>";
                    echo "<p>" . $row['descricao'] . "</p>";
                    echo "<p>Preço: R$" . $row['preco'] . "</p>";
                    echo "</div>";
                }
            } else {
                echo "Nenhum produto encontrado.";
            }
            ?>


        </div>
    </section>
    <footer>
        <div class="footer-content">
            <ul>
                <h3>Contato</h3>
                <li>(61) 91234-5678</li>
                <li><a style="color: white;" href="mailto:#">corvustech@gmail.com</a></li>
            </ul>
            <ul>
                <h3>Endereço</h3>
                <li>CEP: 123.456-789</li>
                <li>Rua do Corvo</li>
                <li>Prédio Corvinal, 217 - Brasília/DF</li>
            </ul>
            <ul>
                <h3>Redes Sociais</h3>
                <li>Instagram</li>
                <li>WhatsApp</li>
                <li>Github</li>
            </ul>
        </div>
    </footer>
</body>

</html>