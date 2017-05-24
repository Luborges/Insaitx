<!DOCTYPE html>
<?php session_start();
	if (isset($_SESSION["cadastrado"])==false){
		$_SESSION['cadastrado']=1;
	}
?>
<html lang="pt-br" dir="ltr">
<head>
	<meta charset="UTF-8">
	<title>Insaitx - Transformação Digital</title>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  	<meta name="robots" content="index follow">
	<meta name="description" content="Insaitx é um novo canal de comunicação feito por um time engajado e atuante no mercado nacional.">
	<meta property="og:image" content="http://insaitx.com.br/img/facebook.png"/>
	<meta property="og:type" content="website"/>
	<meta property="og:locale" content="pt_BR">
	<meta property="og:url" content="http://insaitx.com.br/">
	<meta property="og:title" content="Insaitx - Transformação Digital">
	<meta property="og:description" content="Insaitx é um novo canal de comunicação feito por um time engajado e atuante no mercado nacional.">
  	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php include "topo.php"; ?>
<div class="container-fluid">
<div class="row">
	<div class="parallax-window" data-parallax="scroll" data-image-src="img/background.png">
	<div class="container">
		<div class="row">
	 <div class="col-md-12 par">
	 		<p>Transformação digital</p>
			<h1>Como vai a saúde da sua <span>empresa</span>?</h1>
		</div>
	</div>
	</div>
	</div>
</div>
</div>
<section class="conteudo">
	<div class="container">
		<div class="row">
		<div class="col-md-7">
		  <div class="col-sm-6 col-md-12 conteudoHome">
		    <div class="thumbnail">
		      <img src="img/ecommercebox4.png" alt="..." class="img-responsive">
		      <div class="caption">
		        <h3>Bing, vale a pena investir?</h3>
		        <p class="text">Para quem não sabe, o Bing é o atual buscador da Microsoft, substituto do Live Search, que foi criado para competir com os grandes Google e Yahoo.</p>
		        <p class="button"><a href="bing-vale-a-pena-investir.php" class="btn btn-default" role="button">Leia mais</a></p>
		      </div>
		    </div>
		  </div>
		    <div class="col-sm-6 col-md-12 conteudoHome">
		    <div class="thumbnail">
		      <img src="img/ecommercebox3.png" alt="...">
		      <div class="caption">
		        <h3>Como a indústria usa a inteligência competitiva do e-commerce nas estratégias de trade marketing?</h3>
		        <p class="text">79% dos brasileiros são influenciados pelo digital para fazer compras. Por outro lado, em 5 anos as visitas na loja física caíram 60%, o que indica que a influência digital está aumentando!</p>
		        <p class="button"><a href="como-a-industria-usa-a-inteligencia-competitiva-do-e-commerce-nas-estrategias-de-trade-marketing.php" class="btn btn-default" role="button">Leia mais</a></p>
		      </div>
		    </div>
		  </div>
		  <div class="col-sm-6 col-md-12 conteudoHome">
		    <div class="thumbnail">
		      <img src="img/ecommercebox2.png" alt="...">
		      <div class="caption">
		        <h3>e-commerce</h3>
		        <p class="text">Mais de 700.000 pessoas são empregadas no setor que faturou R$53 BI em 2016<br/>

				Para o ano atual, a meta é somar outros R$7 bilhões ao montante, totalizando R$60BI - um dos maiores mercados da economia nacional. Os dados são da ABComm (Associação Brasileira de Comércio Eletrônico). Eles afirmam ainda um número recorde na casa dos 200 milhões de pedidos de compras feitos online pelo país.</p>
		        <p class="button"><a href="ecommerce.php" class="btn btn-default" role="button">Leia mais</a></p>
		      </div>
		    </div>
		  </div>
		    <!--<div class="col-sm-6 col-md-4">
		    <div class="thumbnail">
		      <img src="img/box3.jpg" alt="...">
		      <div class="caption">
		        <h3>Maneiras de aumentar seu faturamento</h3>
		        <p></p>
		        <p><a href="#" class="btn btn-default" role="button">Leia mais</a></p>
		      </div>
		    </div>
		  </div>
		  <!--<div class="col-sm-6 col-md-4">
		    <div class="thumbnail">
		      <img src="img/text.jpg" alt="...">
		      <div class="caption">
		        <h3>Thumbnail label</h3>
		        <p>...</p>
		        <p><a href="#" class="btn btn-default" role="button">Leia mais</a></p>
		      </div>
		    </div>
		  </div>
		    <div class="col-sm-6 col-md-4">
		    <div class="thumbnail">
		      <img src="img/text.jpg" alt="...">
		      <div class="caption">
		        <h3>Thumbnail label</h3>
		        <p>...</p>
		        <p><a href="#" class="btn btn-default" role="button">Leia mais</a></p>
		      </div>
		    </div>
		  </div>
		    <div class="col-sm-6 col-md-4">
		    <div class="thumbnail">
		      <img src="img/text.jpg" alt="...">
		      <div class="caption">
		        <h3>Thumbnail label</h3>
		        <p>...</p>
		        <p><a href="#" class="btn btn-default" role="button">Leia mais</a></p>
		      </div>
		    </div>
		  </div>
		  <div class="col-sm-6 col-md-4">
		    <div class="thumbnail">
		      <img src="img/text.jpg" alt="...">
		      <div class="caption">
		        <h3>Thumbnail label</h3>
		        <p>...</p>
		        <p><a href="#" class="btn btn-default" role="button">Leia mais</a></p>
		      </div>
		    </div>
		  </div>
		    <div class="col-sm-6 col-md-4">
		    <div class="thumbnail">
		      <img src="img/text.jpg" alt="...">
		      <div class="caption">
		        <h3>Thumbnail label</h3>
		        <p>...</p>
		        <p><a href="#" class="btn btn-default" role="button">Leia mais</a></p>
		      </div>
		    </div>
		  </div>
		    <div class="col-sm-6 col-md-4">
		    <div class="thumbnail">
		      <img src="img/text.jpg" alt="...">
		      <div class="caption">
		        <h3>Thumbnail label</h3>
		        <p>...</p>
		        <p><a href="#" class="btn btn-default" role="button">Leia mais</a></p>
		      </div>
		    </div>
		  </div>-->
			</div>
<aside class="cadastro col-md-5 form">
<div class="cadastro">
<h2>fique atualizado</h2>
<p>Cadastre-se aqui para mais conteúdo</p>
<?php include "form.php";?>
</div>
</aside>
		</div>
	</div>
</section>

<?php include "footer.php"; ?>
</body>
</html>