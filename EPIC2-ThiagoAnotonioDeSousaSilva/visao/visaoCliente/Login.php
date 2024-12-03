<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/form.css">
    <link rel="icon" type="image/x-icon" href="../design/logotipo/Corvus.tech_logo.png">
</head>
<nav>
    <ul>
        <li><a href="../../index.php">Home</a></li>
        <li><a href="../visaoProduto/Produto.php">Produtos</a></li>
        <li><a href="../visaoCliente/CadCliente.php">Cadastre-se</a></li>
    </ul>
</nav>

<body>
    <div class="form">
        <img href="../design/logotipo/Corvus.tech_logo.png">
        <h4>Formulário de Login</h4>


        <form method="post" action="../../controller/ControleCliente.php?ACAO=verificarLogin">
            <p>
                Email:
                <input type="email" id="email" name="email" maxlength="40" placeholder="Email para login" />
            </p>
            <p>
                Senha:
                <input type="password" id="senha" name="senha" maxlength="40" placeholder="Senha" />
            </p>
            <div>
                <button type="submit" value="Logar">Logar</button>
                <button type="reset" value="Limpar">Limpar</button>
            </div>
        </form>



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