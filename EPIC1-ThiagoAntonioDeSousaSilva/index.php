<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corvus_tech</title>
    <link rel="stylesheet" href="../Prototipo-ThiagoAntonioDeSousaSilva/Visao/css/cad.css">
    <link rel="icon" type="image/x-icon" href="Visao/imagens/Corvus.tech_logo.png">
</head>


<body>
    <?php
    session_start();
    if (isset($_SESSION['mensagem'])) {
        echo "<script>alert('" . $_SESSION['mensagem'] . "');</script>";
        unset($_SESSION['mensagem']);
    }
    ?>

    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <!-- <li><a href="Visao/ListarUsuario.php">Cadastros</a></li> -->
            <li><a href="Visao/FormLogUsuario.php">Login</a></li>
            <li><a href="Visao/FormCadUsuario.php">Cadastre-se</a></li>
        </ul>
    </nav>

    <main>
        <form>
            <h2>Seja bem vindo a Corvus.tech !</h2>


            <div style="text-align: center;">
                <img style="width: 250px; border-radius: 250px; margin: 0;" src="Visao/imagens/Corvus.tech_logo.png" alt="Logo Corvus.tech">
            </div>


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
                <li> <a href="#">WhatsApp</a></li>
                <li> <a href="#">Insagram</a></li>
                <li> <a href="https://github.com/CrowvenTh">Github</a></li>
            </ul>
        </div>
    </footer>

</body>


</html>