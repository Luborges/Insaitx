<!DOCTYPE html>
<!--[if lte IE 9]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 9]><!-->
<?php session_start();
    if (isset($_SESSION["cadastrado"])==false){
        $_SESSION['cadastrado']=1;
    }
?>
<html class="no-js">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<title>Insaitx - Transformação Digital</title>
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="description" content="">
<meta content="yes" name="apple-mobile-web-app-capable" />
<meta name="viewport" content="minimum-scale=1.0, width=device-width, maximum-scale=1, user-scalable=no" />
<meta name="robots" content="index follow">

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/animations.css">
<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/prettyPhoto.css">
<link rel="stylesheet" href="assets/css/main.css">

<script async src="assets/js/lib/modernizr-2.6.2-respond-1.1.0.min.js"></script>

<script type="text/javascript">
function abrirPopup(ebook_name){

    sessionStorage.setItem("sent", ebook_name); 
    var novaJanela = window.open('pop-up.php?yourKey='+ebook_name, 'name', 'height=500,width=600');

}

</script>
</head>
<body class="ebook">

<?php include "topo.php"; ?>

<header class="doc-header animatedParent">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 text-center">
                <figure class="mt-40 animated fadeInLeft"><img src="assets/demo-data/ebook.png" alt="/"></figure>
            </div>
            <div class="col-sm-6">
                <!--<p>Transformação digital</p>-->
                <h1 class="mb-35">Como anda a saúde da sua <span>empresa</span>? Precisa de ajuda para:</h1>
                <ul>
                    <li>Passar por uma transição de modelo de <br />negócio</li>
                    <li>Entender a importância da integração entre <br />e-mail marketing e CRM</li>
                    <li>Compreender o Empreendedorismo digital <br />atualmente</li>
                    <li>Integração marketplace e e-commerce e as <br />vantagens do processo</li>
                    <li>Otimizar o tempo por meio das ferramentas<br />tecnológicas</li>
                </ul>
                <a href="#downloads" class="btn mt-30">Confira nossos e-books</a>
            </div>
        </div>
    </div>
</header>

<div class="promo">
    <div class="container">
        <span class="pull-left">Aprenda as MELHORES dicas que separamos para você </span>
        <a href="#downloads" class="btn pull-right">Baixe Agora</a>
    </div>
</div>
  
<!--<div class="download-bar">
    <div class="container">
        <div class="row">
            <div class="col-sm-5">
                <div class="info">
                    <i class="fa fa-download"></i>
                    <div class="pad">
                        <h5>Download GRÁTIS do E-book Completo </h5>
                        <p>Como fazer uma transição de modelo de negócio bem sucedida com tantos obstáculos no mercado?</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-md-offset-1 col-sm-7">
                <div class="search">
                    <form>
                        <input id='email' name='email' placeholder="Email" type="email">
                        <button class="btn btn-blue"><a href="form.php">Baixar Agora</a></button>
                    </form>
                </div>
            </div>
        </div>
    </div>    
</div>-->
    
<section class="about-us">
    <div class="container">
        <div class="sec-head text-center">
            <h2>Você vai Aprender</h2>
            <hr>
            <p>O modelo de negócio que se escolhe para a empresa determina a forma como as operações vão se desenrolar.</p>
        </div><!--//head-->
        <div class="row animatedParent" data-sequence="500">
            <div class="col-sm-10 col-sm-offset-1">
                <div class="wrapper">
                    <div class="about left left-t animated fadeInLeft" data-id="1">
                        <h5>Estrutura escolhida</h5>
                        <p>direciona a empresa de uma forma que não se pode mais voltar atrás.</p>
                    </div>
                    <div class="about left left-b animated fadeInLeft" data-id="2">
                        <h5> Promover Mudanças</h5>
                        <p>atender movimentações de mercado, conjunturas econômicas, ou mesmo novas demandas.</p>
                    </div>
                    <figure class="text-center"><img src="assets/demo-data/m2.png" alt="/"></figure>
                    <div class="about text-right right right-t animated fadeInRight" data-id="3">
                        <h5>pesquisa mercado</h5>
                        <p>Para melhor atender o público-alvo, as empresas devem contar com informações relevantes</p>
                    </div>
                    <div class="about text-right right right-b animated fadeInRight" data-id="4">
                        <h5>Empresas em ascensão</h5>
                        <p>o ideal é se inspirar nas ideias não copiá-las integralmente</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    
    
