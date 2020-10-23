<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="ISO-8859-1">
	<title>Esquema de p�gina</title>
	<meta name="description" content="Rompecabezas. Resoluci�n de problemas de ingenio">
	<meta name="keywords" content="L�gica,Rompecabezas, representaci�n gr�fica, Desarrollo,Sistemas de Representaci�n,CAD 3D, acotaci�n,autocad,axonometr�a,CAD tridimensional,caligraf�a t�cnica,cortes y secciones,dibujo tecnico,elipses,empalmes,geometria descriptiva, ingenier�a, ingeniero, ingenio, normas iram,planos,proyecciones,tangente,vistas">

	<!-- aqui va el include file="genericheading.shtml" -->
	<?php include 'genericheading.shtml';?>

<!-- el codigo siguiente para transformar XML en  XHTML ?!?!?!?!-->
<?php
// Load XML file
$xml = new DOMDocument;
$xml->load('cdcatalog.xml');

// Load XSL file
$xsl = new DOMDocument;
$xsl->load('cdcatalog.xsl');

// Configure the transformer
$proc = new XSLTProcessor;

// Attach the xsl rules
$proc->importStyleSheet($xsl);

echo $proc->transformToXML($xml);
?>
<!-- FIN DE codigo para transformar XML en  XHTML ?!?!?!?!-->



</head>

<body>
	<!-- aqui va el include file="menu2015.shtml" -->
	<?php include "menu2015.shtml";?>

<div class="container">
	<!-- Contenido de la pagina -->
	<a name="TopOfPage"></a>

	<h1>T�tulo H1</h1>
	<h4>Titulo h4</h4>
	<hr>
	<div class="row">
		<div class="col-sm-4"><!-- 1er colu -->
			<h3>Primer columna, ancho 4, H3</h3>
		</div>

		<div class="col-sm-4"><!-- 2da colu -->
			<h3>Segunda columna, ancho 4, H3</h3>
			<p>&nbsp;</p>
			<p>loren Ipsum ....
			<p>&nbsp;</p>
			<p>loren Ipsum ....
			<p>&nbsp;</p>
		</div>

		<div class="col-sm-2"><!-- 3er colu -->
			<h3>Tercer columna, ancho 2, H3</h3>
			<p>columna de separaci�n</p>
		</div>

		<div class="col-sm-2" style="background-color: #e6e6b8;">
			<p>Si tienes alguna sugerencia, 
			<A HREF="consultas.php">avisame.</A>.
			<p>&nbsp;</p>
		</div>

	</div>
	<hr>

	<div class="row">
		<div class="col-sm-6" style="background-color: #c2ffa3;">
			<?php include 'google-site-search.shtml';?>
		</div>
		<div class="col-sm-6">
			<?php include 'codigo-anuncios-inarticle.shtml';?>
		</div>
	</div>

	<hr class="grosa">
	<!-- fin contenido -->

</div>

</body>
</html>

