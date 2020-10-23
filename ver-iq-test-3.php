<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="ISO-8859-1">
	<title>Test de IQ</title>
	<meta name="description" content="Test de IQ">
	<meta name="keywords" content="Test de IQ">

	<!-- aqui va el include file="genericheading.shtml" -->
	<?php include 'genericheading.shtml';?>

</head>

<body>
<?php include 'control_intrusos.php'; ?>

<div class="container">
	<!-- aqui va el include file="menu2015.shtml" -->
	<?php include "menu2015.shtml";?>

	<!-- Contenido de la pagina -->
	<a name="TopOfPage"></a>
	<div class="row">
		<div class="col-sm-1">
		</div>
		<div class="col-sm-8">

		<H3>Test Your IQ</H3>
		<p>400 ejercicios para probar y entrenar su inteligencia.<br>
			<iframe 
				src="http://docs.google.com/gview?url=http://www.fceia.unr.edu.ar/~gverger/descargas/test+your+iq+400+questions+to+boost+your+brainpower.pdf&embedded=true"
				scrolling="yes" align="middle" marginwidth="10" marginheight="10"  name="search_iframe"
				style="width:600px; height:600px;" frameborder="05">
			</iframe>

		</div>
		<div class="col-sm-1">
		</div>

		<div class="col-sm-2" style="background-color: #e6e6b8;">
			<p>Si tienes alguna sugerencia, 
			<A HREF="consultas.php">avisame.</A>.
			<p>&nbsp;</p>
		</div>

	</div>

	<hr>

	<div class="row">
		<div class="col-sm-1">
		</div>
		<div class="col-sm-8" style="text-align:center">

			<?php include 'BloqueAnuncios1.shtml';?>

		</div>
		<div class="col-sm-1">
		</div>
	</div>

	<hr class="grosa">
	<!-- fin contenido -->

</div>

</body>
</html>

