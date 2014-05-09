<!doctype html>
<html class="no-js" lang="pt-br">
	<head>
		<meta charset="utf-8" />
	    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	    <title>Jomar Turismo - Fretamento e Viagens</title>
	    <base href="<?php $_SERVER['HTTP_HOST']=='localhost' ? print 'http://localhost/jomar.com.br/' : print 'http://192.168.1.100/jomar.com.br/' ?>">
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
	    <script src="media/js/jquery.min.js"></script>
	    <script src="media/js/bootstrap.min.js"></script>
	</head>
	<body>
		<nav class="menu bgYellow" role="navigation">
			<div class="container">
				<div class="navbar-left">
					<ul class="nav navbar-nav">
				        <li><a class="inicio" href="inicio">Início</a></li>
				        <li><a class="empresa" href="empresa">Empresa</a></li>
				        <li><a class="servicos" href="servicos">Serviços</a></li>
				    </ul>
			    </div>
			    <div class="navbar-right">
			    	<ul class="nav navbar-nav">
				        <li><a class="frota" href="frota">Frota</a></li>
				        <li><a class="orcamento" href="orcamento">Orçamento</a></li>
				        <li><a class="contato" href="contato">Contato</a></li>
				    </ul>
				</div>
			    <div id="logo">
				    <h1>
						<a href="inicio">Jomar Turismo - Weissheimer & Oppermann</a>
					</h1>
					<button class="btn-toggle" id="btn-toggle" style="display:none;float:right;">Menu</button>
					</div>
			    </div>
			</div>
		</nav>
		<div class="nav-mobile bgYellow" style="display:none">
			<ul class="nav">
		        <li><a class="inicio" href="inicio">Início</a></li>
		        <li><a class="empresa" href="empresa">Empresa</a></li>
		        <li><a class="servicos" href="servicos">Serviços</a></li>
		        <li><a class="frota" href="frota">Frota</a></li>
		        <li><a class="orcamento" href="orcamento">Orçamento</a></li>
		        <li><a class="contato" href="contato">Contato</a></li>					
			</ul>
		</div>
		
		
    	<?php
    		$paginasValidas = array("inicio", "empresa", "servicos", "frota", "orcamento", "contato", "erro");
    		$pageId="erro";
	    	if(isset($_GET["pg"])){
				$pg = $_GET["pg"];
				if(in_array($pg, $paginasValidas)){
					include_once 'pages/'.$pg.'.php';
					$pageId=$pg;
				}else{
					print "<div class=container><h2>Erro</h2>\n<h3>O endereço solicitado não existe.</h3></div>";
				}
			}else{
				include_once 'pages/inicio.php';
				$pageId="inicio";
			}
			print "<script>$(function(){ $('body').attr('id', '".$pageId."');});</script>";
		?>
		
    	<section class="clients bgYellow">
    		<div class="container">
    			<h3>Clientes</h3>
    		</div>
    		<div class="container">
        		<div class="col-md-3">
        			<a class="th" href="#">
        				<img src="media/img/clientes/kappesberg.jpg">
        			</a>
        		</div>
        		<div class="col-md-3">
        			<a class="th" href="#">
        				<img src="media/img/clientes/kappesberg.jpg">
        			</a>
        		</div>
        		<div class="col-md-3">
        			<a class="th" href="#">
        				<img src="media/img/clientes/kappesberg.jpg">
        			</a>
        		</div>
	        	<div class="col-md-3">
	        		<a class="th" href="#">
	        			<img src="media/img/clientes/kappesberg.jpg">
	        		</a>
	        	</div>
    		</div>
    	</section>
	    <section class="contact">
	    	<div class="container">
	        	<div class="col-md-6">
	        		<span class="icon pointer"></span>
	        		<address>Rodovia RS 122, km 37 Piedade - Bom Princípio - RS</address>
	        	</div>
	        	<div class="col-md-3">
	        		<span class="icon phone"></span>
	        		<strong>(51) 3639.1012</strong>
	        	</div>
	        	<div class="col-md-3">
	        		<span class="icon email"></span>
	        		<strong>jomarturismo@gmail.com</strong>
	        	</div>
	    	</div>
	    </section>
	    <footer>
	    	<div class="container">
	        	<div class="col-md-6 text-left copyright">
	        		Copyright © 2014  Jomar Turismo. Todos os direitos reservados
	        	</div>
	        	<div class="col-md-6 text-right jx">
	        		Desenvolvido por <a href="http://www.jxsolucoes.com.br">Jx Soluções</a>
	        	</div>
	    	</div>
	    </footer>
	    <!-- Scripts -->
	    <script src="media/js/jomar.js"></script>
	</body>
</html>
	