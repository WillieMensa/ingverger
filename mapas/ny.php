<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="ISO-8859-1">
	<title>Nueva York</title>
	<meta name="description" content="Mapa de Nueva York">
	<meta name="keywords" content="Lógica,Rompecabezas,ingenio,mapas">

	<!-- aqui va el include file="genericheading.shtml" -->
	<?php include '../genericheading.shtml';?>

</head>

<body>
<?php include '../control_intrusos.php'; ?>

<div class="container">
	<?php include "menu-mapas.shtml";?>

	<!-- Contenido de la pagina -->
	<a name="TopOfPage"></a>
	<div class="row">
		<div class="col-sm-2"><!-- 1er colu -->
		</div>

		<div class="col-sm-8" style="text-align:center"><!-- 2da colu -->
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.401997646173!2d-73.9844420846633!3d40.7531822793275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2590099a8a8a9%3A0x3b51df6e509a734c!2sNew+York+Public+Library+-+Stephen+A.+Schwarzman+Building!5e0!3m2!1ses-419!2sar!4v1462145365874" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			<p>&nbsp;</p>
		</div>

		<div class="col-sm-2"></div>

	</div>

	<div class="row">
		<div class="col-sm-2">
		</div>
		<div class="col-sm-8" style="text-align:center">
				<?php include '../codigo-anuncios-inarticle.shtml';?>
		</div>
		<div class="col-sm-2">
		</div>
	</div>

	<div class="row" style="background-color: #222;	padding: 8px; margin:10px 0; border-radius: 10px;">
		<div class="col-md-12" style="text-align: left; padding: 12px;">
			<a href="http://www.ingverger.com.ar/curriculum-resumido.php"><h4 style="color: #cccccc;">Acerca de mi</h4></a>
			<a href="http://www.ingverger.com.ar/consultas.php"><h4 style="color: #cccccc;">Consultas</h4></a>
		</div>
	</div>

	<!-- fin contenido -->
</div>

</body>
</html>

