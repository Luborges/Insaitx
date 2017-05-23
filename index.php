<!DOCTYPE html>
<?php session_start();
	if (isset($_SESSION["cadastrado"])==false){
		$_SESSION['cadastrado']=1;
	}
?>
<html lang="pt-br" dir="ltr">
<head>
	<meta charset="UTF-8">
	<title>Insaitx</title>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  	<meta name="robots" content="noindex nofollow">
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
		<div class="col-md-8">
		  <div class="col-sm-6 col-md-12 conteudoHome">
		    <div class="thumbnail">
		      <img src="img/box1.jpg" alt="...">
		      <div class="caption">
		        <h3>Como falir sua empresa em 6 passos</h3>
		        <p>Para obter sucesso na sua empresa é necessário fazer exatamente o OPOSTO!</p>
		        <p class="button"><a href="como-falir-sua-empresa-em-seis-passos.php" class="btn btn-default" role="button">Leia mais</a></p>
		      </div>
		    </div>
		  </div>
		    <div class="col-sm-6 col-md-12 conteudoHome">
		    <div class="thumbnail">
		      <img src="img/box2.jpg" alt="...">
		      <div class="caption">
		        <h3>O erro que todo empreendedor já cometeu</h3>
		        <p>O Maior erro quando se está no comando de um negócio é fazer aquilo que você acha que está certo.

Para o ano atual, a meta é somar outros R$7 bilhões ao montante, totalizando R$60BI - um dos maiores mercados da economia nacional. Os dados são da ABComm (Associação Brasileira de Comércio Eletrônico). Eles afirmam ainda um número recorde na casa dos 200 milhões de pedidos de compras feitos online pelo país.</p>
		        <p class="button"><a href="o-erro-que-todo-empreendedor-ja-cometeu.php" class="btn btn-default" role="button">Leia mais</a></p>
		      </div>
		    </div>
		  </div>
		  <div class="col-sm-6 col-md-12 conteudoHome">
		    <div class="thumbnail">
		      <img src="img/ecommercebox2.png" alt="...">
		      <div class="caption">
		        <h3>e-commerce</h3>
		        <p>Mais de 700.000 pessoas são empregadas no setor que faturou R$53 BI em 2016<br/>

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
<aside class="cadastro col-md-4 form">
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