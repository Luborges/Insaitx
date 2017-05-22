<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
<head>
	<meta charset="UTF-8">
	<title>Insaitx</title>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  	<meta name="robots" content="noindex nofollow">
  	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<?php include "topo.php"; ?>
<section class="noticia">
	<div class="container">
		<div class="row">
		  <div class="col-md-8 col-md-8 col-md-offset-2">
		        <h1>Sobre nós</h1>
		        <p>
		            A FCamara Formação e Consultoria iniciou suas atividades em 2008 com o objetivo de servir com excelência as demandas de verificação de desempenho de aplicações e organização de times de desenvolvimento. Hoje, somos referência em transformação digital através de um método próprio, o High Performance Team, que ajuda empresas a desenvolver projetos e ideias de negócio de forma mais eficiente, aumentando suas chances de sucesso em mais de 60%, quando comparadas com modelos tradicionais. Inovação, tecnologia e empreendedorismo fazem parte de quem somos. Queremos ser uma empresa útil e funcional. Útil porque possuímos serviços e produtos necessários. Funcional porque nossos serviços e produtos realmente solucionam e representam valor agregado ao Cliente. Venha fazer parte do #SangueLaranja. Seja um de nossos clientes ou consultores. Aqui suas ideias tem valor!
		        </p>
		  </div>
		</div>
	</div>
</section>
<?php
session_start();
if (isset($_SESSION["cadastrado"])==false){
	$_SESSION['cadastrado']=3;
	echo "<section class='cadastro'>";
	echo "<div class='container'>";
	echo "<div class='row'>";
	echo "<div class='col-md-12 form'>";
	echo "<h2>fique atualizado</h2>";
	echo "<p>Cadastre-se aqui para mais conteúdo</p>";
	include "form.php";
	echo "</div>";
	echo "</div>";
	echo "</div>";
	echo "</section>";

}
elseif ($_SESSION['cadastrado']!=2) {
	$_SESSION['cadastrado']=3;
	echo "<section class='cadastro'>";
	echo "<div class='container'>";
	echo "<div class='row'>";
	echo "<div class='col-md-12 form'>";
	echo "<h2>fique atualizado</h2>";
	echo "<p>Cadastre-se aqui para mais conteúdo</p>";
	include "form.php";
	echo "</div>";
	echo "</div>";
	echo "</div>";
	echo "</section>";
}
else{
	echo "<section class='noticia'>
	<div class='container'>
		<div class='row'>
		  <div class='col-md-8 col-md-8 col-md-offset-2'>
		        <h2>Conteúdo para cadastrados</h2>
		        <p>
		            Conteúdo para cadastrados
		        </p>
		  </div>
		</div>
	</div>
</section>
";
}
?>

<?php include "footer.php"; ?>
</body>
</html>