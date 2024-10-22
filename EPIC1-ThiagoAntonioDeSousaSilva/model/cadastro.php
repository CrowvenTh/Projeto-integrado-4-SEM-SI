<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se!</title>
    <link rel="stylesheet" href="../view/css/usuario.css">
    <link rel="icon" type="image/x-icon" href="view/imagens/Corvus.tech_logo.png">
</head>

<body>
    <nav>
        <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a href="../controler/produtos.php">Produtos</a></li>
            <li><a href="../model/login.php">Login</a></li>
            <li><a href="../model/cadastro.php">Cadastro</a></li>
        </ul>
    </nav>

    <main>
        <form method="POST" action="cadastro.php">
            <h2>Cadastre-se</h2>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" placeholder="Digite seu nome" required>
            <label for="email">Email:</label>
            <input type="email" name="email" placeholder="Digite seu email" required>
            <label for="senha">Senha:</label>
            <input type="password" name="senha" placeholder="Digite sua senha" required>
            <button type="submit">Cadastrar</button>
        </form>
    </main>

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