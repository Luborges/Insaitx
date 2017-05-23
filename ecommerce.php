<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
<head>
	<meta charset="UTF-8">
	<title>Insaitx - E-COMMERCE</title>
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
		       <h1>e-commerce</h1>

			<p>Mais de 700.000 pessoas são empregadas no setor que faturou R$53 BI em 2016</p>

			<p>Para o ano atual, a meta é somar outros R$7 bilhões ao montante, totalizando R$60BI - um dos maiores mercados da economia nacional. Os dados são da ABComm (Associação Brasileira de Comércio Eletrônico). Eles afirmam ainda um número recorde na casa dos 200 milhões de pedidos de compras feitos online pelo país.
		        </p>
		    <p>Outros números expressivos mostram como esse é “a mina dos olhos de ouro” dos empresários:</p>
		    <ul>
		    	<li>38,5MI de compradores únicos, ou seja, a quantidade de pessoas diferentes transacionando através da internet para suas compras;</li>
		    	<li>71mil lojas online operando em todo o território nacional;</li>
		    	<li>PME (Pequenas e Médias Empresas) representam 1/4 de todo esse volume.</li>
		    </ul>
		    <p>Esses dados mostram que quem não se atualizar, reinventar a carteira de produtos e se antenar no mercado, vai ficar pra trás. Aquela lojinha da esquina, o mercadinho do bairro, a banca de jornal, todos precisam se modernizar e ocolocar seus produtos online para que muito mais pessoas possam se tornar seus clientes.</p>
		    <p>Gostou dessa matéria? Acompanhe nosso blog que, diariamente, iremos colocar mais assuntos do seu interesse. </p>
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