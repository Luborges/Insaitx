<?php session_start();?>
<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
<head>
	<meta charset="UTF-8">
	<title>Insaitx - Como ter sucesso no Varejo</title>
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
		        <h1>Como ter sucesso no Varejo</h1>
		        <!--<p><img src="img/blog1.png" class="img-responsive"></p>-->

			        <p>Após um 2016 de péssimos resultados - o pior da história no cenário nacional - o setor espera agora, uma recuperação.</p>

			<p>Todos os setores da economia, de uma maneira geral, foram afetados. Fatores como a alta dos juros, desemprego elevado, crédito caro e escasso, fizeram com que o varejo nacional tivesse uma retração de, aproximadamente, 6%. Os dados são do IBGE na Pesquisa Mensal do Comércio.
		        </p>
		    <p>Reforço do caixa é a fórmula mágica para fazer isso acontecer! De que maneira? Eliminando operações não rentáveis, reestruturando áreas que estejam ociosas e já pensar em um aumento de estoque, visando o crescimento da economia previsto para o ano atual.</p>
		    <p>Especialistas no assunto, garantem que, para continuar com fôlego e crescendo em 2017, devem-se levar em conta, fatores como:</p>
		    <ol>
		    	<li>Cada vez mais as empresas devem pensar no propósito do seu produto: o consumidor precisa criar identidade com a marca para se manter fiel a ela.</li>
		    	<li>Foco é o cliente: a velha máxima continua, cada vez mais, em alta.</li>
		    	<li>Personalização é a chave do negócio: Sabe o Google? Pois é! A mágica que eles fazem em entender cada vez mais o perfil do usuário através de reviews, buscas, compras, rotinas etc é a razão pela qual, conseguem ser muito assertivos na hora de oferecer um produto ou serviço. Claro, nem todos tem a capacidade estrutural (nem o dinheiro) que eles tem, mas a ideia é a mesma: lembre-se do perfil do cliente e faça o máximo possível para estar próximo a ele.</li>
		    	<li>Pagamentos mobile são e serão cada vez mais fortes, de maneira geral. Busque atualizações, novos prestadores de serviços e parcerias que tragam ao seu negócio a  inovação necessária.</li>
		    	<li>Custos fixos operacionais (água, luz, IPTU, aluguel) deverão ser repensados. Consegue migrar uma parte ou a totalidade do seu negócio pro mundo onine? Então faça-o! Minime seus custos e riscos e aposte no futuro certo.</li>
		    </ol>
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