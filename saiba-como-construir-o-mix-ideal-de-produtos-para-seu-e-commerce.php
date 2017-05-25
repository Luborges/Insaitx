<?php session_start();?>
<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
<head>
	<meta charset="UTF-8">
	<title>Insaitx - Saiba como construir o mix ideal de produtos para seu e-commerce</title>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  	<meta name="robots" content="index follow">
    <meta name="description" content="É sabido que ser assertivo no mix produtos do seu comércio eletrônico, é fundamental para a boa saúde do negócio. Porém, mesmo assim, muitas pessoas que pensam em ingressar nesse mercado, não sabem exatamente como dosar os produtos que são oferecidos.">
	<meta property="og:image" content="http://insaitx.com.br/img/facebook12.png"/>
	<meta property="og:type" content="website"/>
	<meta property="og:locale" content="pt_BR">
	<meta property="og:url" content="http://insaitx.com.br/saiba-como-construir-o-mix-ideal-de-produtos-para-seu-e-commerce.php">
	<meta property="og:title" content="Insaitx - Saiba como construir o mix ideal de produtos para seu e-commerce">
	<meta property="og:description" content="É sabido que ser assertivo no mix produtos do seu comércio eletrônico, é fundamental para a boa saúde do negócio. Porém, mesmo assim, muitas pessoas que pensam em ingressar nesse mercado, não sabem exatamente como dosar os produtos que são oferecidos.">
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
		   	<h1>Saiba como construir o mix ideal de produtos para seu e-commerce</h1>
		   	<p>É sabido que ser assertivo no mix produtos do seu comércio eletrônico, é fundamental para a boa saúde do negócio. Porém, mesmo assim, muitas pessoas que pensam em ingressar nesse mercado, não sabem exatamente como dosar os produtos que são oferecidos.</p>

			<p>Ok? Mas e como eu consigo brigar com os grandes players de mercado (empresas já consolidadas com milhões de usuários e volume expressivo de faturamento)?
			Essa é a pergunta de um milhão de dólares! Mas não se preocupe, seguindo essas dicas, os resultados finais podem ser melhores do que o esperado:
		        </p>
		        <ul>
		        	<li>Quanto maior o mix de produtos, melhor! Claro que, não adianta querer abraçar o mundo, se não você corre o risco de ter produtos encalhados na sua “prateleira”. Por isso, é bom ter mente que: produtos segmentados, mas com a maior oferta possível de variedade;</li>
		        	<li>Varie seu mix. Como assim? Significa colocar mais ofertas de preços, fornecedores, marcas dentro de um mesmo segmento. Portanto, se você tem um e-commerce de calçados femininos, use e abuse dos mais variados modelos, cores, tamanhos, preços e públicos. Só não vale incluir ali uma “oferta de som automotivo”. Percebeu a jogada? Por mais atrativo que possa ser em outros sites, foque no que você faz bem!</li>
		        	<li>Migrações sensatas e cautelosas são bem vindas. Por exemplo, você está tendo sucesso nas vendas de peças femininas, mas agora quer ampliar o leque de produtos. Ótimo! Parta então para acessórios, sapatos, bolsas, colares etc. Não pule etapas e nem seja apressado demais. Querer abraçar o mundo pode não funcionar e ser muito arriscado;</li>
		        </ul>
		    <p>Já vendeu? Está tendo sucesso? O feedback dos clientes é positivo? O(s) produto(s) tem recorrência de venda? Tem medido a concorrência? E a divulgação? Como anda?</p>
		    <p>Todas essas perguntas devem acompanhar a vida do empreendedor, seja ele no mundo real ou, principalmente, no virtual onde as mudanças são mais drásticas e somente os mais preparados sobrevivem.</p>
		    <p>Boas vendas!</p>
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