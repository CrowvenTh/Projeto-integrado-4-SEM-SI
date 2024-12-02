<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="../css/form.css">
    <link rel="icon" type="image/x-icon" href="./visao/design/logotipo/Corvus.tech_logo.png">
</head>
<nav>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="../visaoProduto/Produto.php">Produtos</a></li>
        <li><a href="../visaoCliente/Login.php">Login</a></li>
        <li><a href="../visaoCliente/CadCliente.php">Cadastre-se</a></li>
    </ul>
</nav>

<body>
    <div class="form-section">
        <div class="form">
            <h4>Cadastre-se !</h4>
            <form method="post" action="../../controller/ControleCliente.php?ACAO=cadastrarCliente">
                <p>
                    Nome:
                    <input type="text" name="nome" maxlength="40" placeholder="Nome Completo" />
                </p>
                <p>
                    CPF:
                    <input type="text" id="cpf" name="cpf" maxlength="40" placeholder="Digite seu CPF" />
                </p>
                <p>
                    Endereço:
                    <input type="text" id="endereco" name="endereco" maxlength="40" placeholder="Endereço" />
                </p>
                <p>
                    E-mail:
                    <input type="email" id="email" name="email" maxlength="40" placeholder="E-mail para login" />
                </p>
                <p>
                    Telefone:
                    <input type="text" id="telefone" name="telefone" maxlength="40" placeholder="Telefone" />
                </p>
                <p>
                    Senha:
                    <input type="password" id="senha" name="senha" maxlength="40" placeholder="Senha" />
                </p>
                <div>
                    <button type="submit" value="Registrar">Cadastrar</button>
                    <button type="reset" value="Limpar">Limpar</button>
                </div>
            </form>
        </div>
    </div>
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
                <li> <a href="#">WhatsApp</a></li>
                <li> <a href="#">Insagram</a></li>
                <li> <a href="https://github.com/CrowvenTh">Github</a></li>
            </ul>
        </div>
    </footer>
</body>

</html>