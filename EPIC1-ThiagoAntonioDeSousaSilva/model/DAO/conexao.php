<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "corvus_tech";

$conexao = new mysqli($servidor, $usuario, $senha, $banco);

if ($conexao->connect_error) {
    die("Conexão falhou: " . $conexao->connect_error);
}
