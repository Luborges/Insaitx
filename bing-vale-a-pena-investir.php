<?php session_start();?>
<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
<head>
	<meta charset="UTF-8">
	<title>Insaitx -  Bing, vale a pena investir?</title>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  	<meta name="robots" content="index follow">
  <meta name="description" content="Para quem não sabe, o Bing é o atual buscador da Microsoft, substituto do Live Search, que foi criado para competir com os grandes Google e Yahoo.">
	<meta property="og:image" content="http://insaitx.com.br/img/facebook7.png"/>
	<meta property="og:type" content="website"/>
	<meta property="og:locale" content="pt_BR">
	<meta property="og:url" content="http://insaitx.com.br/bing-vale-a-pena-investir.php">
	<meta property="og:title" content="Insaitx - Bing, vale a pena investir?">
	<meta property="og:description" content="Para quem não sabe, o Bing é o atual buscador da Microsoft, substituto do Live Search, que foi criado para competir com os grandes Google e Yahoo.">
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
		    <h1>Bing, vale a pena investir?</h1>

			<p>Para quem não sabe, o Bing é o atual buscador da Microsoft, substituto do Live Search, que foi criado para competir com os grandes Google e Yahoo.</p>

			<p>O Bing, poucos dias após seu lançamento, ficou em 2º nas buscas nos Estados Unidos, se posicionando à frente do Yahoo e atrás do Google e hoje representa aproximadamente 5,3 bilhões de dólares ao ano para a Microsoft. (ref: <a href="https://goo.gl/gsHUxW">https://goo.gl/gsHUxW</a>)
		    </p>
		    <p>No Brasil, o Bing representa aproximadamente 10% de todas as buscas realizadas, ficando atrás do gigante Google. Mas afinal, vale a pena investir do Bing? A resposta é sim!</p>

		    <p>O Bing, por mais que represente uma pequena porcentagem de buscas na internet, vem se mostrando um poderoso motor de buscas, se destacando cada vez mais no meio online.</p>
		    <p>Porém como o próprio Google, o Bing tem seus prós e contras. Abaixo é possível ver alguns comparativos entre os buscadores:
 			</p>
 			<p><img src="img/bing-vale-a-pena-investir.png" alt="..."></p>
 			<p>Mas poxa, vou ter que criar as mesmas campanhas que fiz no Google AdWords, só que no Bing agora? Que trabalheira!</p>
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
		    <p>Calma! O Bing nos abençoou com a possibilidade de importar as campanhas que você tem no AdWords, acelerando assim todo o processo e nos poupando tempo.</p>
 			<p>Utilize, antes de iniciar qualquer campanha, a ferramenta de buscas de palavras-chave do Bing. Assim você pode ter uma noção do volume de buscas por determinadas palavras, média do CPC da mesma, entre outras informações.</p>
 			<p>Para utilizar essa ferramenta, basta acessar o <a href='https://secure.azure.bingads.microsoft.com/'>Bing Ads</a> ir em Ferramentas > Pesquisar Palavras-chave e inserir o termo que deseja buscar.</p>
 			<p>Por fim, acreditamos que vale a pena investir no Bing Ads pois:</p>
 			<ul>
 				<li>A concorrência ainda é baixa;</li>
 				<li>O investimento pode ser baixo</li>
 				<li>O CPC também ainda é baixo, ficando entre R$ 0,10 e R$ 0,15;</li>
 				<li>Possibilita anúncios na rede de pesquisa e Display, porém limitando o display apenas à Skype, Xbox, Outlook, MSN e Windows;</li>
 				<li>Permite a importação das campanhas do AdWords;</li>
 				<li>Possui uma taxa de conversão mais elevada.</li>
 			</ul>
 			<p><strong>Dica extra</strong></p>
 			<p>Não utilize apenas palavras-chave específicas, pois pode ocorrer de ter pouquíssimas buscas ou até nenhuma.</p>
 			<p>Use e abuse de palavras-chave mais amplas para aproveitar a baixa concorrência, o baixo custo por clique, e para ter certeza que todo o público relacionado ao seu produto ou serviço seja impactado pelo seu anúncio.</p>
 			<p>Artigo extraído do site <a href='http://www.souhibrido.com.br'>www.souhibrido.com.br</a></p>

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