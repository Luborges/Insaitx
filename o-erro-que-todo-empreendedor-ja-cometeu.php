<?php session_start();?>
<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
<head>
	<meta charset="UTF-8">
	<title>Insaitx -  O Erro que TODO Empreendedor já cometeu</title>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  	<meta name="robots" content="index follow">
 	<meta name="description" content="O Maior erro quando se está no comando de um negócio é fazer aquilo que você acha que está certo.">
	<meta property="og:image" content="http://insaitx.com.br/img/facebook3.png"/>
	<meta property="og:type" content="website"/>
	<meta property="og:locale" content="pt_BR">
	<meta property="og:url" content="http://insaitx.com.br/o-erro-que-todo-empreendedor-ja-cometeu.php">
	<meta property="og:title" content="Insaitx - O Erro que TODO Empreendedor já cometeu">
	<meta property="og:description" content="O Maior erro quando se está no comando de um negócio é fazer aquilo que você acha que está certo.">
  	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   	<style>
  .form {
    width: 50%;
    float: none;
    margin: 0 auto;
	}
  	</style>
</head>
<body>
<?php include "topo.php"; ?>
<section class="noticia">
	<div class="container">
		<div class="row">
		  <div class="col-md-8 col-md-8 col-md-offset-2">
		    <h1> O erro que TODO empreendedor já cometeu</h1>

			<p>O Maior erro quando se está no comando de um negócio é fazer aquilo que você acha que está certo.</p>

			<p>Criar um produto que você acha que os cliente vão comprar, lançar um produto que você acha que as pessoas precisam ou até criar um negócio com produtos e serviços que você acha que as pessoas vão consumir.
		    </p>
		  </div>
		</div>
	</div>
</section>
<?php
if (isset($_SESSION["cadastrado"])==false){
	$_SESSION['cadastrado']=3;
	echo "<section class='cadastro'>";
	echo "<div class='container'>";
	echo "<div class='row'>";
	echo "<div class='col-md-12 form'>";
	echo "<h2>Se cadastre para ler mais </h2>";
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
	echo "<h2>Se cadastre para ler mais </h2>";
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
		    <p>O ideal é fazer uma pesquisa aprofundada sobre o cliente potencial do produto ou serviço que você pretende lançar, assim fica claro as necessidades que o cliente possui e quanto ele estaria disposto a desembolsar para possuí-lo.</p>

		    <p>As estratégias para atrair e manter esse cliente também são fundamentais e devem estar alinhadas e ajustadas antes do produto ou serviço ser implantado. </p>
		    <p>Com essas dicas você consegue diminuir os riscos do produto ou serviço serem mal sucedidos no seu mercado alvo. Além disso, existe a possibilidade de concluir que tal produto ou serviço não é a melhor opção para a sua empresa no momento, economizando muitos gastos para executar determinado projeto.
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