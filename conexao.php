<?php
$servidor ="localhost";
$login = "root";
$senha = "";
$banco = "insitx";

// Create connection
$con = new mysqli($servidor, $login, $senha, $banco);
// Verifica Conexão
if ($con->connect_error) {
    die("Falha de Conexão: " . $conn->connect_error);
}
?>