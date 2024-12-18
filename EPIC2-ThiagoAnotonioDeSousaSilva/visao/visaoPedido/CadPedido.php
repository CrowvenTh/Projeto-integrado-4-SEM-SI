<!DOCTYPE html>
<html>

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

    <div class="form">

        <h4>Cadastro de Pedido</h4>

        <form method="post" action="../../controller/ControleCliente.php?ACAO=cadastrarpedido">

            <!-- <label for="imagem">Imagem:</label>
            <input type="url" id="imagem" name="imagem" maxlength="500" placeholder="Insira o link da imagem" /> -->

            <!-- <label for="idcliente">id cliente:</label>
            <input type="text" id="id" name="nome" maxlength="40" placeholder="Insira seu id " />

            <label for="produto">Produto:</label>
            <input type="text" id="nome" name="nome" maxlength="40" placeholder="Insira o nome do produto " />

            <label for="quantidade">Quantidade:</label>
            <input type="text" id="quantidade" name="quantidade" maxlength="40" placeholder="Insira a quantidade do produto" />

            <label for="preco">Preço:</label>
            <input type="text" id="preco" name="preco" maxlength="40" placeholder="Insira o preço do produto" /> -->

            <button type="submit" value="Registrar">Cadastrar</button>
            <button type="reset" value="Limpar">Limpar</button>
    </div>

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