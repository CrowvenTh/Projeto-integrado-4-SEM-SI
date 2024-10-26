<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se!</title>
    <link rel="stylesheet" href="../Visao/css/cad.css">
    <link rel="icon" type="image/x-icon" href="../Visao/imagens/Corvus.tech_logo.png">
</head>

<body>
    <nav>
        <ul>
            <li><a href="../index.php">Home</a></li>
            <!-- <li><a href="../Visao/ListarUsuario.php">Cadastros</a></li> -->
            <li><a href="../Visao/FormLogUsuario.php">Login</a></li>
        </ul>
    </nav>

    <main>
        <form method="post" action="../Controle/ControleUsuario.php?ACAO=cadastrarUsuario">
            <h2>Cadastre-se !</h2>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" maxlength="40" placeholder="Digite seu nome" required />

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" maxlength="40" placeholder="Digite seu email" required />

            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" maxlength="16" placeholder="Digite sua senha" required />

            <label for="confirmarSenha">Confirmar Senha:</label>
            <input type="password" id="confirmarSenha" name="confirmarSenha" maxlength="16" placeholder="Confirme sua senha" required />

            <button type="submit">Registrar</button>
            <button type="reset">Limpar</button>

        </form>
    </main>

    <footer>
        <div class="footer-content">
            <ul>
                <h3>Contato</h3>
                <li>(61) 91234-5678</li>
                <li><a style="color: white;" href="mailto:corvustech@gmail.com">corvustech@gmail.com</a></li>
            </ul>
            <ul>
                <h3>Endereço</h3>
                <li>CEP: 123.456-789</li>
                <li>Rua do Corvo</li>
                <li>Prédio Corvinal, 217 - Brasília/DF</li>
            </ul>
            <ul>
                <h3>Redes Sociais</h3>
                <li><a href="#">Instagram</a></li>
                <li><a href="#">WhatsApp</a></li>
                <li> <a href="https://github.com/CrowvenTh">Github</a></li>
            </ul>
        </div>
    </footer>

</body>

</html>