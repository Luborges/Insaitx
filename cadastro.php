<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include "conexao.php";
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

$sql = "INSERT INTO contato (nome, email, ip, data, cargo, empresa)
VALUES ('".$nome."', '".$email."', '".get_client_ip()."', now(), '".$cargo."', '".$empresa."')";

if ($con->query($sql) === TRUE) {
    echo "Cadastro realizado com sucesso!";
    session_start();
} else {
    echo "Erro: " . $sql . "<br>" . $con->error;
}

$con->close();
?>