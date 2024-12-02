<?php
session_start();

if (!isset($_SESSION['id_usuario'])) {
    header('Location: Login.php');
    exit(); 
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Pedidos</title>
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

<body>
    <div class="form">
        <h4>Lista de Pedidos</h4>

        <?php
        require '../../model/DAO/ClassClienteDAO.php';

        $ClassClienteDAO = new ClassClienteDAO();
        $pedidos = $ClassClienteDAO->listarpedido(); 

        if (!empty($pedidos)) {
            echo "<table border='1' style='width: 100%; text-align: center;'>";
            echo "<thead>";
            echo "<tr>";
            echo "<th>ID</th>";
            echo "<th>Cliente</th>";
            echo "<th>Endereço</th>";
            echo "<th>Produto</th>";
            echo "<th>Quantidade</th>";
            echo "<th>Total</th>";
            echo "<th>Data do Pedido</th>";
            echo "</tr>";
            echo "</thead>";
            echo "<tbody>";

            foreach ($pedidos as $pedido) {
                echo "<tr>";
                echo "<td>" . $pedido['ID'] . "</td>";
                echo "<td>" . $pedido['Cliente'] . "</td>";
                echo "<td>" . $pedido['Endereço'] . "</td>";
                echo "<td>" . $pedido['Produto'] . "</td>";
                echo "<td>" . $pedido['Quantidade'] . "</td>";
                echo "<td>" . $pedido['Total'] . "</td>";
                echo "<td>" . $pedido['Data_Pedido'] . "</td>";
                echo "</tr>";
            }

            echo "</tbody>";
            echo "</table>";
        } else {
            
            echo "<p>Nenhum pedido encontrado.</p>";
        }
        ?>

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