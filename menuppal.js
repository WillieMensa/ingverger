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
		'	<li><a href="./ingenio.html">Ingenio   </a></li>' +
		'	<li><a href="./aplicaciones.html">Aplicaciones </a></li>' +
		'	<li class="dropdown">' +
		'		<a href="javascript:void(0)" class="dropbtn">Representac. Gráfica</a>' +
		'		<div class="dropdown-content">' +
		'			<a href="./guias-de-clase.html">Guías de Clase</a>' +
		'			<a href="./rg-material-estudio.html">Material adicional</a>' +
		'			<a href="./representacion-con-cad.html">Representación asistida con CAD</a>' +
		'			<a href="./repgrafsincorbata.html">Representaci&#243;n gr&#225;fica sin corbata</a>' +
		'		</div>' +
		'	</li>' +
		'	<li class="dropdown">' +
		'		<a href="javascript:void(0)" class="dropbtn">Publicaciones</a>' +
		'		<div class="dropdown-content">' +
		'			<a href="matematica-recreativa.html">Matemática recreativa</a>' +
		'			<a href="publicaciones-varias.html">Publicaciones varias</a>' +
		'			<a href="calendarios.html">Impresion calendarios y otros</a>' +
		'			<a href="galeria-imagenes.html">Galería de personajes</a>' +
		'		</div>' +
		'	<li><a href="./sitemap.html">Mapa del sitio </a></li>' +
		'	</li>' +
		'</ul>' ;

}

