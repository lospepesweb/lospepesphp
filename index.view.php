<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8"/>
	<title>Los Pepes | WEB DEVELOPMENT</title>
	<meta name="description" content="Diseñamos tu web y posicionamos tu marca en Internet con la última tecnología."/>
	<!-- VIEWPORT -->
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
		<!-- METATAGS -->
	<meta name="languaje" content="ES"/>
	<meta name="robots" content="index, follow"/>
	<meta name="googlebot" content="index, follow"/>
	<meta name="geo.region" content="AR-J"/>
	<meta name="geo.placename" content="San Juan"/>
	<meta name="author" content="Los Pepes WEB, www.lospepesweb.com"/>
	<!--OG-->
	<meta property="og:title" content="Los Pepes | WEB DEVELOPMENT"/>
	<meta property="og:type" content="website"/>
	<meta property="og:url" content="http://www.lospepesweb.com"/>
	<meta property="og:image" content="http://www.lospepesweb.com/img/logoxG.png"/>
	<meta property="og:site_name" content="Los Pepes | WEB DEVELOPMENT"/>
	<meta property="og:description" content="Diseñamos tu web y posicionamos tu marca en Internet con la última tecnología."/>
	<meta property="fb:admins" content="404145919962909"/>
	<meta property="og:locale" content="es_LA"/>
	<!-- LINKS -->
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/manifest.json">
	<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="theme-color" content="#ffffff">
	<link rel="stylesheet" type="text/css" href="<?php echo RUTA ?>/css/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo RUTA ?>/css/estilos.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo RUTA ?>/css/style.css"/>
	<link rel="alternate" href="<?php echo RUTA ?>/en" hreflang="en" />
	<link rel="alternate" href="<?php echo RUTA ?>/es" hreflang="es_LA" />
