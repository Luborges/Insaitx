<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include "conexao.php";
$erro=0;
$email = $_POST['email'];

$sql = "SELECT email FROM Cadastro WHERE email='".$email."'";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    echo "Cadastro já existe";
    session_start();
}
else {
    echo "Cadastro não existe";
}

$con->close();
?>