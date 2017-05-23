<?php session_start();?>
<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
<head>
	<meta charset="UTF-8">
	<title>Insaitx - Como falir sua empresa em 6 passos</title>
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
		        <h1>Como falir sua empresa em 6 passos</h1>

			    <p>Para obter sucesso na sua empresa é necessário fazer exatamente o OPOSTO!

</p>

			<p>Quer dicas de como combater cada ação descrita abaixo? Faça um download gratuito do no e-book digital.
		        </p>
		    <p><strong> 1. Misture contas pessoais com contas da empresa</strong></p>
		    <p>Uma das grandes consequências de misturar contas pessoais com as contas da empresa é a perda do controle financeiro.</p>
		    <p>Outra consequência desse descontrole é o empresário promover um corte de gastos errados, seja de pessoal ou de projetos importantes para o negócio.</p>
		    <p>Em situações assim, não será possível reinvestir na empresa e, o pior, quando precisar do dinheiro para pagamento de funcionários e fornecedores, para aproveitar uma oportunidade ou para uma urgência, ele pode não estar lá.</p>
		    <p><strong>2. Não cuide de seus funcionários</strong></p>
		    <p>Não dê a devida atenção para seus funcionários: não pague bons salários, não forneça treinamento, mantenha a equipe infeliz. Aqui o empreendedor irá gastar tempo demitindo pessoas, indo atrás de novos funcionários e não tendo tempo para empreender e inovar.</p>
		    <p><strong>3. Complique a vida do cliente</strong></p>
		    <p>Dificulte tudo que envolve o cliente, desde atendimento até a entrega do produto ou serviço. Atendimento para tirar dúvidas, compra e venda, preenchimento de formulários, burocracias desnecessárias... Deixe seu cliente pegar filas, não responda se o cliente fizer uma reclamação, e se o cliente não recebeu o produto, estipule várias regras para que ele possa resolver o problema.</p>
		    <p><strong>4. Feche as portas para parcerias</strong></p>
		    <p>Nunca considere fazer parcerias com empresas que propõem projetos de interesse e benefícios mútuos. Afinal de contas, a sua empresa é o centro do universo e você não precisa de ninguém.</p>
		    <p><strong>5. Nunca melhore seus produtos</strong></p>
		    <p>Nunca melhore seus produtos, não teste, não faça novos experimentos, porque as pessoas devem comprar o seu produto assim como ele é, e o mercado que deve se adequar ao seu produto, mesmo que o concorrente esteja melhorando os produtos dele</p>
		    <p><strong>6. Seja acomodado</strong></p>
		    <p>Seja acomodado, não participe de eventos, não leia artigos, livros sobre seu mercado e seus serviços. Abra a empresa na hora que você quer, toda oportunidade de tirar férias aproveite. Os clientes é quem devem correr atrás de você, mantenha sempre o celular desligado. E por fim, não mantenha suas mídias sociais atualizadas.</p>
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