<!DOCTYPE html>
<html>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exclusão de cadastro</title>
    <link rel="stylesheet" href="../css/form.css">
    <link rel="icon" type="image/x-icon" href="../design/logotipo/Corvus.tech_logo.png">
</head>
<nav>
    <ul>
        <li><a href="../../index.php">Home</a></li>
        <li><a href="../visaoProduto/Produto.php">Produtos</a></li>
        <li><a href="../visaoCliente/Login.php">Login</a></li>
        <li><a href="../visaoCliente/Perfil.php">Meu perfil</a></li>
    </ul>
</nav>

<body>
    <div class="form">
        <h4>Formulário de Exclusão de Cliente</h4>
        <form method="post" action="../../controller/ControleCliente.php?ACAO=excluircliente">

            <p>
                Digite o seu ID para exclusão:
                <input type="text" name="excluirid" maxlength="40" placeholder="Digite o seu ID" />
            </p>

            <div>
                <button type="submit" value="Registrar">Excluir</button>
                <button type="reset" value="Limpar">Limpar</button>
            </div>
        </form>

    </div>

    <footer>
        <div class="footer-content">
            <ul class="autores">
                <h3>Autores</h3>
                <li> <img class="autoresImg" src="../design_&_layout/logotipo/github-mark.png"> <a href="https://github.com/CrowvenTh">Thiago</a></li>
            </ul>
            <ul>
                <h3>Contato</h3>
                <li> <img class="autoresImg" src="../design_&_layout/logotipo/telefone.png"> (61) 91234-5678</li>
                <li> <img class="autoresImg" src="../design_&_layout/logotipo/email.png"> <a style="color: white;" href="mailto:#"> email </a></li>
            </ul>
            <ul>
                <h3>Endereço</h3>
                <li>CEP: 123.456-789</li>
                <li>QS alguma coisa</li>
                <li>Rua tal, Samambaia Sul - Brasília/DF</li>
            </ul>
            <ul>
                <h3>Redes Sociais</h3>
                <li> <img class="autoresImg" src="../design_&_layout/logotipo/ig icon.png"> <a href="#">Instagram</a></li>
                <li> <img class="autoresImg" src="../design_&_layout/logotipo/whatsapp.png"> <a href="#">WhatsApp</a></li>
                <li> <img class="autoresImg" src="../design_&_layout/logotipo/link icon.png"> <a href="  ">Github</a></li>
            </ul>
        </div>
    </footer>

</body>

</html>