</head>
<body>
	<header>
	<h1>Los Pepes - Diseñamos tu web y posicionamos tu marca en Internet con la última tecnología.</h1>
		<nav class="navbar">
		  	<div class="container">

			    <div id="navbar-header" class="navbar-header">
			    	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<div id="nav-icon4">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</div>
			    	</button>
			    	<a class="navbar-brand" href="#">
						<img class="hidden-xs hidden-sm" src="<?php echo RUTA ?>/img/logoG.png" alt="Los Pepes">
						<img class="hidden-md hidden-lg" src="<?php echo RUTA ?>/img/logoS.png" alt="Los Pepes">
			    	</a>
			    </div>

			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<div class="hidden-xs hidden-sm languaje text-right">
						<a href="<?php echo RUTA ?>/en" id="eng" class="btn btn-languaje">ENG <span class="languaje-bar">/</span></a>
						<a href="<?php echo RUTA ?>/es" id="esp" class="btn btn-languaje-active">ESP</a>
					</div>
			    	<ul class="nav navbar-nav navbar-right">
			        	<!-- <li><a href="#nosotros"><?php echo $txt['nav'][0]; ?></a></li> -->
			        	<li><a class="btn-menuBar" href="#tecnologia"><?php echo $txt['nav'][1]; ?></a></li>
			        	<li><a class="btn-menuBar" href="#servicios"><?php echo $txt['nav'][2]; ?></a></li>
			        	<li><a class="btn-menuBar" href="#trabajos"><?php echo $txt['nav'][3]; ?></a></li>
			        	<li><a class="btn-menuBar" href="#contacto"><?php echo $txt['nav'][4]; ?></a></li>
			        	<li><a class="btn-menuBar" href="http://www.facebook.com/lospepesweb" target="_blank"><span class="icon icon-facebook2"></span></a></li>
			    	</ul>
			    	<div id="btn-languaje" class="hidden-md hidden-lg languaje text-center">
						<a href="<?php echo RUTA ?>/en" id="engxs" class="btn btn-languaje">ENG <span class="languaje-bar">/</span></a>
						<a href="<?php echo RUTA ?>/es" id="espxs" class="btn btn-languaje-active">ESP</a>
					</div>
			    </div>

			</div>
		</nav>
	</header>
	
	<div class="container">
		<input type="hidden" id="lang" value="<?PHP echo $txt['lang'][0];?>">
		<span class="linea"></span>
	</div>

	<section id="nosotros" class="nosotros">
		<div class="container">
			<img class="hidden-md hidden-lg img-responsive" src="<?php echo RUTA ?>/img/fondoNosotrosMOVIL.png" alt="Los Pepes WEB">
			<p class="p1 hidden-xs hidden-sm"><?php echo $txt['nos'][0]; ?></p>
			<p class="p2 hidden-xs hidden-sm"><?php echo $txt['nos'][1]; ?></p>
			<p class="p1 hidden-md hidden-lg"><?php echo $txt['nos'][2]; ?></p>
			<p class="p2 hidden-md hidden-lg"><?php echo $txt['nos'][3]; ?></p>
			<p class="p3 col-md-6"><?php echo $txt['nos'][4]; ?></p>
			<div id="btn-nosotros" class="btn-container col-xs-12 hidden-xs">
				<a href="" class="btn btn-naranja centradoForm" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"><?PHP echo $txt['contacto'][0]; ?></a>
			</div>
		</div>
	</section>

	<section id="tecnologia" class="tecnologia">
		<div class="container">
			<div class="fondoTecno">
				<p class="p1 hidden-xs hidden-sm"><?php echo $txt['tec'][0]; ?></p>
				<p class="p2 hidden-xs hidden-sm"><?php echo $txt['tec'][1]; ?></p>
				<p class="p1 hidden-md hidden-lg"><?php echo $txt['tec'][2]; ?></p>
				<p class="p2 hidden-md hidden-lg"><?php echo $txt['tec'][3]; ?></p>
				<div class="p-container col-md-6 col-md-offset-6">
					<p class="p3"><?php echo $txt['tec'][4]; ?></p>
				</div>
				<img class="hidden-md hidden-lg img-responsive" src="<?php echo RUTA ?>/img/fondoTecno.png" alt="Los Pepes WEB">
			</div>
		</div>
	</section>

	<section id="servicios" class="servicios">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="img-container">
						<img class="img-responsive center" src="<?php echo RUTA ?>/img/imgMedida.png" alt="Los Pepes">
					</div>
					<h2 class="movil text-center"><?php echo $txt['ser'][0]; ?></h2>
					<span class="lineaServ"></span>
					<p class="p3 text-center"><?php echo $txt['ser'][1]; ?></p>
				</div>
				<div class="col-md-4">
					<div class="img-container">
						<img class="img-responsive hidden-sm hidden-xs" src="<?php echo RUTA ?>/img/imgResponsive.png" alt="Los Pepes">
						<img class="img-responsive hidden-md hidden-lg" src="<?php echo RUTA ?>/img/imgResponsiveMovil.png" alt="Los Pepes">
					</div>
					<h2 class="text-center"><?php echo $txt['ser'][2]; ?></h2>
					<span class="lineaServ"></span>
					<p class="p3 text-center"><?php echo $txt['ser'][3]; ?></p>
				</div>
				<div class="col-md-4">
					<div class="img-container">
						<img class="img-responsive center" src="<?php echo RUTA ?>/img/imgUI.png" alt="Los Pepes">
					</div>
					<h2 class="movil text-center"><?php echo $txt['ser'][4]; ?></h2>
					<span class="lineaServ"></span>
					<p class="p3 text-center"><?php echo $txt['ser'][5]; ?></p>
				</div>
			</div>
		</div>
	</section>

	<section id="trabajos" class="trabajos">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<p><span class="p1"><?php echo $txt['tra'][0]; ?></span><span class="p2"> <?php echo $txt['tra'][1]; ?></span></p>
				</div>
				<div class="col-md-6">
					<p class="p3"><?php echo $txt['tra'][2]; ?></p>
				</div>
				<div class="clearfix"></div>
				<div class="col-xs-6 col-md-4">
					<a class="text-center" href="http://meatpoint-sj.com/" target="_blank">
						<img class="img-responsive" src="<?php echo RUTA ?>/img/meatPoint.png" alt="Los Pepes">
					</a>
				</div>
				<div class="col-xs-6 col-md-4">
					<a class="text-center" href="http://www.pcyasoc.com.ar/" target="_blank">
						<img class="img-responsive" src="<?php echo RUTA ?>/img/pobleteCastro.png" alt="Los Pepes">
					</a>
				</div>
			</div>
		</div>
	</section>

	<section id="contacto" class="contacto">
		<div class="container">
			<div class="fondoContacto">
				<p class="p2"><?php echo $txt['con'][0]; ?></p>
				<p class="p3"><a href="mailto:hola@lospepesweb.com" class="p3">hola@lospepesweb.com</a></p>
				<p class="p3">San Juan, Argentina</p>
				<p class="p3"><a href="http://www.facebook.com/lospepesweb" target="_blank"><span class="icon icon-facebook2"></span> /lospepesweb</a></p>
				<div class="btn-container col-xs-12">
					<a href="" id="btnContacto" class="btn btn-gris centradoForm" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"><?PHP echo $txt['contacto'][1]; ?></a>
				</div>
			</div>
		</div>
	</section>

