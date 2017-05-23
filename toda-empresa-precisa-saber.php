<!DOCTYPE html>
<?php session_start();
	if (isset($_SESSION["cadastrado"])==false){
		$_SESSION['cadastrado']=1;
	}
?>
<html lang="pt-br" dir="ltr">
<head>
	<meta charset="UTF-8">
	<title>Insaitx - Toda empresa precisa saber</title>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  	<meta name="robots" content="noindex nofollow">
  	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<?php include "topo.php"; ?>
<section class="conteudo">
	<div class="container">
		<div class="row">
		<div class="col-md-12">
			<h1>toda empresa precisa saber</h1>
		</div>
		  <div class="col-sm-6 col-md-4">
		    <div class="thumbnail">
		      <img src="img/box1.jpg" alt="...">
		      <div class="caption">
		        <h3>Como falir sua empresa em 6 passos</h3>
		        <p></p>
		        <p><a href="como-falir-sua-empresa-em-6passos.php" class="btn btn-default" role="button">Leia mais</a></p>
		      </div>
		    </div>
		  </div>
		    <div class="col-sm-6 col-md-4">
		    <div class="thumbnail">
		      <img src="img/box2.jpg" alt="...">
		      <div class="caption">
		        <h3>O erro que todo empreendedor já cometeu</h3>
		        <p></p>
		        <p><a href="o-erro-que-todo-empreendedor-ja-cometeu.php" class="btn btn-default" role="button">Leia mais</a></p>
		      </div>
		    </div>
		  </div>
		    <div class="col-sm-6 col-md-4">
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
	</div>
</section>
<section class="cadastro">
<div class="container">
<div class="row">
<div class="col-md-12 form">
<h2>fique atualizado</h2>
<p>Cadastre-se aqui para mais conteúdo</p>
<?php include "form.php";?>
</div>
</div>
</div>
</section>
<?php include "footer.php"; ?>
</body>
</html>