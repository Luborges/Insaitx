<?php session_start();?>
<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
<head>
	<meta charset="UTF-8">
	<title>Insaitx -  Boleto no e-commerce funciona?</title>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  	<meta name="robots" content="index follow">
  <meta name="description" content="Talvez você já tenha ouvido falar que o boleto é forma muito forte de pagamento aqui no Brasil. Estima-se que cerca de 50% das vendas geradas em e-commerce é feita por meio dele.">
	<meta property="og:image" content="http://insaitx.com.br/img/facebook8.png"/>
	<meta property="og:type" content="website"/>
	<meta property="og:locale" content="pt_BR">
	<meta property="og:url" content="http://insaitx.com.br/boleto-no-e-commerce-funciona.php">
	<meta property="og:title" content="Insaitx - Boleto no e-commerce funciona?">
	<meta property="og:description" content="Talvez você já tenha ouvido falar que o boleto é forma muito forte de pagamento aqui no Brasil. Estima-se que cerca de 50% das vendas geradas em e-commerce é feita por meio dele.">
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
		    <h1>Boleto no e-commerce funciona?</h1>

			<p>Talvez você já tenha ouvido falar que o boleto é forma muito forte de pagamento aqui no Brasil. Estima-se que cerca de 50% das vendas geradas em e-commerce é feita por meio dele.</p>

			<p>Um ponto que identificamos em vários clientes é que dependendo do segmento de mercado que ele atua, vendendo para classe A, classe B, classe C e classe D, é que quanto menor a classe, maior é a taxa de boleto emitida.
		    </p>
		    <p>Estávamos ouvindo a história de uma pessoa que é de um grupo de empresários, em que ela trabalha com o público de baixa renda, e quase 80% das vendas do produto dela, que é um curso online, são desse meio. Ou seja, se você trabalha com e-commerce, se você trabalha com um produto digital, uma das principais coisas que você tem que ter é a recuperação de boleto.</p>

		    <p><strong>O que é a recuperação de boleto?</strong></p>

		    <p>Ela acontece no Brasil da seguinte forma: a gente acaba dando uma quantidade de tempo para a pessoa pagar aquela cobrança. Então, compramos um curso de R$800 ou compramos um produto de R$500 e que tem o vencimento para daqui 3 ou 4 dias.</p>
		    <p>O que acontece? Primeiro, algumas pessoas não vão achar a forma de imprimir o documento (talvez não tenham impressora em casa), podem esquecer de pagá-lo e, com tudo isso, você vai perder vendas.
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
 			<p>Tem um caso de um cliente nosso que, há uns 4 anos atrás perguntamos, se o Analytics não estava refletindo o que ele colocava. Ele respondeu que não porque 25% das vendas dele eram por meio de boleto e que quase 70% delas eram perdidas. Ou seja, as pessoas falaram que querem comprar, fizeram aquele mega cadastro no e-commerce e, mesmo assim, o cliente está perdendo 70% dos boletos, eles não estão sendo pagos. É nesse momento que entra o processo de recuperação de boleto, que consiste em algumas etapas.</p>
 			<p><strong>Conheça o passo a passo da recuperação de boletos para aplicar no seu e-commerce</strong></p>
 			<p>Primeiro passo: você pode usar o fluxo de nutrição para pessoas que geram boleto. E o que seria esse fluxo de nutrição? Você recebe uma informação que a pessoa gerou boleto e envia para o e-mail dela “Oi, tudo bem? Olha, aqui tem um link para o seu boleto”. Porque se a pessoa fechou o navegador ou não conseguiu imprimir o boleto, ela vai pegá-lo através do link do próprio e-mail.</p>
 			<p>Segundo passo: você pode perguntar para a pessoa depois de um dia: “Você viu que o boleto foi gerado? Faltam apenas dois dias para o vencimento. Você teve alguma dúvida? Conseguiu pagar o boleto? Você conseguiu fazer a impressão? Deu tudo certo?” E a pessoa pode responder ou não.</p>
 			<p>Terceiro passo e o fulminante: você pode enviar “Oi, tudo bem? O seu boleto vence em poucas horas, ou em 24 horas. Eu gostaria de saber se você fez o pagamento. Se fez, mande o comprovante para mim que eu posso liberar a sua venda”. Se for um e-commerce pequeno, óbvio, você pode fazer isso, ou se você tiver produto digital é uma forma de já ativar a pessoa na sua plataforma.</p>
 			<p>Quarto passo: em plataformas digitais, eles liberam a entrada da pessoa mesmo com o boleto não pago, para pelo menos uma aula. Aquela pessoa se vê inserida, ela acessa a plataforma, faz uma aula de verdade com você, e pensa “Ele me deu uma aula, preciso pagar o boleto”.</p>
 			<p>Essas são algumas das etapas que fundamentais para você conseguir recuperar a pessoa que gerou o documento e não deixar dinheiro na mesa.</p>
 			<p><strong>Dicas extras para usar o boleto no seu e-commerce</strong>.</p>
 			<p>A utilização de Whatsapp ou de ligação de telefone maximizam muito a recuperação de boleto. Então, por exemplo, se você pegar a pessoa que gerou o boleto, fazer uma ligação para ela dizendo “Oi, fulano. Tudo bem? Você pagou o boleto? Tem alguma dúvida?”</p>
 			<p>Ou simplesmente pelo WhatsApp, você pode pedir para a pessoa te adicionar. Se ela aceitar, você pode mandar uma mensagem “Oi, tudo bem? Aqui é do atendimento tal. Eu vi que você gerou um boleto. Você chegou a pagá-lo? Ficou com alguma dúvida, conseguiu imprimir, precisa de mais tempo?”</p>
 			<p>Ou seja, precisa ser insistente e ficar em cima dessas pessoas que já geraram a intenção de compra.</p>
 			<p>E, o último ponto, que está voltando aos poucos, são os SMS, sistemas que automaticamente avisam a pessoa que o boleto foi gerado e dizem quanto tempo ela tem até o vencimento e, em alguns casos, vêm até com o código de barras na própria mensagem.</p>
 			<p>Essas são formas que você pode implementar no seu negócio, seja em um negócio digital, cursos, produtos digitais ou, ainda, um e-commerce que envolve essa questão de geração de boleto.</p>
 			<p>Artigo extraído do site <a href='http://www.ecommercebrasil.com.br'>www.ecommercebrasil.com.br</a></p>
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