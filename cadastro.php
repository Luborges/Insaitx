<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$servidor ="localhost";
$login = "root";
$senha = "";
$banco = "gama";
$erro=0;
$nome = $_POST['nome'];
$email = $_POST['email'];
$cargo=$_POST['cargo'];
$empresa = $_POST['empresa'];

function get_client_ip() {
$ip = '';
if (isset($_SERVER['HTTP_CLIENT_IP']))
    $ip = $_SERVER['HTTP_CLIENT_IP'];
else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
else if(isset($_SERVER['HTTP_X_FORWARDED']))
    $ip = $_SERVER['HTTP_X_FORWARDED'];
else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
    $ip = $_SERVER['HTTP_FORWARDED_FOR'];
else if(isset($_SERVER['HTTP_FORWARDED']))
    $ip = $_SERVER['HTTP_FORWARDED'];
else if(isset($_SERVER['REMOTE_ADDR']))
    $ip = $_SERVER['REMOTE_ADDR'];
else
    $ip = 'Desconhecido';

return $ip;
}

// Create connection
$con = new mysqli($servidor, $login, $senha, $banco);
// Verifica Conexão
if ($con->connect_error) {
    die("Falha de Conexão: " . $conn->connect_error);
}

$sql = "INSERT INTO Cadastro (nome, email, ip, data, cargo, empresa)
VALUES ('".$nome."', '".$email."', '".get_client_ip()."', now(), '".$cargo."', '".$empresa."')";

if ($con->query($sql) === TRUE) {
    echo "Cadastro realizado com sucesso!";
} else {
    echo "Erro: " . $sql . "<br>" . $con->error;
}

$con->close();
?>