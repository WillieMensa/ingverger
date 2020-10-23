<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="ISO-8859-1">
	<title>Dividir cuadrado en diez - Solución</title>
	<meta name="description" content="Rompecabezas. Resolución de problemas de ingenio">
	<meta name="keywords" content="Lógica,Rompecabezas, representación gráfica, Desarrollo,Sistemas de Representación, Problemas de ingenio, Juegos de mesa">

	<!-- aqui va el include file="genericheading.shtml" -->
	<?php include 'genericheading.shtml';?>

</head>

<body>
	<!-- aqui va el include file="menu2015.shtml" -->
	<?php include "menu2015.shtml";?>

<div class="container">
	<a name="TopOfPage"></a>
	<!-- Contenido de la pagina -->
	<!-- <h1>La regla secreta</h1> -->
	<div class="row">
		<div class="col-sm-5">
			<p>&nbsp;</p>
			<h3>Dividir cuadrado en diez - Solución</h3>

			<H4>Como resolver</H4>
			<p>Para simplificar el problema al máximo se puede pensar que el cuadrado a dividir está formado por diez cuadrados de lado unitario y por tanto superficie unitaria.
			<p>En este caso el lado del cuadrado a dividir medirá raiz de diez.
			<p>Nos preguntamos entonces como prepara ese cuadrado con total exactitud para realizar los cortes correspondientes.
			<p>Una solución posible es utilizar la hipotenusa de un triángulo rectangulo con catetos de longitud 3 y 1. La longitud de la hipotenusa resultante será raiz de tres al cuadrado mas uno al cuadrado; o sea raiz de diez.
			<p>Podemos construir entonces un cuadrado con esas medidas dentro de una grilla de lado uno. La misma grilla nos indica por donde deben realizarse los cortes.
			<p>En la ilustración se muestra como componer los diez cuadrados; algunos ya quedan preparados con el corte; otros se componen uniendo polígonos con igual letra.
			<p></p>

		</div>

		<!-- <div class="col-sm-7" style="background-color: #e6e6b8;" align="center"> -->
		<div class="col-sm-5" style="text-align:center">
			<h4>&nbsp;</h4>
			<p>
			
			<img src="images/CuadradoEn10-solucion.jpg" width="376" height="378" border="0" alt="Solucion problema de dividir un cuadrado mediante cortes en 10 cuadrados iguales">
			</center>
			<p>La técnica utilizada para determinar por donde hay que cortar es aplicable para otras divisiones; por ejemplo: cinco, trece, diecisiete, veinte, veintinueve, etc.

			<hr>
			<p>&nbsp;</p>
			<?php include 'codigo-anuncios-inarticle.shtml';?>

		</div>

		<div class="col-sm-2" style="background-color: #e6e6b8;">
		</div>

	</div>



	<hr class="grosa">
	<!-- fin contenido -->

</div>

</body>
</html>

