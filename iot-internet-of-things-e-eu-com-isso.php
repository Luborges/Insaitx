<?php session_start();?>
<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
<head>
	<meta charset="UTF-8">
	<title>Insaitx - IOT: Internet Of Things. E eu com isso?</title>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  	<meta name="robots" content="index follow">
    <meta name="description" content="Tá certo que carros voadores, teletransporte, celulares na própria pele ainda estão bem longe de se tornarem parte do nosso dia (será?). Mas, uma coisa é certa, cada vez mais seremos bombardeados e cercados pela 'internet das coisas'">
	<meta property="og:image" content="http://insaitx.com.br/img/facebook14.png"/>
	<meta property="og:type" content="website"/>
	<meta property="og:locale" content="pt_BR">
	<meta property="og:url" content="http://insaitx.com.br/iot-internet-of-things-e-eu-com-isso.php">
	<meta property="og:title" content="Insaitx - IOT: Internet Of Things. E eu com isso?">
	<meta property="og:description" content="Tá certo que carros voadores, teletransporte, celulares na própria pele ainda estão bem longe de se tornarem parte do nosso dia (será?). Mas, uma coisa é certa, cada vez mais seremos bombardeados e cercados pela 'internet das coisas'">
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
		   	<h1>IOT: Internet Of Things. E eu com isso?</h1>
		   	<p>Tá certo que carros voadores, teletransporte, celulares na própria pele ainda estão bem longe de se tornarem parte do nosso dia (será?). Mas, uma coisa é certa, cada vez mais seremos bombardeados e cercados pela "internet das coisas". </p>

			<p>Não estamos falando aqui do seu super smartphone que faz tudo, ou do seu relógio que também faz ligação. A conversa aqui é de geladeiras que avisam quando estão esvaziando, torradeiras que preparam aquele pão quentinho antes mesmo de você sair da cama, chuveiros que preparam seu banho na temperatura ideal, antes mesmo de você chegar ao banheiro. Além de um mundo de outras possibilidades.
		        </p>
		        <p>Além de fatores como, comodidade, redução de custos e tempo desnecessários, maior segurança nas transações e validações, a IOT ainda nesta década (#spoiler) irá mudar definitivamente nossas vidas. Fatores como:</p>
		        <ol>
		        	<li>ROI (retorno sobre investimento) eficiente: os custos envolvidos em desenvolvimento de alta tecnologia, se mostram ao longo do tempo, eficazes para a retenção dos clientes;</li>
		        	<li>criação de conta (login) obrigatória - infelizmente, não há muito o que se fazer nesse caso;</li>
		        	<li>Custa caro, mas vale a pena! Implantação, manutenção e integração com as tecnologias existentes, acaba se tornando vantajoso às empresas que apostam nessa onda, desde os momentos atuais;</li>
		        	<li>Um leque infinito de possibilidades, mas que tem muito ainda para evoluir quanto às vulnerabilidades que abre ao ecossistema como um todo - mais facilmente, hackers poderão ter acesso a controles de gadgets, contas, senhas etc.</li>
		        </ul>
		    <p>Resumindo, a IOT não busca apenas facilitar sua vida diária com equipamentos mais modernos, mas sim, uma maior compreensão dos hábitos através da captura de dados das pessoas que as possuem. Cada vez mais, entender o perfil do cliente será a maneira mais eficiente para se manter vivo num mercado ultra competitivo.</p>
		    <p>E se os gadgets puderem fazer isso enquanto sua banheira prepara seu banho com as condições de sua preferência, por que não?</p>
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