<!doctype html>
<html class="no-js" lang="pt-br">
	<head>
		<meta charset="utf-8" />
	    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	    <title>Jomar Turismo - Fretamento e Viagens</title>
	    <base href="<?php $_SERVER['HTTP_HOST']=='localhost' ? print 'http://localhost/jomar.com.br/' : print 'http://www.jomar.com.br/' ?>">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	    <meta http-equiv="pragma" content="no-cache" />
	    <meta http-equiv="cache-control" content="no-cache" />
	    <meta name="DC.type" content="text, instutucional" />
	    <meta name="DC.format" content="text/xhtml" />
	    <meta http-equiv="content-script-type" content="text/javascript" />
	    <meta http-equiv="content-style-type" content="text/css" />
	    <meta name="content-language" content="pt-br" />
	    <meta name="DC.date.created" content="10/04/2014" />
	    <meta name="robots" content="all"/>
	    <meta name="revisit-after" content="7 days" />
	    <meta name="distribuition" content="global" />
	    <meta name="rating" content="general" />
	    
	    <meta name="classification" content="business" />
	    <meta name="description" content="" />
	    <meta name="DC.description" content='Empresa de transportes e turismo.' />
	    <meta name="keywords" content='fretamento, onibus, transporte, universitario, turismo.\' />
	    <meta name="DC.subject" content='' />
	    
	    <meta name="author" content="jx solucoes" />
	    <meta name="DC.creator" content="jx solucoes" />
	    <meta name="DC.publisher" content="jx solucoes" />
	    <meta name="copyright" content="Copyright (c) 2014 Jx Solucoes" />
	    <meta name="DC.creator.address" content="http://www.jxsolucoes.com.br" />
	    <meta name="generator" content="jx solucoes" />
	    <link rel="shortcut icon" type="image/x-icon" href="http://www.jomar.com.br/media/img/favicon.ico">
	    
	    <meta property="og:image" content="http://www.jomar.com.br/media/img/facebook.jpg" />
	    <meta property="og:url" content="http://www.jomar.com.br/"/>
	    <meta property="og:title" content="Jomar"/>
	    <meta property="og:description" content="Empresa de transportes e turismo."/>
	    
	    <!-- Google Font API -->
	    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
	    <!-- Styles -->
    	<link href="media/css/bootstrap.min.css" rel="stylesheet">
	    <link href="media/css/jomar.css" rel="stylesheet">
	    <!-- Scripts -->
	    <script src="media/js/jquery.js"></script>
	    <script src="media/js/bootstrap.min.js"></script>
	    <script src="media/js/jomar.js"></script>
	</head>
	<body>
		<div class="contain-to-grid">
			<nav class="top-bar" data-topbar>
		    			<a href="inicio">Inicio</a>&nbsp;
		          		<a href="empresa">Empresa</a>&nbsp;
		          		<a href="servicos">Servicos</a>
		        		<a href="frota">Frota</a>&nbsp;
		          		<a href="orcamento">Orcamento</a>&nbsp;
		          		<a href="contato">Contato</a>
			</nav>
		</div>
	    <section>
	    	<div class="bgYellow">
	    	
		    	<div class="row collapse">
		    		<ul class=left">
		    			<a href="inicio">Inicio</a>&nbsp;
		          		<a href="empresa">Empresa</a>&nbsp;
		          		<a href="servicos">Servicos</a>
		        	</ul>
		        	<ul class="right">
		        		<a href="frota">Frota</a>&nbsp;
		          		<a href="orcamento">Orcamento</a>&nbsp;
		          		<a href="contato">Contato</a>
		        	</ul>
		        </div>
		    </div>
        	<h1>
	          <a href="#">Jomar Turismo - Weissheimer & Oppermann</a>
	        </h1>
	    </section>
	    <header>
	    	<div class="row">
		    </div>
	    </header>
	    <span class="clear"></span>
    	<section class="content">
    	<?php
    		$paginasValidas = array("inicio", "empresa", "servicos", "frota", "orcamento", "contato", "erro");
	    	if(isset($_GET["pg"])){
				$pg = $_GET["pg"];
				if(in_array($pg, $paginasValidas)){
					include_once 'pages/'.$pg.'.php';
				}else{
					print "<div class=row><h2>Erro</h2>\n<h3>O endereço solicitado não existe.</h3></div>";
				}
			}else{
				include_once 'pages/inicio.php';
			}
		?>
		</section>
    	<section class="clients">
    		<div class="row">
    			<h3>Clientes</h3>
    		</div>
    		<div class="row">
        		<div class="medium-3 columns">
        			<a class="th" href="#">
        				<img src="media/img/clientes/kappesberg.jpg">
        			</a>
        		</div>
        		<div class="medium-3 columns">
        			<a class="th" href="#">
        				<img src="media/img/clientes/kappesberg.jpg">
        			</a>
        		</div>
        		<div class="medium-3 columns">
        			<a class="th" href="#">
        				<img src="media/img/clientes/kappesberg.jpg">
        			</a>
        		</div>
	        	<div class="medium-3 columns">
	        		<a class="th" href="#">
	        			<img src="media/img/clientes/kappesberg.jpg">
	        		</a>
	        	</div>
    		</div>
    	</section>
	    <section class="contact">
	    	<div class="row">
	        	<div class="medium-6 columns">
	        		<span class="icon pointer"></span>
	        		<address>Rodovia RS 122, km 37 Piedade - Bom Princípio</address>
	        	</div>
	        	<div class="medium-3 columns">
	        		<span class="icon phone"></span>
	        		<strong>(51) 3639.1012</strong>
	        	</div>
	        	<div class="medium-3 columns">
	        		<span class="icon email"></span>
	        		<strong>jomarturismo@gmail.com</strong>
	        	</div>
	    	</div>
	    </section>
	    <footer>
	    	<div class="row">
	        	<div class="medium-6 columns textLeft">
	        		Copyright © 2014  Jomar Turismo. Todos os direitos reservados
	        	</div>
	        	<div class="medium-6 columns textRight">
	        		Desenvolvido por <a href="http://www.jxsolucoes.com.br">Jx Soluções</a>
	        	</div>
	    	</div>
	    </footer>
    <!-- 
  <ul data-orbit data-options="animation_speed:1500;">
    <li data-orbit-slide="headline-1">
      <div>
        <h2>Headline 1</h2>
        <h3>Subheadline</h3>
      </div>
    </li>
    <li data-orbit-slide="headline-2">
      <div>
        <h2>Headline 2</h2>
        <h3>Subheadline</h3>
      </div>
    </li>
    <li data-orbit-slide="headline-3">
      <div>
        <h2>Headline 3</h2>
        <h3>Subheadline</h3>
      </div>
    </li>
  </ul>
 -->




    
	    <script src="media/js/vendor/jquery.js"></script>
	    <script src="media/js/foundation/foundation.js"></script>
	    <script src="media/js/foundation/foundation.orbit.js"></script>
	    <script src="media/js/foundation.min.js"></script>
	    <script>
	      $(document).foundation();
	    </script>
	</body>
</html>
