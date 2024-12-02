<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
   
    <title>Alterar</title>
    <link rel="stylesheet" href="">
</head>

<body>
    <a href="Login.php" class="login">Login</a>
    <div class="form">
        <h4>Formulário de Alteração de Pedido</h4>
        <form method="post" action="../../controller/ControleCliente.php?ACAO=alterarpedido">

            <p> 
                Digite o ID do seu pedido:
                <input type="text" name="novoid" maxlength="40" placeholder="Digite o ID para alterar" required/>
            </p>
            
            <p> 
                Digite o seu ID:
                <input type="text" name="idcliente" maxlength="40" placeholder="Digite o seu ID"/>
            </p>

            <p> 
                ID do produto:
                <input type="text" name="idestoque" maxlength="40" placeholder="Digite o ID do produto"/>
            </p>

            <p> 
                Nova quantidade:
                <input type="text" name="quantidadepedido" maxlength="40" placeholder="Digite a quantidade do produto"/>
            </p>

            <div>
                <button type="submit" value="Registrar">Alterar</button>
                <button type="reset" value="Limpar">Limpar</button>
            </div>
        </form>
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