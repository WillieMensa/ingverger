<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="ISO-8859-1">
	<title>Mapa de Rosario</title>
	<meta name="description" content="Mapa de Rosario">
	<meta name="keywords" content="Lógica,Rompecabezas, representación gráfica, Desarrollo,Sistemas de Representación,CAD 3D, acotación,autocad,axonometría,CAD tridimensional,caligrafía técnica,cortes y secciones,dibujo tecnico,elipses,empalmes,geometria descriptiva, ingeniería, ingeniero, ingenio, normas iram,planos,proyecciones,tangente,vistas">

	<!-- 
	Credenciales para utilizar el API de Goolge para mapas
	AIzaSyDE-NjMh2dQJTBWqk4xTsJ3-tlrL4eJs30
	-->
	<!-- aqui va el include file="genericheading.shtml" -->
	<?php include '../genericheading.shtml';?>

</head>

<body>
<?php include '../control_intrusos.php'; ?>

<div class="container">
	<?php include "menu-mapas.shtml";?>

	<!-- Contenido de la pagina -->
	<a name="TopOfPage"></a>

	<h1>Mapa de Rosario</h1>
	<hr>

	<div class="row">
		<div class="col-sm-2"><!-- 1er colu -->
		</div>

		<div class="col-sm-8" style="text-align:center"><!-- 2da colu -->			
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d13392.472184353606!2d-60.64745955!3d-32.94789265!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2sar!4v1454596305516" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				<p>&nbsp;</p>
				<?php include '../codigo-anuncios-inarticle.shtml';?>

		</div>

		<div class="col-sm-2"><p>&nbsp;</p></div>

	</div>
	<p>&nbsp;</p>
	<p class=footer>La publicidad que aparece en esta página ayuda a solventar los costos de hosting.  Gracias.
	<div class="row" style="background-color: #222;	padding: 8px; margin:10px 0; border-radius: 10px;">
		<div class="col-md-12" style="text-align: left; padding: 12px;">
			<a href="./curriculum-resumido.php"><h4 style="color: #cccccc;">Acerca de mi</h4></a>
			<a href="./consultas.php"><h4 style="color: #cccccc;">Consultas</h4></a>
		</div>
	</div>

	<!-- fin contenido -->

</div>

</body>
</html>

