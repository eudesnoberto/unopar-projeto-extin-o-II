<?php
// Configurações do banco de dados
$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "eventos_culturais";

// Criando a conexão
$conn = new mysqli($host, $usuario, $senha, $banco);

// Verificando se houve erro
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

// Opcional: define charset para UTF-8
$conn->set_charset("utf8");
?>