<div class="about-author animatedParent" data-sequence="500">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="visual text-center">
                    <h4>A INSAITX</h4>
                    <figure class="animated slideInLeft" data-id="1"><img src="assets/demo-data/t1.png" alt="/"></figure>
                    <a href="#" class="title">Estamos Pronto para Ajudar</a>
                    <span>Entre em contato</span>
                </div>
            </div>
            <div class="col-sm-6 col-sm-offset-2">
                <div class="detail animated fadeInRight" data-id="2">
                    <h5>Diferencial</h5>
                    <p>Hoje, somos referência em transformação digital através de um método próprio, o High Performance Team, que ajuda empresas a desenvolver projetos e ideias de negócio de forma mais eficiente, aumentando suas chances de sucesso em mais de 60%, quando comparadas com modelos tradicionais.  </p>
                    <h5 class="mt-25">Missão</h5>
                    <p>Inovação, tecnologia e empreendedorismo fazem parte de quem somos.  Queremos ser uma empresa útil e funcional. Útil porque possuímos serviços e produtos necessários. Funcional porque nossos serviços e produtos realmente solucionam e representam valor agregado ao Cliente.</p>
                </div>
            </div>
        </div>
    </div>    
</div>
      
<section class="our-books">
    <div class="container">
        <div class="sec-head text-center">
            <h2 id="downloads">E-Books Coleção</h2>
            <hr>
            <p>Gostamos de ajudar nossos clientes a obter informações de qualidade - Confira nossos E-books.</p>
        </div><!--//head-->
        <div class="row">
            <div class="col-md-3 col-sm-4">
                <div class="book">
                    <figure style="background-image: url();">
                      <figcaption>
                        <h5>Como um sistema ERP pode ajudar na gestão de um <br>
                          E-Commerce?<br>
                        <img src="assets/demo-data/m4.png" alt=""/></h5>
                            <span class="chapter"><a href="#" onClick="abrirPopup('ebook-erp.pdf');">Download</a></span>
                        </figcaption>
                    </figure>
                </div>
            </div>
            <div class="col-md-3 col-sm-4">
                <div class="book">
                  <figure style="background-image: url();">
                      <figcaption>
                            <h5>Marketplace e loja virtual: quais as vantagens do processo? </h5>
                            <p><img src="assets/demo-data/m5.png" alt=""/></p>
                            <span class="chapter"><a href="#" onClick="abrirPopup('ebook-vantagens.pdf');">Download</a></span>
                      </figcaption>
                    </figure>
                </div>
            </div>
            <div class="col-md-3 col-sm-4">
                <div class="book">
                  <figure style="background-image: url();">
                        <figcaption>
                            <h5>5 dicas para passar por uma transição de modelo de negócio</h5>
                            <p><img src="assets/demo-data/m6.png" alt=""/></p>
                            <span class="chapter"><a href="#" onClick="abrirPopup('ebook-5dicas.pdf');">Download</a></span>
                    </figcaption>
                    </figure>
                </div>
            </div>
          <div class="col-md-3 col-sm-4">
                <div class="book">
                  <figure style="background-image: url();">
                        <figcaption>
                            <h5>A importância da integração entre e-mail marketing e CRM</h5>
                            <p><img src="assets/demo-data/ebook-crm-pq.png" alt=""/></p>
                            <span class="chapter"><a href="#" onClick="abrirPopup('ebook-crm.pdf');">Download</a></span>
                    </figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </div>
