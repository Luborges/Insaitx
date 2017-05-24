<?php session_start();?>
<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
<head>
	<meta charset="UTF-8">
	<title>Insaitx - Como a indústria usa a inteligência competitiva do e-commerce nas estratégias de trade marketing?</title>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  	<meta name="robots" content="index follow">
    <meta name="description" content="79% dos brasileiros são influenciados pelo digital para fazer compras. Por outro lado, em 5 anos as visitas na loja física caíram 60%, o que indica que a influência digital está aumentando!">
	<meta property="og:image" content="http://insaitx.com.br/img/facebook6.png"/>
	<meta property="og:type" content="website"/>
	<meta property="og:locale" content="pt_BR">
	<meta property="og:url" content="http://insaitx.com.br/como-a-industria-usa-a-inteligencia-competitiva-do-e-commerce-nas-estrategias-de-trade-marketing.php">
	<meta property="og:title" content="Insaitx - Como a indústria usa a inteligência competitiva do e-commerce nas estratégias de trade marketing?">
	<meta property="og:description" content="79% dos brasileiros são influenciados pelo digital para fazer compras. Por outro lado, em 5 anos as visitas na loja física caíram 60%, o que indica que a influência digital está aumentando!">
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
		       <h1>Como a indústria usa a inteligência competitiva do e-commerce nas estratégias de trade marketing?</h1>

			<p>79% dos brasileiros são influenciados pelo digital para fazer compras. Por outro lado, em 5 anos as visitas na loja física caíram 60%, o que indica que a influência digital está aumentando!</p>

			<p>Ricardo Totola, Gerente de Trade Marketing Online da Lenovo falou um pouco sobre como a indústria está usando a inteligência competitiva do e-commerce em suas estratégias de trade marketing. Totola explica que o trade marketing surgiu para atender a demanda do varejo offline. “A indústria alimentícia foi a pioneira e a indústria farmacêutica aperfeiçoou a técnica”, relembra. Com a aproximação da indústria com o e-commerce Totola ressalta a necessidade de as duas operações estarem muito bem alinhadas. “No fim precisamos atingir os resultados juntos. A negociação comercial com os revendedores acontece junto com o nosso trabalho”, disse.
		        </p>
		    <p>Veja cinco pilares que sustentam as conversões no Trade Marketing:</p>
		    <p>1. O tamanho do e-commerce. O e-commerce está em franco crescimento e vai dobrar a participação no varejo nos próximos anos. Alguns fatores que vão ajudar nesse crescimento e que são importantes quando você está posicionando o seu produto são:</p>
		    <ul>
		    	<li>Os novos e-shoppers: influenciados por uma maior confiança do consumidor e possível volta do consumo das famílias);</li>
		    	<li>A volta de categorias do e-commerce: como smartphones e eletrodomésticos;</li>
		    	<li>Consumidores mais maduros: diminuição da participação de light users com menor experiência em compras online;</li>
		    	<li>Ascensão dos marketplaces: mais diversidade de itens e revendedores com relação ao custo-benefício mais vantajosa para ambos;</li>
		    	<li>Mais consumidores ativos: aumento no número de pessoas fazendo sua primeira compra online, principalmente nas datas sazonais;</li>
		    </ul>
		    <p>2. O consumidor mudou, o comportamento mudou. O conteúdo precisa ser bom e acessível, mesmo que a conversão não aconteça naquele momento ele vai maturar a compra. Não é a toa que 40% dos consumidores usam a internet apenas para a pesquisa de pré-compra. Até 2021 o grupo de maior crescimento serão os buyers (aqueles que compram regularmente online).</p>
		    <p>3. Sou considerado, logo existo. 50% dos consumidores consideram até 2 marcas somente antes de comprar. Que tipos de ferramenta você deve usar e como usar o e-commerce para gerar compras para a sua marca? Como fazer com que os seus produtos fantásticos aparecerem para o consumidor?</p>
		    <p>4. Quem faz a cabeça, faz resultados (branding + conteúdo). 35% da verba investida no digital é para branding no varejo norte-americano. Essa relevância muda de acordo com a categoria do seu produto. No caso dos tablets, por exemplo, 55% das pessoas consideram a marca antes da compra, no caso das impressoras multifuncionais essa relevância é de 66%.</p>
		    <p>5. Coop is the new black. No caso dos laptops, 80% das pessoas procuram pelos produtos nos buscadores, 50% pesquisam online direto no site dos varejistas, 23% procuram em sites das marcas, 19% em comparadores de preço e 14% em vídeos online.</p>
		    <p>Artigo extraído do site <a href="http://www.ecommercebrasil.com.br">www.ecommercebrasil.com.br</a></p>
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