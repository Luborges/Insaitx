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
echo $_SESSION['cadastrado'];
if ($_SESSION['cadastrado'] != 2) {
    include "conexao.php";
    $erro=0;
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cargo=$_POST['cargo'];
    $empresa = $_POST['empresa'];

    $sql = "INSERT INTO contatos (nome, email, ip, data, cargo, empresa)
    VALUES ('".$nome."', '".$email."', '".get_client_ip()."', now(), '".$cargo."', '".$empresa."')";

    if ($con->query($sql) === TRUE) {
        $_SESSION['cadastrado']=2;
    } 

    require_once('phpmailer/class.phpmailer.php');
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->CharSet="UTF-8";
    $mail->SMTPSecure = 'tls';
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->Username = 'insaitx@gmail.com';
    $mail->Password = 'gamaxp2017';
    $mail->SMTPAuth = true;

    $mail->From = 'insaitx@gmail.com';
    $mail->FromName = 'Insaitx';
    $mail->AddAddress($email);

    $mail->IsHTML(true);
    $mail->Subject    = "Bem-vindo ao Insaitx";
    $mail->AltBody    = "Insaitx";
    $mail->Body    = "Bem-vindo ao Insaitx!<br><br>Agora você faz parte do grupo que está sempre em busca de informações que possibilitem a melhoria do seu negócio!<br><br>Sempre que algum conteúdo for publicado nós vamos te informar, então não se preocupe em perder nenhuma novidade!";

    if(!$mail->Send())
    {
    echo "Erro: " . $mail->ErrorInfo;
    }
    else
    {
        echo "Enviado com sucesso";
    }
    $con->close();
}
else{
    $_SESSION['cadastrado']=2;
}

?>