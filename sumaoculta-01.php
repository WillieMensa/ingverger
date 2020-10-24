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
		body {
			margin: auto;
		}

		.container {
			background-color: lima_claro;		
			/*
			#dfd;
			*/
		}

		.pointer {cursor: pointer;}

	</style>

</head>

<body>
<?php include 'control_intrusos.php'; ?>
<div class="container">
	<!-- aqui va el include file="menu2015.shtml" -->
	<?php include "menu2015.shtml";?>


	<!-- Contenido de la pagina -->
	<a name="TopOfPage"></a>
	<div class="row lima_oscuro">
		<div class="col-sm-5">
			<h1>Suma oculta</h1>
			<p>Encontrar el valor de cada letra para que la suma sea correcta.<br>
				Cada letra es un dígito diferente; a letras iguales corresponden d&#237;gitos iguales.<br> 
				<strong>Pista para resolver:</strong> se da el valor asignado a una letra.</p>

			<!--  class="img-responsive" -->
			<h4 class="pointer text-primary font-weight-bolder" onclick="muestraImg('./ingenio/sumaoculta57.png')">Juego 57</h4>
			<h4 class="pointer text-primary font-weight-bolder" onclick="muestraImg('./ingenio/sumaoculta58.png')">Juego 58</h4>
			<h4 class="pointer text-primary font-weight-bolder" onclick="muestraImg('./ingenio/sumaoculta59.png')">Juego 59</h4>
			<h4 class="pointer text-primary font-weight-bolder" onclick="muestraImg('./ingenio/sumaoculta60.png')">Juego 60</h4>
			<h4 class="pointer text-primary font-weight-bolder" onclick="muestraImg('./ingenio/sumaoculta61.png')">Juego 61</h4>
			<h4 class="pointer text-primary font-weight-bolder" onclick="muestraImg('./ingenio/sumaoculta62.png')">Juego 62</h4>
			<h4 class="pointer text-primary font-weight-bolder" onclick="muestraImg('./ingenio/sumaoculta63.png')">Juego 63</h4>
			<h4 class="pointer text-primary font-weight-bolder" onclick="muestraImg('./ingenio/sumaoculta64.png')">Juego 64</h4>
		</div>

		<div class="col-sm-7">
			<p align="center">&nbsp;</p>
			<div id="imagen">
				<img src="ingenio/sumaoculta58.png" width="580" height="286" class="img-responsive"/>
			</div>

		</div>
	</div>

	<div class="row lima_oscuro">	
		<div class="col-sm-5">
			<!-- <h2>Soluciones</h2> -->
			<h4 class="pointer text-primary font-weight-bolder" onclick="muestraImg('./ingenio/sumaoculta57sol.png')">Solución juego 57</h4>
			<h4 class="pointer text-primary font-weight-bolder" onclick="muestraImg('./ingenio/sumaoculta58sol.png')">Solución juego 58</h4>
			<h4 class="pointer text-primary font-weight-bolder" onclick="muestraImg('./ingenio/sumaoculta59sol.png')">Solución juego 59</h4>
			<h4 class="pointer text-primary font-weight-bolder" onclick="muestraImg('./ingenio/sumaoculta60sol.png')">Solución juego 60</h4>
			<h4 class="pointer text-primary font-weight-bolder" onclick="muestraImg('./ingenio/sumaoculta61sol.png')">Solución juego 61</h4>
			<h4 class="pointer text-primary font-weight-bolder" onclick="muestraImg('./ingenio/sumaoculta62sol.png')">Solución juego 62</h4>
			<h4 class="pointer text-primary font-weight-bolder" onclick="muestraImg('./ingenio/sumaoculta63sol.png')">Solución juego 63</h4>
			<h4 class="pointer text-primary font-weight-bolder" onclick="muestraImg('./ingenio/sumaoculta64sol.png')">Solución juego 64</h4>
		</div>
		<div class="col-sm-7">
			<?php include "codigo-infeed-ok.shtml";?>
		</div>
	</div>

	<div class="row" style="background-color: #222;	padding: 8px; margin:10px 0; border-radius: 10px;">
		<div class="col-md-12" style="text-align: left; padding: 12px;">
				<a href="./curriculum-resumido.php">
						<h4 style="color: #cccccc;">Acerca de mi</h4>
				</a>
				<a href="./consultas.php">
						<h4 style="color: #cccccc;">Consultas</h4>
				</a>
		</div>
	</div>

</div>

<script>
	function muestraImg(param) {
		//	console.log('param: ', param);
		document.getElementById("imagen").innerHTML = '<img src=' + param + ' width="580" height="286" class="img-responsive"/>';
	}
</script>

</body>

</html>