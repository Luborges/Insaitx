﻿<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
session_start();
include "conexao.php";
$erro=0;
$email = $_POST['email'];
$emailbanco = 'teste';

$sql = "SELECT email FROM contatos WHERE email='".$email."'";
$result = $con->query($sql);
while($row = $result->fetch_assoc()) {
    $emailbanco= $row["email"];
}
if ($email!='teste'){
	if (($emailbanco==$email)){
    	$_SESSION['cadastrado']=2;
	}
}
$con->close();
?>