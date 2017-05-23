<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
<head>
	<meta charset="UTF-8">
	<title>Insaitx -  O Erro que TODO Empreendedor já cometeu</title>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  	<meta name="robots" content="noindex nofollow">
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

			<p>Para o ano atual, a meta é somar outros R$7 bilhões ao montante, totalizando R$60BI - um dos maiores mercados da economia nacional. Os dados são da ABComm (Associação Brasileira de Comércio Eletrônico). Eles afirmam ainda um número recorde na casa dos 200 milhões de pedidos de compras feitos online pelo país.
		        </p>
		    <p>Criar um produto que você acha que os cliente vão comprar, lançar um produto que você acha que as pessoas precisam ou até criar um negócio com produtos e serviços que você acha que as pessoas vão consumir.</p>

		    <p>O ideal é fazer uma pesquisa aprofundada sobre o cliente potencial do produto ou serviço que você pretende lançar, assim fica claro as necessidades que o cliente possui e quanto ele estaria disposto a desembolsar para possuí-lo.</p>
		    <p>As estratégias para atrair e manter esse cliente também são fundamentais e devem estar alinhadas e ajustadas antes do produto ou serviço ser implantado. </p>
		    <p>Com essas dicas você consegue diminuir os riscos do produto ou serviço serem mal sucedidos no seu mercado alvo. Além disso, existe a possibilidade de concluir que tal produto ou serviço não é a melhor opção para a sua empresa no momento, economizando muitos gastos para executar determinado projeto.</p>
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