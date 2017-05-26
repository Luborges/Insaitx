<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php

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
    include "conexao.php";
//  include "cadastrado.php";
    $erro=0;
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cargo=$_POST['cargo'];
    $empresa = $_POST['empresa'];
    $arquivo= 'ebooks/'.$_POST['arquivo'];

    $sql = "INSERT INTO contatos (nome, email, ip, data, cargo, empresa)
    VALUES ('".$nome."', '".$email."', '".get_client_ip()."', now(), '".$cargo."', '".$empresa."')";

    if ($con->query($sql) === TRUE) {

        $con->close();
        header('Content-Type: application/download');
        header('Content-Disposition: attachment; filename="'.$arquivo.'"');
        header("Content-Length: " . filesize(arquivo));

        $fp = fopen($arquivo, "r");
        fpassthru($fp);
        fclose($fp);
        echo $arquivo;

    } 
    else{

    echo "<script>window.close()</script>";
    
    }
?>