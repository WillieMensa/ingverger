<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="ISO-8859-1">
	<title>Calendarios</title>
	<meta name="description" content="Calendario mensual, calendario anual y otras impresiones.">
	<meta name="keywords" content="Calendario anual, Calendario mensual, Calendario anual 2020, Calendario mensual 2020, Lógica,Rompecabezas">

	<!-- aqui va el include file="genericheading.shtml" -->
	<?php include 'genericheading.shtml';?>

</head>

<body>

<?php include 'control_intrusos.php'; ?>

<div class="container">
	<?php include "menu2015.shtml";?>
	<!-- Contenido de la pagina -->
	<a name="TopOfPage"></a>
	<div class="row">
		<div class="col-sm-4">
			<h2>Impresiones varias</h2>
			<p>Calendarios y otras impresiones.<br>
			Todos se imprimen en papel tamaño A4 pulsando el boton derecho del mouse.<br></p>

			<h4><a href="descargas/calendario-anual-2019.pdf#toolbar=0" target="search_iframe">
				Calendario anual 2019</a></h4><br>
				
			<h4><a href="descargas/calendario-mensual-2019.pdf#toolbar=0" target="search_iframe">
				Calendario mensual 2019</a></h4><br>

			<h4><a href="descargas/calendario_anual_2020.pdf#toolbar=0" target="search_iframe">
				Calendario anual 2020</a></h4><br>

			<h4><a href="descargas/calendario_mensual_2020.pdf#toolbar=0" target="search_iframe">
				Calendario mensual 2020</a></h4><br>

			<h4><a href="descargas/agenda_semanal.pdf#toolbar=0" target="search_iframe">Agenda semanal</a></h4>
			<p>Para registrar los compromisos de la semana. Dos hojas tamaño A5 (148mm x 210mm) por pagina.<br></p>

			<h4><a href="descargas/planilla_la_podrida.pdf#toolbar=0" target="search_iframe">Planilla para "La Podrida"</a></h4>
			<p>Especial para los grupos que juegan a este interesante juego de cartas. Salen dos planillas por hoja.<br></p>

		</div>

		<div class="col-sm-8">
			<p align="center">&nbsp;</p>
			<iframe scrolling="yes" align="middle" marginwidth="10" marginheight="10"  name="search_iframe"
			src="http://www.ingverger.com.ar/descargas/calendario_anual_2020.pdf" 
			style="width:640px; height:480px;" frameborder="0"></iframe>

		</div>

	</div>

	<hr>

	<div class="row">
		<div class="col-sm-1">
		</div>
		<div class="col-sm-8">
			<?php include 'codigo-anuncios-graficos.shtml';?>
		</div>
		<div class="col-sm-1">
		</div>
	</div>


	<div class="row" style="background-color: #222;	padding: 8px; margin:10px 0; border-radius: 10px;">
		<div class="col-md-12" style="text-align: left; padding: 12px;">
			<a href="http://www.ingverger.com.ar/curriculum-resumido.php"><h4 style="color: #cccccc;">Acerca de mi</h4></a>
			<a href="http://www.ingverger.com.ar/consultas.php"><h4 style="color: #cccccc;">Consultas</h4></a>
		</div>
	</div>


</div>

</body>
</html>

