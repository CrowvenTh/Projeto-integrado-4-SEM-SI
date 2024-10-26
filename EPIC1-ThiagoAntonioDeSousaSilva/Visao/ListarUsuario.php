<!-- teste de funcionalidade, não faz parte do EPIC1 -->

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Visao/css/cad.css">
    <link rel="icon" type="image/x-icon" href="Visao/imagens/Corvus.tech_logo.png">
    <title>Lista de Usuários</title>
    <script language="JavaScript" type="text/javascript">
        function checkDelete() {
            return confirm('Deseja continuar?');
        }
    </script>
</head>

<body>
    <nav>
        <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a href="../Visao/FormLogUsuario.php">Login</a></li>
            <li><a href="../Visao/FormCadUsuario.php">Cadastre-se</a></li>
        </ul>
    </nav>

    <main>
        <?php
        require '../Modelo/ClassUsuario.php';
        require '../Modelo/DAO/ClassUsuarioDAO.php';

        $classUsuarioDAO = new ClassUsuarioDAO();
        $usuarios = $classUsuarioDAO->listarUsuarios();
        echo "<div id='direita'>";
        echo "<table class='table'>";
        echo "  <thead>";
        echo "      <tr>";
        echo "          <th><p align='center'>Nome</p></th>";
        echo "          <th><p align='center'>Email</p></th>";
        echo "          <th><p align='center'>Senha</p></th>";
        echo "          <th><p align='center'>Excluir</p></th>";
        echo "          <th><p align='center'>Alterar</p></th>";
        echo "      </tr>";
        echo "  </thead>";
        echo "  <tbody>";

        foreach ($usuarios as $usuario) {
            echo "<tr>";
            echo "<td><p align='center'>" . htmlspecialchars($usuario['nome']) . "</p></td>";
            echo "<td><p align='center'>" . htmlspecialchars($usuario['email']) . "</p></td>";
            echo "<td><p align='center'>" . htmlspecialchars($usuario['senha']) . "</p></td>";
            echo "<td align='center'><a href='Controle/ControleUsuario.php?ACAO=excluirUsuario&idex=" . $usuario["idUsuario"] . "' onclick='return checkDelete()'><button class='btn btn-danger'>Excluir</button></a></td>";
            echo "<td align='center'><a href='Visao/FormAltUsuario.php?idex=" . $usuario["idUsuario"] . "'><button class='btn btn-warning'>Alterar</button></a></td>";
            echo "</tr>";
        }

        echo "  </tbody>";
        echo "</table>";
        echo "</div>";
        ?>
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