<footer>
</footer>

	<!-- FORMULARIO -->

	<div id="formulario" class="formulario">
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
			<div id="modal-dialog" class="modal-dialog" role="document">
			    <div class="modal-content">
			    	<div id="form-alert" class="alert alert-success" style="display: none;">
			    	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			    	<h4>¡Formulario enviado!</h4>
			    	<h6>En breve nos pondremos en contacto con vos.</h6>
			    	</div>
					
					<div id="modal-body" class="modal-body" style="display: block;">

				    	<div class="modal-header">
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					        <h4 class="modal-title" id="exampleModalLabel"><?PHP echo $txt['titulo'][0]; ?></h4>
				    	</div>
			    			    	 	
				        <form id="formContacto" class="formContacto ajax" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" role="form" onsubmit="<?php enviar(); ?>">
				        	<div class="form-group">
					        	<label for="recipient-name" class="control-label"><?PHP echo $txt['label'][0]; ?></label>
					        	<input type="text" class="form-control" id="recipient-name" placeholder="Sheriff Woody" name="nombre">
				        	</div>
				    		<div class="form-group">
					        	<label for="recipient-email" data-info="No te enviaremos spam, lo prometemos." class="control-label"><?PHP echo $txt['label'][1]; ?></label>
					        	<input type="email" class="form-control" id="recipient-email" placeholder="woody@toystory.com" name="correo">
				        	</div>
				        	<div class="form-group">
					        	<label for="message-text" class="control-label"><?PHP echo $txt['label'][2]; ?></label>
					        	<input class="form-control" id="message-text" placeholder="<?php echo $txt['ph'][2]; ?>" name="mensaje" title='Evitar usar caracteres especiales como "<,> y @"'>
				        	</div>
						
				    		<div class="modal-footer">
				  	        	<button class="btn btn-formu" name="submit" type="submit" id="button"><?PHP echo $txt['boton'][0];?></button>
				  	        	<div class="enviando">
							    	<img id="enviando" src="<?php echo RUTA ?>/img/enviando.gif"/>	
							    </div>
				    		</div>
				        </form>
			    	</div>
			    </div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="<?php echo RUTA ?>/js/jquery-3.1.1.js"></script>
	<script type="text/javascript" src="<?php echo RUTA ?>/js/bootstrap.min.js"></script>
	<!-- <script type="text/javascript" src="<?php echo RUTA ?>/js/npm.js"></script> -->
	<script type="text/javascript" src="<?php echo RUTA ?>/js/custom.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript" charset="utf-8"></script>

	<span class="ir-arriba" z-index="-1"></span>
</body>
</html>