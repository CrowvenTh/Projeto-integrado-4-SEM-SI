<?php
session_start();

if (!isset($_SESSION['id_usuario'])) {
    header('Location: Login.php');
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Perfil</title>
    <link rel="stylesheet" href="../css/perfil.css">
    <link rel="icon" type="image/x-icon" href="../design/logotipo/Corvus.tech_logo.png">
</head>
<nav>
    <ul>
        <li><a href="../../index.php">Home</a></li>
        <li><a href="../visaoProduto/Produto.php">Produtos</a></li>
        <li><a href="../visaoCliente/Login.php">Login</a></li>
        <li><a href="../visaoCliente/CadCliente.php">Cadastre-se</a></li>
    </ul>
</nav>

<main>
    <section>
        <div class="form">
            <h1>Perfil de cliente</h1>
            <br><br>
            <h4 class="dados">Informações:</h5>
                <br>
                <?php
                echo "<p> ID: " . $_SESSION['id_usuario'];
                "</p>";
                echo "<p> nome: " . $_SESSION['nome'];
                "</p>";
                echo "<p> endereço: " . $_SESSION['endereco'];
                "</p>";
                echo "<p> e-mail: " . $_SESSION['email'];
                "</p>";
                echo "<p> telefone: " . $_SESSION['telefone'];
                "</p>";

                ?>

                <br><br>
                <h4 class="opcoes">Opções</h4>
                <br>
                <a class="alterar" href="../visaoCliente/AltCliente.php?idex=<?php echo $_SESSION['id_usuario']; ?>">Alterar Conta</a>

                <a class="excluir" href="../visaoCliente/ExcluirCliente.php">Excluir conta</a>

                <a class="cadastrar" href="../visaoCliente/CadCliente.php">Cadastrar nova conta</a>

        </div>
    </section>
</main>

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