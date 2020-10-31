/*
	menuppal.js
	2020.10.31 
*/

window.onload = function(){
	poneMenuPpal();
};


function poneMenuPpal() {

	document.getElementById('menuppal').innerHTML = 
		'	<ul id="mainMenu">' +
		'	<li><a href="./index.html">Inicio </a></li> ' +
		'	<li><a href="./ingenio.html">Ingenio                      </a></li>' +
		'	<li><a href="./aplicaciones.html">Aplicaciones            </a></li>' +
		'	<li class="dropdown">' +
		'		<a href="javascript:void(0)" class="dropbtn">Representac. Gráfica</a>' +
		'		<div class="dropdown-content">' +
		'			<a href="./temas-rep-graf.html">Material de estudio</a>' +
		'			<a href="./ver-publicac-rep-graf.html">Gu&iacute;as de Clase</a>' +
		'			<a href="./repgrafsincorbata.html">Representaci&#243;n gr&#225;fica sin corbata</a>' +
		'		</div>' +
		'	</li>' +
		'	<li class="dropdown">' +
		'		<a href="javascript:void(0)" class="dropbtn">Publicaciones</a>' +
		'		<div class="dropdown-content">' +
		'			<a href="publicaciones.php">Publicaciones varias</a>' +
		'			<a href="metodo-intelectual.php">Metodolog&iacute;a intelectual</a>' +
		'			<a href="calendarios.html">Impresion calendarios y otros</a>' +
		'		</div>' +
		'	</li>' +
		'</ul>' ;

}

