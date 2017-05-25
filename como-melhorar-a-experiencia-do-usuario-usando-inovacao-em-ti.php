<?php session_start();?>
<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
<head>
	<meta charset="UTF-8">
	<title>Insaitx - Como Melhorar a Experiência do Usuário Usando Inovação em TI</title>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  	<meta name="robots" content="index follow">
    <meta name="description" content="Já faz alguns anos que o comércio eletrônico cresce de forma constante no Brasil. E, como era de se esperar, com o crescimento vêm os desafios — principalmente o de sustentar esse desenvolvimento. É necessário ter uma estratégia que busque a vantagem competitiva.">
	<meta property="og:image" content="http://insaitx.com.br/img/facebook9.png"/>
	<meta property="og:type" content="website"/>
	<meta property="og:locale" content="pt_BR">
	<meta property="og:url" content="http://insaitx.com.br/como-melhorar-a-experiencia-do-usuario-usando-inovacao-em-ti.php.php">
	<meta property="og:title" content="Insaitx - Como Melhorar a Experiência do Usuário Usando Inovação em TI">
	<meta property="og:description" content="Já faz alguns anos que o comércio eletrônico cresce de forma constante no Brasil. E, como era de se esperar, com o crescimento vêm os desafios — principalmente o de sustentar esse desenvolvimento. É necessário ter uma estratégia que busque a vantagem competitiva.">
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
		   	<h1>como melhorar a experiência do usuário usando inovação em TI</h1>
			<p>Já faz alguns anos que o comércio eletrônico cresce de forma constante no Brasil. E, como era de se esperar, com o crescimento vêm os desafios — principalmente o de sustentar esse desenvolvimento. É necessário ter uma estratégia que busque a vantagem competitiva.</p>

			<p>Um dos pilares mais importantes desse crescimento é o uso da tecnologia da informação (TI) — a inovação em TI tem trazido muitas possibilidades ao mundo do comércio online. Com sistemas cada vez mais inteligentes, a TI ajuda a proporcionar uma experiência muito mais interessante ao cliente.
		        </p>
		    <p>Entre as inovações mais importantes estão a melhoria da experiência do usuário, o aumento da eficiência das iniciativas de marketing e o atendimento ao cliente (que começa ainda durante a sua visita à loja virtual e se estende ao pós-venda).</p>
		    <p><strong>Experiência do usuário</strong></p>
		    <p>Quando entra em uma loja virtual, o consumidor está em busca de uma boa experiência. Ele espera encontrar um site amigável que permita localizar os produtos facilmente, ofereça acesso rápido ao carrinho de compras e garanta a segurança das transações. São a comodidade e a facilidade de uso que estimulam a conversão.</p>
		    <p>Uma inovação interessante é a que permite comprar com apenas um clique. É uma opção óbvia para clientes que querem fazer suas compras em segundos. Além disso, evita os altos índices de abandono que ocorrem no processo de chegada ao carrinho de compras.</p>
		    <p>Pesquisas indicam que a cada 100 clientes que visitam uma loja virtual, de 20 a 25 colocam produtos no carrinho de compras. A efetivação da compra, porém, só é feita por dois ou três deles.</p>
		    <p>Pesquisas indicam que a cada 100 clientes que visitam uma loja virtual, de 20 a 25 colocam produtos no carrinho de compras. A efetivação da compra, porém, só é feita por dois ou três deles.</p>
		    <p><strong>Marketing</strong></p>
		    <p>Com o aperfeiçoamento das ferramentas de Big Data, o marketing evoluiu muito: dos sistemas de recomendação aos lembretes de substituição de itens vencidos, passando pela oferta de produtos não relacionados aos comprados anteriormente (mas adequados ao perfil de consumo do cliente).</p>
		    <p>Outra possibilidade é o marketing one to one, que tem propaganda sob medida para cada pessoa. É assim que os produtos que o cliente deseja aparecem magicamente em sites que ele está visitando. Essa técnica, porém, incomoda muitos consumidores e deve ser usada com cautela.</p>
		    <p><strong>Atendimento ao cliente</strong></p>
		    <p>Bom atendimento é fundamental antes mesmo de o cliente fazer qualquer compra. É essencial mantê-lo na loja o máximo de tempo possível, pois isso aumenta as chances da venda. Deve-se, portanto, pensar na aparência da loja e, se possível, incluir uma ferramenta de chat para o esclarecimento de dúvidas em tempo real.</p>
		    <p>No pós-venda, a inovação em TI auxilia na tarefa de aumentar a taxa de fidelização e de ajudar a sanar insatisfações rapidamente (diminuindo a chance de um consumidor descontente fazer propaganda negativa). A massificação das redes sociais permite que o cliente produza estragos consideráveis na reputação de uma marca.</p>
		    <p>Todos os dados da navegação do consumidor ajudam a empresa a melhorar seu relacionamento com ele, compreender seu comportamento e o porquê de abandonar a loja antes de fazer a compra (independentemente do local em que parou).</p>
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