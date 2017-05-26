<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include "conexao.php";
$erro=0;
$email = $_POST['emailcadastrado'];
$arquivo=$_POST['arquivocadastrado'];


$sql = "SELECT email FROM contatos WHERE email='".$email."'";
$result = $con->query($sql);

while($row = $result->fetch_assoc()) {
    $emailbanco= $row["email"];
}

if ($emailbanco==$email) {
		$con->close();
 		header('Content-Type: application/download');
        header('Content-Disposition: attachment; filename="'.$arquivo.'"');
        header("Content-Length: " . filesize(arquivo));

        $fp = fopen($arquivo, "r");
        fpassthru($fp);
        fclose($fp);
}
?>