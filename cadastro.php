<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include "cadastrado.php";

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

if (session_status() == PHP_SESSION_NONE) {
    include "conexao.php";
    $erro=0;
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cargo=$_POST['cargo'];
    $empresa = $_POST['empresa'];

    $sql = "INSERT INTO contato (nome, email, ip, data, cargo, empresa)
    VALUES ('".$nome."', '".$email."', '".get_client_ip()."', now(), '".$cargo."', '".$empresa."')";

    if ($con->query($sql) === TRUE) {
        session_start();
        header( "Location: conteudo.php" );
    } 

    $con->close();
}
else{
    echo "<script type=\'text/javascript\'> prompt('E-mail já cadastrado'); </script>";
    echo "E-mail ja cadastrado";
    header( "Location: conteudo.php" );
}

?>