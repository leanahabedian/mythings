<? 

require "include.php";

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//ES" 
"http://www.w3.org/TR/html4/loose.dtd">

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="ie6 oldie" lang="es"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 oldie" lang="es"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 oldie" lang="es"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="es"> <!--<![endif]-->




  <head>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <script src="js/jquery-1.7.2.js" type="text/javascript"></script>
    <script>

    </script>
    	<title>The web name</title>
	<meta name="Title" content="The Web Name" >
	<meta name="Author" content="Leandro Nahabedian" >

	<meta name="Description" content="" >
	<meta name="Robots" content="index,follow" >
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >

  </head> 

<body>

	<!-- PAGE  -->
	<div id="wrapper">

		<!-- HEADER  -->
		<div id="header">
	  
			<!-- logo -->
			<h1 id="logo">

			<img src="img/.gif" alt="ABC portal recetas" width="142" height="38" >
			</h1>
				 
			<!-- main nav --> 
			<ul class="nav main">																	
			<li class="current">Inicio</li>
			<li><a href="#">Recetas</a></li>
			<li><a href="#">Entradas</a></li>
			<li><a href="#">Platos</a></li>

			<li><a href="#">Guarniciones</a></li>
			<li><a href="#">Postres</a></li>
			</ul>
		 
		<!-- breadcrumb -->
<!--
			<div class="breadcrumb">
			<ul class="nav">
			<li><a href="">Volver a la categoría</a> |</li>

			<li><a href="">Sopas</a> ›</li>
			<li><a href="">Listado de sopas</a> ›</li>
			<li>Trufas Parisienne</li>
			</ul>
			</div>
-->
		 
		</div>

		 
		<!-- CONTENT  -->
		<div id="content" class="grid-3"> 
		
			<h1 class="icon top-recipes deco">Leandro Nahabedian</h1>	
			
			<div id="sidebar" class="col-1">
			
				<a class="col-1" href="http://www.foxquotes.com/wp-content/uploads/2012/01/BMW-M3-2002-03.jpg"><img src="img/Lea.jpg" height="250" width="250"></a>

				<!-- Skills -->
				<div id="skills" class="col-1">
				<h3>Área Desarrollo</h3>
				<dl>
				<dt>PHP</dt><dd>Avanzado</dd>
				<dt>Python</dt><dd>Avanzado</dd>

				<dt>Ruby</dt><dd>Intermedio</dd>
				<dt>Java</dt><dd>Intermedio</dd>
				</dl>

				<h5>Frameworks</h5>
				<dl>
				<dt>Django</dt><dd>Intermedio</dd>
				<dt>Rails</dt><dd>Principiante</dd>
				</dl>

				<h5>Base de Datos</h5>
				<dl>
				<dt>MySQL</dt><dd>Avanzado</dd>
				<dt>PostgreSQL</dt><dd>Principiante</dd>
				<dt>SQLite</dt><dd>Principiante</dd>
				</dl>



				</div>

				
				<!-- box actions -->
				<div class="col-1 box actions">
				<ul>

				<li class="icon print"><a href="javascript:;" onclick="window.print();return false;">Imprimir</a></li>
				<li class="icon email"><a href="mailto:leanahabedian@hotmail.com?Subject=Contacto">Enviame un email</a></li>
				<li class="icon flag"><a href="mailto:leanahabedian@hotmail.com?Subject=Error">Denunciar error</a></li>
				</ul>
				</div>
			
			</div>

			
			<div class="col-2 no-rm">
				
				<!-- detail --> 
				<div id="detail" class="col-2 box block">
				<dl class="col-1">
				<dt>Complejidad</dt><dd>Facil</dd>
				<dt>Rendimiento</dt><dd>10 porciones</dd>
				<dt>Preparación</dt><dd>20 minutos</dd>

				<dt>Coccion</dt><dd>15 minutos</dd>
				</dl>
				<dl class="col-1 no-rm">
				<dt>Cocina</dt><dd>Francesa</dd>
				<dt>Ingredientes</dt><dd>10</dd>
				<dt>Forma de cocción</dt><dd>Hervido</dd>

				<dt>Popularidad</dt><dd>Alta</dd>
				</dl>
				</div>
				
				<!-- recipe --> 
				<div id="recipe" class="col-2">
				<h2>Preparación</h2>
				<ol>
				<li><p>Coloque la crema en la ollita y lleve a fuego lento, hasta que hierva. Entonces, añada el chocolate y continúe cociendo, mientras revuelve con la cuchara de madera.</p></li>

				<li><p>Cuando hierva, nuevamente, retire y deje entibiar. En ese momento, añada el ron y la fruta seca. Espere, hasta que esté completamente fría, si lo desea, para acelerar el proceso puede llevar a refrigerar unos minutos.</p></li>
				<li><p>Entonces, úntese las manos con azúcar impalpable y forme pequeñas bolitas. Luego, báñelas en chocolate cobertura y espolvoree con chocolate rallado.</p></li>
				</ol>
				<h4>Sugerencia:</h4>
				<p>En vez de espolvorear el baño con chocolate puede pegar una mitad de nuez u otra fruta seca.</p>
				</div>

				
				<!-- comments --> 
				<div id="comments">
				<h2>Commentarios</h2>
				<ul>
				<li class="block">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</li>
				<li class="block">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</li>
				</ul>
				<form action="">

				<h3>¡Opina sobre esta receta!</h3>
				<textarea class="col-2 box" name="" id="comment-box" ></textarea>
				<input class="button" type="submit" value="Comentar" >
				</form>
				</div>
				
			</div>
				
		<!-- FOOTER  -->

		<div id="footer">
			
			<!-- copyright --> 
			<p class="to-left">Copyright © 2012. Leandro Nahabedian. Todos los derechos reservados.</p>
			
			<!-- footer nav --> 
			<ul class="nav to-right">																	
			<li><a href="#">Principal</a> · </li>
			<li><a href="#">Acerca De</a> · </li>

			<li><a href="#">Provacidad</a> · </li>
			<li class="last"><a href="mailto:leanahabedian@hotmail.com?Subject=Contacto">Contacto</a></li>
			</ul>
				  
		</div>


	</div>


	<? require "footer.php"?>
