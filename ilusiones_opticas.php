<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="ISO-8859-1">
	<title>Aplicaciones</title>

	<!-- Etiqueta para que google verifique propiedad del sitio -->
	<meta name="google-site-verification" content="r3cCA4myBLQLXlQIYf_nW8ezBopbBrOM8nvgXL56UKM" />
	<meta name="description" content="Aplicaciones para Android y navegadores. Clever Games">
	<meta name="keywords" content="Clever Games, Pentomania, SUMADO, Memorioso, acertijos, caligraf�a t�cnica, dibujo tecnico, ingenier�a, juegos de ingenio, rompecabezas, sudoku gratis para imprimir, timer de numeros gigantes.">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="./css/_ingverger.css" >

	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

	<link rel="stylesheet" href="./css/_ingverger.css" >

</head>

<!-- <body id="grad1">  -->
<body class="claro">

<div class="container">
	<?php include "menu2015.shtml";?>

	<a name="TopOfPage"></a>
	<!-- Contenido de la pagina -->
	<div class="row fila10">
		<div class="col-sm-12">
			<h1> Aplicaciones </h1>
		</div>
	</div>








<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Tabbed info box</title>
  <style>

  /* General setup */

  html {
    font-family: sans-serif;
  }

  * {
    box-sizing: border-box;
  }

  body {
    margin: 0;
  }

  /* info-box setup */

  .info-box {
    width: 450px;
    height: 400px;
    margin: 0 auto;
  }

  /* styling info-box tabs */

  .info-box ul {
    padding-left: 0;
    margin-top: 0;
  }

  .info-box li {
    float: left;
    list-style-type: none;
    width: 150px;
  }

  .info-box li a {
    display: inline-block;
    text-decoration: none;
    width: 100%;
    line-height: 3;
    background-color: red;
    color: black;
    text-align: center;
  }

  .info-box li a:focus, .info-box li a:hover {
    background-color: #a60000;
    color: white;
  }

  .info-box li a.active {
    background-color: #a60000;
    color: white;
  }

  /* styling info-box panels */

  .info-box .panels {
    clear: both;
    position: relative;
    height: 352px;
  }

  .info-box article {
    background-color: #a60000;
    color: white;
    position: absolute;
    padding: 10px;
    height: 352px;
    top: 0;
    left: 0;
  }

  .info-box .active-panel {
    z-index: 1;
  }



  </style>
</head>
<body>

<section class="info-box">
  <ul>
    <li><a href="#" class="active">Tab 1</a></li>
    <li><a href="#">Tab 2</a></li>
    <li><a href="#">Tab 3</a></li>
  </ul>
  <div class="panels">
    <article class="active-panel">
      <h2>The first tab</h2>

      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque turpis nibh, porttitor nec venenatis eu, pulvinar in augue. Vestibulum et orci scelerisque, vulputate tellus quis, lobortis dui. Vivamus varius libero at ipsum mattis efficitur ut nec nisl. Nullam eget tincidunt metus. Donec ultrices, urna maximus consequat aliquet, dui neque eleifend lorem, a auctor libero turpis at sem. Aliquam ut porttitor urna. Nulla facilisi.</p>
    </article>
    <article>
      <h2>The second tab</h2>

      <p>This tab hasn't got any Lorem Ipsum in it. But the content isn't very exciting all the same.</p>
    </article>
    <article>
      <h2>The third tab</h2>

      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque turpis nibh, porttitor nec venenatis eu, pulvinar in augue. And now an ordered list: how exciting!</p>

      <ol>
        <li>dui neque eleifend lorem, a auctor libero turpis at sem.</li>
        <li>Aliquam ut porttitor urna.</li>
        <li>Nulla facilisi</li>
      </ol>
    </article>
  </div>
</section>











</div> 


<div class="row" style="background-color: #111;	padding: 8px; margin:10px 0; border-radius: 10px;">
	<div class="col-md-12" style="text-align: left; padding: 12px; color: #ddd;">
		<a href="./curriculum-resumido.php"><h4>Acerca de mi</h4></a>
		<a href="./consultas.php"><h4>Consultas</h4></a>
	</div>
</div>

	<script>

	var tabs = document.querySelectorAll('.info-box li a');
	var panels = document.querySelectorAll('.info-box article');

	for(i = 0; i < tabs.length; i++) {
	  var tab = tabs[i];
	  setTabHandler(tab, i);
	}

	function setTabHandler(tab, tabPos) {
	  tab.onclick = function() {
		for(i = 0; i < tabs.length; i++) {
		  tabs[i].className = '';
		}

		tab.className = 'active';

		for(i = 0; i < panels.length; i++) {
		  panels[i].className = '';
		}

		panels[tabPos].className = 'active-panel';
	  }
	}

	</script>


</body>

</html>
