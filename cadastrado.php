<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
session_start();
include "conexao.php";
$erro=0;
$email = $_POST['email'];

$sql = "SELECT email FROM contato WHERE email='".$email."'";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    $_SESSION['cadastrado']=2;
}
$con->close();
?>