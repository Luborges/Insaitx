<?php session_start();?>
<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
<head>
	<meta charset="UTF-8">
	<title>Insaitx - Carrinho cheio….Carrinho vazio. O que aconteceu?</title>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  	<meta name="robots" content="index follow">
    <meta name="description" content="O ciclo é sempre muito parecido: cliente entra no seu site, olha o produto, lê as reviews, se interessa na compra, faz o cálculo do frete, coloca o produto no carrinho e “na hora de marcar o gol”, desiste da compra. Ou pior, acaba comprando no concorrente!">
	<meta property="og:image" content="http://insaitx.com.br/img/facebook13.png"/>
	<meta property="og:type" content="website"/>
	<meta property="og:locale" content="pt_BR">
	<meta property="og:url" content="http://insaitx.com.br/carrinho-cheio-carrinho-vazio-o-que-aconteceu.php">
	<meta property="og:title" content="Insaitx - Saiba como construir o mix ideal de produtos para seu e-commerce">
	<meta property="og:description" content="O ciclo é sempre muito parecido: cliente entra no seu site, olha o produto, lê as reviews, se interessa na compra, faz o cálculo do frete, coloca o produto no carrinho e “na hora de marcar o gol”, desiste da compra. Ou pior, acaba comprando no concorrente!">
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
		   	<h1>Carrinho cheio... Carrinho vazio. O que aconteceu?</h1>
		   	<p>O ciclo é sempre muito parecido: cliente entra no seu site, olha o produto, lê as reviews, se interessa na compra, faz o cálculo do frete, coloca o produto no carrinho e “na hora de marcar o gol”, desiste da compra. Ou pior, acaba comprando no concorrente!</p>

			<p>Esse é o pior pesadelo de todo empresário do e-commerce. Pesquisas apontam que 69% das vezes o ritual 'maligno' acontece, de acordo com o Baymard Institute. E como evitá-lo?
		        </p>
		        <p>Em termos técnicos, o UX ("user experience") é O que as empresas tem que ter em mente, se quiserem prover uma boa experiência ao seu consumidor. Do começo ao fim do processo de compra, UX é fundamental. Pensar com a cabela do próprio cliente; como ele iria preferir esse caminho; quais ferramentas iriam ajudá-lo; quais validações podem ser eliminadas, sem comprometer a segurança do site. Isso é o que determina se esse cliente será apenas um interessado na compra ou realmente, um cliente.</p>
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
	echo "<h2>Para terminar de ler o artigo cadastre-se agora</h2>";
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
	echo "<h2>Para terminar de ler o artigo cadastre-se agora</h2>";
	echo "<h2>fique atualizado</h2>";
	echo "<p>Cadastre-se aqui para mais conteúdo</p>";
	include "form.php";
	echo "</div>";
	echo "</div>";
	echo "</div>";
	echo "</section>";
}
else{
	echo '<section class="noticia">
	<div class="container">
		<div class="row">
		  <div class="col-md-8 col-md-8 col-md-offset-2">
		        <p>Podemos elencar 5 razões principais para o abandono da compra em um momento tão importante: o pagamento:</p>
		        <ol>
		        	<li>custos inesperados de frete;</li>
		        	<li>criação de conta (login) obrigatória - infelizmente, não há muito o que se fazer nesse caso;</li>
		        	<li>"apenas olhando" - o que vale nas lojas físicas, também acontece no mundo virtual;</li>
		        	<li>credibilidade do sistema de pagamento;</li>
		        	<li>chekouts longos e/ou confusos.</li>
		        </ul>
		    <p>Como então fazer com que isso não se torne um risco, e sim uma solução viável ao seu cliente?</p>
		    <p>Pagamentos mobiles (sim! Seu site tem que ser responsivo); uma navegabilidade intuitiva e clara, para facilitar a vida da pessoa do outro lado da tela, seja ela mobile ou não; um atendimento eficiente, caso ocorra algum problema no processo; credibilidade: seu cliente precisa se sentir seguro para informar os dados de um cartão de crédito ou querer emitir um boleto antes de despender de recursos.</p>
		    <p>Gostou das dicas? Tem algo que você acrescentaria aqui? Escreva para nós! Estamos aqui para te ouvir.</p>
		  </div>
		</div>
	</div>
</section>
';
}
?>

<?php include "footer.php"; ?>
</body>
</html>