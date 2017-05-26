<!DOCTYPE html>
<?php session_start();
	if (isset($_SESSION["cadastrado"])==false){
		$_SESSION['cadastrado']=1;
	}
?>
<html lang="pt-br" dir="ltr">
<head>
<meta charset="utf-8">
<title>Cadastro</title>
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="description" content="">
<meta content="yes" name="apple-mobile-web-app-capable" />
<meta name="viewport" content="minimum-scale=1.0, width=device-width, maximum-scale=1, user-scalable=no" />
<meta name="robots" content="index follow">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/animations.css">
<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/prettyPhoto.css">
<link rel="stylesheet" href="assets/css/main.css">

<script async src="assets/js/lib/modernizr-2.6.2-respond-1.1.0.min.js"></script>

<script type="text/javascript">	
function verificarFormulario()
{   
    var nome = document.getElementById('nome').value;
    var email = document.getElementById('email').value;
	document.getElementById('arquivo').value=arquivo;

	if (nome!='' && email!=''){
		var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		if (re.test(email)==true){
			document.getElementById('Cadastrar').disabled = false;
		}
		else
			document.getElementById('Cadastrar').disabled = true;
	}
	else
		document.getElementById('Cadastrar').disabled = true;
}

function verificarFormularioCadastrado()
{   
    var email = document.getElementById('emailcadastrado').value;
	document.getElementById('arquivocadastrado').value=arquivo;

	if (email!=''){
		var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		if (re.test(email)==true){
			document.getElementById('Enviar').disabled = false;
		}
		else
			document.getElementById('Enviar').disabled = true;
	}
	else
		document.getElementById('Enviar').disabled = true;
}
</script>

<script>
var query = location.search.substring(1);
var arquivo = query.substring(8,query.length);
</script>
</head>
<h3> Cadastre-se para baixar o ebook</h3>
<form name='formCadastro' class="col-md-12" method='post' action='cadastro.php'>
	<div class="form-group"><input type='text' class="form-control" id='nome' name='nome' class='nome' placeholder='Nome completo' onclick="verificarFormulario()" onkeyup="verificarFormulario()" size=50/></div>
	<div class="form-group"><input type='text' class="form-control" id='email' name='email' class='email' placeholder='E-mail' onclick="verificarFormulario()" onkeyup="verificarFormulario()" size=50/></div>
	<div class="form-group"><input type='text' class="form-control" name='cargo' class='cargo' placeholder='Cargo (Opcional)' onclick="verificarFormulario()" onkeyup="verificarFormulario()" size=50/></div>
	<div class="form-group"><input type='text' class="form-control" name='empresa' class='empresa' placeholder='Empresa (Opcional)' onclick="verificarFormulario()" onkeyup="verificarFormulario()" size=50/></div>
	<div class="form-group"><input type="hidden" id='arquivo' class="arquivo" name='arquivo' class='arquivo'/></div>
	<div class="form-group">
	<input type="submit" id='Cadastrar' disabled="true" value="Cadastrar" class="btn pull-right" onclick="verificarFormulario()"></div>
</form>
<br><br><br>
<h3>Já tenho cadastro</h3>
<form name='formJaCadastro' class="col-md-12" method='post' action='cadastrado.php'>
	<div class="form-group"><input type='text' class="form-control" id='emailcadastrado' name='emailcadastrado' class='emailcadastrado' placeholder='E-mail' onclick="verificarFormularioCadastrado()" onkeyup="verificarFormularioCadastrado()" size=50/></div>
	<div class="form-group"><input type="hidden" id='arquivocadastrado' class="arquivocadastrado" name='arquivocadastrado' class='arquivocadastrado'/></div>
	<input type="submit" id='Enviar' disabled="true" value="Enviar" class="btn pull-right" onclick="verificarFormularioCadastrado()"></div>
</form>
</html>