</section>

<!--<div class="promo">
    <div class="container">
        <span class="pull-left">Aprenda as MELHORES dicas que separamos para você </span>
        <a href="#" class="btn pull-right">Baixe Agora</a>
    </div>
</div>-->

<!--<section class="testimonials clearfix">
    <div class=" clearfix">
        <div class="wrapper clearfix animatedParent" data-sequence="500">
            <h2>Depoimentos</h2>
            <hr>
            <div class="testimonial animated fadeInRight" data-id="1">
                <figure><img src="assets/demo-data/t2.png" alt="/"></figure>
                <div class="pad">
                    <h5>Roberta Praça</h5>
                    <p>Realmente foi o que estava precisando no momento da mudança digital da minha empresa.</p>
                </div>
            </div>
            <div class="testimonial animated fadeInRight" data-id="2">
                <figure><img src="assets/demo-data/t3.png" alt="/"></figure>
                <div class="pad">
                    <h5>Gustavo Ribeiro</h5>
                    <p>De uma forma rápida atingi meu objetivo  </p><br>

                </div>
            </div>
            <div class="testimonial animated fadeInRight" data-id="3">
                <figure><img src="assets/demo-data/t4.jpg" alt="/"></figure>
                <div class="pad">
                    <h5>Carlos Eduardo.</h5>
                    <p>Muito bom poder contar com esse material.</p>
                </div>
            </div>
        </div>
    </div>
    <hr class="style">
</section>-->
    
<section class="purchase text-center">
    <div class="overlay"></div>
    <div class="container">
        <div class="sec-head text-center mb-50">
            <h2>Indicamos para sua Empresa.</h2>
            <hr>
        </div><!--//head-->
        <div class="row animatedParent" data-sequence="500">
            <div class="col-sm-6 no-pad animated bounceInUp" data-id="1">
                <div class="package style">
                    <h4>Otimização de tempo: saiba como a tecnologia pode te ajudar</h4>
                    <figure><img src="assets/demo-data/ebook-tempo.png" alt="ebook-otimizacao-tempo"/>
                    <figcaption><em>Grátis</em></figcaption>
                    </figure>
                    <a href="ebooks/ebook-tempo.pdf" class="btn btn-blue">Download</a>
                </div>
            </div>
            <div class="col-sm-6 no-pad animated bounceInUp" data-id="2">
                <div class="package">
                  <h4>Conheça os 4 maiores desafios do empreendedorismo digital hoje</h4>
                  <figure><img src="assets/demo-data/ebook-empreendedorismodigiital.png" alt=""/>
                    <figcaption><em>Grátis</em></figcaption>
                    </figure>
                    <a href="ebooks/ebook-empreendorimos-digital.pdf" class="btn btn-blue">Download</a>
                </div>
            </div>
        </div>
    </div>
</section>
    
<footer>
  <div class="container"><a href="https://www.facebook.com/insaitx/?ref=br_rs" target="_blank"><img src="assets/demo-data/icones/icon-facebook.png" alt=""/></a> <a href="https://www.instagram.com/insaitx/" target="_blank"><img src="assets/demo-data/icones/icon-insta.png" alt=""/></a> <a href="https://www.linkedin.com/in/insaitx-consultoria-122982143/" target="_blank"><img src="assets/demo-data/icones/icon-linkdin.png" alt=""/></a> <a href="http://insaitx.com.br/" target="_blank"> <img src="assets/demo-data/icones/icon-blog.png" alt=""/></a></div>
</footer>


<script src="assets/js/lib/jquery.js"></script>
<script src="assets/js/lib/jquery.prettyPhoto.js"></script>
<script src="assets/js/lib/jquery.stellar.min.js"></script>
<script src="assets/js/lib/css3-animate-it.js"></script>
<script src="assets/js/app/main.js"></script>


</body>
</html>
