<!DOCTYPE html>
<html lang="es">

<head>
	<!-- problemas de ingenio -->
	<meta charset="UTF-8">
	<title>Suma oculta</title>

	<meta name="description" content="Suma oculta: encontrar el dígito que representa cada letra. problemas de ingenio.">
	<meta name="keywords" content="Suma oculta, problemas de ingenio, CAD, lógica, Rompecabezas">

	<?php include 'genericheading.shtml';?>

	<style>
		body{
			/* background: url("./images/pattern_grid_blue.svg"); */
			background: #4c8c4a;
		}
		.container {
			background-color: white;
		}

		/*
		body {
			margin: 0 auto;
			font-family: 'roboto-regular', sans-serif;
			font-size: 4rem;
			background: #00ddddd;
		}

		.container {
			background-color: lima_claro;		
			margin: 0rem;
			/* border: 20px ridge rgba(70, 150, 220, .96); 
			border-radius: 0;
			font-family: 'roboto-regular', sans-serif;
			font-size: 1.0rem;
			line-height: normal;
			padding: 0;
		}
		*/

		.pointer {cursor: pointer;}

		#numero {
			font-family: fredoka-one, roboto-regular, Arial Black, sanserif;
			font-size: 1.2em;
			color: black;
		}

		@font-face {
				font-family: 'roboto-regular';
				src: url('roboto-regular-webfont.woff2') format('woff2'),
						 url('roboto-regular-webfont.woff') format('woff');
				font-weight: normal;
				font-style: normal;
		}
		@font-face {
				font-family: 'fredoka-one';
				src: url('FredokaOne-Regular.woff2') format('woff2'),
						url('FredokaOne-Regular.woff') format('woff');
				font-weight: normal;
				font-style: normal;
				font-display: swap;
		}

		p {
			font-family: 'roboto-regular', sans-serif;
			font-size: 0.91em;
		}

		.fredoka {
				font-family: 'Fredoka One';
				font-weight: normal;
				font-style: normal;
		}

		.grilla {
			display: grid;
			grid-template-columns: 200px 400px;
			grid-auto-rows: 10px;
			grid-auto-rows: minmax(10px, auto);
			grid-gap: 20px;
		}
		.grilla > div {
			border-radius: 5px;
			padding: 10px;
			background-color: rgb(207,232,220);
			border: 2px solid rgb(79,185,227);
		}          

		.botonera {
			background: #4c8c4a;
			margin: 0;
			border-radius: 0;
			padding-top: 20px;
			font-family: 'roboto-regular', sans-serif;
			font-size: 1.4em;
			line-height: normal; 
			color: #ededed;
			text-align: center;
			width: 640px;
			height: 80px;
		}

		.botones {
			background: #003300;
			font-family: 'roboto-regular, sans-serif;
			font-size: 1.02em;
			text-align: center;
			opacity: 0.8;
			border-radius: 8px;
			color: #e0f2f1;
		}

	</style>

</head>

<body>
<?php include 'control_intrusos.php'; ?>

<div class="container">
	<?php include "menu2015.shtml";?>
	<a name="TopOfPage"></a>

	<div class="row" style="padding: 8px; margin:10px 0; border-radius: 10px;">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<h1 style="margin-left: 20px; font-size: 1.4em; line-height: 0.25; font-weight: 900;">Suma Oculta</h1>
			<p style="margin-left: 20px; font-size: 1.2em;">
			Se presenta una suma donde los dígitos han sido reemplazados por letras.<br>
			Cada letra es un dígito diferente; a letras iguales corresponden dígitos iguales.<br />
			Se trata de encontrar el valor de cada letra para que la suma sea correcta.<br />
			Pista para resolver: se da el valor asignado a una letra.</p>
			<div id="boton" class="botonera">		
				<label for="numero">Nro de problema:</label>
				<input type="number" id="numero" name="numero" min="1" max="99" autofocus onchange="ajustaNumProb()">
			</div>
			<div class="imprimir" id="imprimir">
				<canvas id="canvas" width="650" height="350"></canvas>
			</div>

			<div id="boton" class="botonera">
				<input class="botones" type="button" id="botnSolucion" onclick="muestraSolucion();" value="Solución">
				<input class="botones" type="button" id="botnLimpiaSol" onclick="limpiaSoluc();" value="Limpia Solución">
			</div>
		</div>
		<div class="col-md-2"></div>
	</div>
		
	<h4><a href="ver_resolviendo_sumaoculta.php" >Resolviendo una SUMA OCULTA</a></h4>

	<div class="row">	
		<div class="col-sm-5"></div>
		<div class="col-sm-7">
			<?php include "codigo-infeed-ok.shtml";?>
		</div>
	</div>

	<div class="row" style="background-color: #222;	padding: 8px; margin:10px 0; border-radius: 10px;">
		<div class="col-md-12" style="text-align: left; padding: 12px;">
				<a href="http://www.ingverger.com.ar/curriculum-resumido.php">
						<h4 style="color: #cccccc;">Acerca de mi</h4>
				</a>
				<a href="http://www.ingverger.com.ar/consultas.php">
						<h4 style="color: #cccccc;">Consultas</h4>
				</a>
		</div>
	</div>

</div>

<!-- inicio de los scripts -->
<!-- el proximo script contiene const problemas, array en formato json -->
<script src="problemas_so.json"></script>
<!-- <script src="elige_problema.js"></script> -->

<script src="presenta-sumaoculta.js"></script>


</body>

</html>