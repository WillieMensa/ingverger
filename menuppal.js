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
		'	<li><a href="index.html">Inicio </a></li> ' +
		'	<li class="dropdown">' +
		'		<a href="javascript:void(0)" class="dropbtn">Representac. Gráfica</a>' +
		'		<div class="dropdown-content">' +
		'			<a href="guias-de-clase.html">Guías de Clase</a>' +
		'			<a href="rg-material-estudio.html">Material adicional</a>' +
		'			<a href="representacion-con-cad.html">Representación asistida con CAD</a>' +
		'			<a href="caligrafia-croquis.html">Caligrafía y croquis</a>' +
		'			<a href="repgrafsincorbata.html">Representación gráfica sin corbata</a>' +
		'		</div>' +
		'	</li>' +
		'	<li class="dropdown">' +
		'		<a href="javascript:void(0)" class="dropbtn">Caricaturas</a>' +
		'		<div class="dropdown-content">' +
		'			<a href="galeria.html?clase=%22C%22">Conocidos</a>' +
		'			<a href="galeria.html?clase=%22M%22">Mensanos</a>' +
		'			<a href="galeria.html?clase=%22E%22">Periodistas</a>' +
		'			<a href="galeria.html?clase=%22P%22">Públicos</a>' +
		'			<a href="galeria.html?clase=%22AD%22">Artistas y Deportistas</a>' +
		'			<a href="galeria.html?clase=%22V%22">Varios</a>' +
		'		</div>' +
		'	</li>' +
		'	<li class="dropdown">' +
		'		<a href="javascript:void(0)" class="dropbtn">Publicaciones</a>' +
		'		<div class="dropdown-content">' +
		'			<a href="matematica-recreativa.html">Matemática recreativa</a>' +
		'			<a href="publicaciones-varias.html">Publicaciones varias</a>' +
		'			<a href="calendarios.html">Impresion calendarios y otros</a>' +
		'		</div>' +
		'	<li><a href="sitemap.html">Mapa del sitio </a></li>' +
		'	</li>' +
		'</ul>' ;

}

