<?php
$servidor ="127.0.0.1";
$login = "insaitx";
$senha = "insaitx";
$banco = "insaitx";

// Create connection
$con = new mysqli($servidor, $login, $senha, $banco);
// Verifica Conexão
if ($con->connect_error) {
    die("Falha de Conexão: " . $conn->connect_error);
}
?>