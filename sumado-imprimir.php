<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="ISO-8859-1">
	<title>SUMADO Willie Verger Juegos de Ingenio</title>

	<meta name="description" content="SUDOKUS gratis, para imprimir y resolver con sus correspondientes soluciones.">
	<meta name="keywords" content="SUDOKUS, impresos para resolver, ingeniería, ingenio, resolucion problemas,Rosario,resolver problemas">

	<?php include 'genericheading.shtml';?>

</head>

<body onload="init()">

<?php include "menu2015.shtml";?>

<div class="container">
	<!-- Contenido de la pagina -->
	<a name="topedepagina"></a>

	<div>
	<button onclick="printDiv(false)">Imprimir juego</button>
	<!-- <button onclick="printDiv(true)">Imprimir Solucion</button> -->
	</div>



	<div class="imprimir" id="imprimir">

		<svg
			xmlns="http://www.w3.org/2000/svg"
			xmlns:xlink="http://www.w3.org/1999/xlink"
			width ="790" height= "1120"
			id = "pagina">


		<!-- viewBox tiene las medidas de un A4 vertical -->
		<!-- Outline the SVG viewport. -->
		<!-- Ojo! el texto SVG no admite caracteres acentuados -->


		<style>

		@import url("https://fonts.googleapis.com/css?family=Luckiest+Guy");
		@import url("https://fonts.googleapis.com/css?family=Sriracha");
		@import url('https://fonts.googleapis.com/css?family=Roboto');

		/*  @font-face { font-family: "Luckiest Guy"; src: url("https://fonts.googleapis.com/css?family=Luckiest+Guy"); } */


		@media print {
			/* Aquí irían tus reglas CSS específicas para imprimir */
		} 


		.trazo { fill:white; stroke:#333;stroke-width:5;opacity:1.0; }
		.auxiliar { fill:white; stroke:#888;stroke-width:1;opacity:1.0; }
		.marco { fill:white; stroke:#234;stroke-width:3;opacity:1.0; }

		.small { font-family: "Sriracha"; font-size: 12px; }
		.normal { font-family: "Roboto"; font-size: 16px; }
		.valor { font-family: "Luckiest Guy"; font-size: 24px; fill:#333; font: bold; dominant-baseline: central; text-anchor: middle;}
		.vert { font-family: 'Roboto', cursive; font-size: 28px; fill:#026; font: bold; dominant-baseline: middle; text-anchor: middle;
			visibility: visible;
			}
		.vertNP { 
				font-family: 'Caveat Brush', cursive; 
				font-size: 28px; fill:#026; 
				font: bold; dominant-baseline: middle; text-anchor: middle;
				display:none;
			}

		.title { font: bold 20px sans-serif; }
		.heavy { font-family: "Luckiest Guy"; font-size: 40px; }


		.imprimir{
		background: white;
		margin-right: 200px;
		margin-left: 200px;
		padding-left: 20px;
		padding-right: 20px;
		padding-top: 20px;
		max-width: 1000px;
		}
		.imprimir table{
		max-width: 960px;
		}


		</style>



		<rect width="790" height="1120" x="0"   y="0" fill="#eff"  stroke="#063" stroke-width="2" />

		<rect
		width="650"
		height="60"
		x="80"
		y="37"
		rx="8.0"
		ry="8.0"
		style="fill:#677821"
		id="rect4142" />

		<text
			x="104.0"
			y="80.0"
			id="text4144"
			class = "heavy"
			fill="#eee" >SUMADO
		</text>

		<text x="100" y="115">
				<tspan class="normal" x="100" dx="0" dy="20">Hay c&#237;rculos unidos por l&#237;neas para formar cuadrados y tri&#225;ngulos.  En los c&#237;rculos hay </tspan>
				<tspan class="normal" x="100" dx="0" dy="20">n&#250;meros consecutivos a partir del 1. El n&#250;mero dentro de cada tri&#225;ngulo o cuadrado es </tspan>
				<tspan class="normal" x="100" dx="0" dy="20">la suma de los valores de los c&#237;rculos que son v&#233;rtices de esa figura.  El objetivo del </tspan>
				<tspan class="normal" x="100" dx="0" dy="20">juego es deducir los valores de cada c&#237;rculo, algunos de los cuales ya est&#225;n asignados.</tspan>
		</text>


		<!-- ahora el tablero sumado 3 x 3 -->
		<g id="R1" transform="translate(100,300)">

			<!-- lineas horizontales que unen vertices (lados) -->
			<line x1="000" y1="000" x2="200" y2="000" class = "trazo" />
			<line x1="000" y1="100" x2="200" y2="100" class = "trazo" />
			<line x1="000" y1="200" x2="200" y2="200" class = "trazo" />

			<!-- verticales -->
			<line x1="000" y1="000" x2="000" y2="200" class = "trazo" />
			<line x1="100" y1="000" x2="100" y2="200" class = "trazo" />
			<line x1="200" y1="000" x2="200" y2="200" class = "trazo" />

			<!-- diagonales -->
			<line x1="000" y1="000" x2="200" y2="200" class = "trazo" />

			<!-- los circulos -->
			<circle id="circ00" cx="000" cy="000" r="20" class = "trazo" />
			<circle id="circ01" cx="100" cy="000" r="20" class = "trazo" />
			<circle id="circ02" cx="200" cy="000" r="20" class = "trazo" />

			<circle id="circ10" cx="000" cy="100" r="20" class = "trazo" />
			<circle id="circ11" cx="100" cy="100" r="20" class = "trazo" />
			<circle id="circ12" cx="200" cy="100" r="20" class = "trazo" />

			<circle id="circ20" cx="000" cy="200" r="20" class = "trazo" />
			<circle id="circ21" cx="100" cy="200" r="20" class = "trazo" />
			<circle id="circ22" cx="200" cy="200" r="20" class = "trazo" />

			<!-- las sumas en los poligonos -->
			<!-- dominant-baseline="middle" text-anchor="middle"  -->
			<text id="sum3x3Apos00" x="032" y="070" class="valor" >N</text>
			<text id="sum3x3Apos01" x="068" y="032" class="valor" >N</text>
			<text id="sum3x3Apos02" x="150" y="050" class="valor" >N</text>
			<text id="sum3x3Apos03" x="050" y="150" class="valor" >N</text>
			<text id="sum3x3Apos04" x="132" y="170" class="valor" >N</text>
			<text id="sum3x3Apos05" x="168" y="132" class="valor" >N</text>

			<!-- Valores de los vertices -->
			<!-- dominant-baseline="middle" text-anchor="middle"  -->
			<text id="sum3x3Aver00" x="000" y="000" class="vert" >00</text>
			<text id="sum3x3Aver01" x="100" y="000" class="vertNP" >00</text>
			<text id="sum3x3Aver02" x="200" y="000" class="vertNP" >00</text>
			<text id="sum3x3Aver03" x="000" y="100" class="vertNP" >00</text>
			<text id="sum3x3Aver04" x="100" y="100" class="vertNP" >00</text>
			<text id="sum3x3Aver05" x="200" y="100" class="vertNP" >00</text>
			<text id="sum3x3Aver06" x="000" y="200" class="vertNP" >00</text>
			<text id="sum3x3Aver07" x="100" y="200" class="vertNP" >00</text>
			<text id="sum3x3Aver08" x="200" y="200" class="vert" >00</text>

		</g>


		<!-- sumado 4 x 3 -->
		<g id="R2" transform="translate(400 300)">

			<!-- lineas horizontales que unen vertices (lados) -->
			<line x1="000" y1="000" x2="300" y2="000" class = "trazo" />
			<line x1="000" y1="100" x2="300" y2="100" class = "trazo" />
			<line x1="000" y1="200" x2="300" y2="200" class = "trazo" />

			<!-- verticales -->
			<line x1="000" y1="000" x2="000" y2="200" class = "trazo" />
			<line x1="100" y1="000" x2="100" y2="200" class = "trazo" />
			<line x1="200" y1="000" x2="200" y2="200" class = "trazo" />
			<line x1="300" y1="000" x2="300" y2="200" class = "trazo" />

			<!-- diagonales -->
			<line x1="000" y1="000" x2="100" y2="100" class = "trazo" />
			<line x1="000" y1="100" x2="100" y2="200" class = "trazo" />
			<line x1="200" y1="100" x2="300" y2="000" class = "trazo" />
			<line x1="200" y1="200" x2="300" y2="100" class = "trazo" />

			<!-- los circulos -->
			<circle id="circ00" cx="000" cy="000" r="20" class = "trazo" />
			<circle id="circ00" cx="100" cy="000" r="20" class = "trazo" />
			<circle id="circ01" cx="200" cy="000" r="20" class = "trazo" />
			<circle id="circ02" cx="300" cy="000" r="20" class = "trazo" />

			<circle id="circ20" cx="000" cy="100" r="20" class = "trazo" />
			<circle id="circ20" cx="100" cy="100" r="20" class = "trazo" />
			<circle id="circ21" cx="200" cy="100" r="20" class = "trazo" />
			<circle id="circ22" cx="300" cy="100" r="20" class = "trazo" />

			<circle id="circ10" cx="000" cy="200" r="20" class = "trazo" />
			<circle id="circ10" cx="100" cy="200" r="20" class = "trazo" />
			<circle id="circ11" cx="200" cy="200" r="20" class = "trazo" />
			<circle id="circ12" cx="300" cy="200" r="20" class = "trazo" />

			<!-- las sumas en los poligonos -->
			<!-- dominant-baseline="middle" text-anchor="middle"  -->
			<text id="sum4x3Apos00" x="032" y="068" class="valor" >N</text>
			<text id="sum4x3Apos01" x="068" y="032" class="valor" >N</text>
			<text id="sum4x3Apos02" x="150" y="050" class="valor" >N</text>
			<text id="sum4x3Apos03" x="232" y="032" class="valor" >N</text>
			<text id="sum4x3Apos04" x="268" y="068" class="valor" >N</text>
			<text id="sum4x3Apos05" x="032" y="168" class="valor" >N</text>
			<text id="sum4x3Apos06" x="068" y="132" class="valor" >N</text>
			<text id="sum4x3Apos07" x="150" y="150" class="valor" >N</text>
			<text id="sum4x3Apos08" x="232" y="132" class="valor" >N</text>
			<text id="sum4x3Apos09" x="268" y="168" class="valor" >N</text>

			<!-- Valores de los vertices -->
			<text id="sum4x3Aver00" x="000" y="000" class="vert" >00</text>
			<text id="sum4x3Aver01" x="100" y="000" class="vertNP" >00</text>
			<text id="sum4x3Aver02" x="200" y="000" class="vertNP" >00</text>
			<text id="sum4x3Aver03" x="300" y="000" class="vert" >00</text>

			<text id="sum4x3Aver04" x="000" y="100" class="vertNP" >00</text>
			<text id="sum4x3Aver05" x="100" y="100" class="vertNP" >00</text>
			<text id="sum4x3Aver06" x="200" y="100" class="vertNP" >00</text>
			<text id="sum4x3Aver07" x="300" y="100" class="vertNP" >00</text>

			<text id="sum4x3Aver08" x="000" y="200" class="vertNP" >00</text>
			<text id="sum4x3Aver09" x="100" y="200" class="vert" >00</text>
			<text id="sum4x3Aver10" x="200" y="200" class="vert" >00</text>
			<text id="sum4x3Aver11" x="300" y="200" class="vertNP" >00</text>

		</g>


		<!-- sumado 4 x 4 -->
		<g id="R3" transform="translate(400 600)">

		<!-- lineas horizontales que unen vertices (lados) -->
		<line x1="000" y1="000" x2="300" y2="000" class = "trazo" />
		<line x1="000" y1="100" x2="300" y2="100" class = "trazo" />
		<line x1="000" y1="200" x2="300" y2="200" class = "trazo" />
		<line x1="000" y1="300" x2="300" y2="300" class = "trazo" />

		<!-- verticales -->
		<line x1="000" y1="000" x2="000" y2="300" class = "trazo" />
		<line x1="100" y1="000" x2="100" y2="300" class = "trazo" />
		<line x1="200" y1="000" x2="200" y2="300" class = "trazo" />
		<line x1="300" y1="000" x2="300" y2="300" class = "trazo" />

		<!-- diagonales -->
		<line x1="000" y1="100" x2="100" y2="000" class = "trazo" />
		<line x1="000" y1="200" x2="100" y2="300" class = "trazo" />
		<line x1="200" y1="000" x2="300" y2="100" class = "trazo" />
		<line x1="200" y1="300" x2="300" y2="200" class = "trazo" />

		<!-- los circulos -->
		<circle id="C0" cx="000" cy="000" r="20" class = "trazo" />

		<use xlink:href="#C0" transform="translate(000 000)"/>
		<use xlink:href="#C0" transform="translate(100 000)"/>
		<use xlink:href="#C0" transform="translate(200 000)"/>
		<use xlink:href="#C0" transform="translate(300 000)"/>

		<use xlink:href="#C0" transform="translate(000 100)"/>
		<use xlink:href="#C0" transform="translate(100 100)"/>
		<use xlink:href="#C0" transform="translate(200 100)"/>
		<use xlink:href="#C0" transform="translate(300 100)"/>

		<use xlink:href="#C0" transform="translate(000 200)"/>
		<use xlink:href="#C0" transform="translate(100 200)"/>
		<use xlink:href="#C0" transform="translate(200 200)"/>
		<use xlink:href="#C0" transform="translate(300 200)"/>

		<use xlink:href="#C0" transform="translate(000 300)"/>
		<use xlink:href="#C0" transform="translate(100 300)"/>
		<use xlink:href="#C0" transform="translate(200 300)"/>
		<use xlink:href="#C0" transform="translate(300 300)"/>


			<!-- las sumas en los poligonos -->
			<text id="sum4x4Apos00" x="032" y="032" class="valor" >N</text>
			<text id="sum4x4Apos01" x="068" y="068" class="valor" >N</text>
			<text id="sum4x4Apos02" x="150" y="050" class="valor" >N</text>
			<text id="sum4x4Apos03" x="232" y="068" class="valor" >N</text>
			<text id="sum4x4Apos04" x="268" y="032" class="valor" >N</text>
			<text id="sum4x4Apos05" x="050" y="150" class="valor" >N</text>
			<text id="sum4x4Apos06" x="150" y="150" class="valor" >N</text>
			<text id="sum4x4Apos07" x="250" y="150" class="valor" >N</text>
			<text id="sum4x4Apos08" x="032" y="268" class="valor" >N</text>
			<text id="sum4x4Apos09" x="068" y="232" class="valor" >N</text>
			<text id="sum4x4Apos10" x="150" y="250" class="valor" >N</text>
			<text id="sum4x4Apos11" x="232" y="232" class="valor" >N</text>
			<text id="sum4x4Apos12" x="268" y="268" class="valor" >N</text>

			<!-- Valores de los vertices -->
			<!-- dominant-baseline="middle" text-anchor="middle"  -->
			<text id="sum4x4Aver00" x="000" y="000" class="vertNP" >00</text>
			<text id="sum4x4Aver01" x="100" y="000" class="vertNP" >00</text>
			<text id="sum4x4Aver02" x="200" y="000" class="vert" >00</text>
			<text id="sum4x4Aver03" x="300" y="000" class="vertNP" >00</text>

			<text id="sum4x4Aver04" x="000" y="100" class="vert" >00</text>
			<text id="sum4x4Aver05" x="100" y="100" class="vertNP" >00</text>
			<text id="sum4x4Aver06" x="200" y="100" class="vertNP" >00</text>
			<text id="sum4x4Aver07" x="300" y="100" class="vertNP" >00</text>

			<text id="sum4x4Aver08" x="000" y="200" class="vertNP" >00</text>
			<text id="sum4x4Aver09" x="100" y="200" class="vertNP" >00</text>
			<text id="sum4x4Aver10" x="200" y="200" class="vertNP" >00</text>
			<text id="sum4x4Aver11" x="300" y="200" class="vert" >00</text>

			<text id="sum4x4Aver12" x="000" y="300" class="vertNP" >00</text>
			<text id="sum4x4Aver13" x="100" y="300" class="vert" >00</text>
			<text id="sum4x4Aver14" x="200" y="300" class="vertNP" >00</text>
			<text id="sum4x4Aver15" x="300" y="300" class="vertNP" >00</text>

		</g>



		<g id="GrillaA4" transform="translate(0 0)">
		</g>


		<text
		x="90.0"
		y="600.0" >
		<tspan class="normal" x="100" dx="0" dy="22">Descargar aplicaci&#243;n SUMADO </tspan>
		<tspan class="normal" x="100" dx="0" dy="22">desde el Play Store de Google</tspan>
		<tspan class="normal" x="100" dx="0" dy="22"> </tspan>
		<tspan class="normal" x="100" dx="0" dy="22"></tspan>

		</text>



		<image
		y="660"
		x="120"
		id="image5090"
		xlink:href="data:image/png;base64,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  "
		style="image-rendering:optimizeQuality"
		preserveAspectRatio="none"
		height="150"
		width="150" />


		</svg>


	</div>




	<!-- inicio de los scripts -->
	<script >

		const	
			DEBUG = false;
			//	DEBUG = true;


		function init() {
			if (DEBUG) { console.log("function init() beginnen Version 11");}
			GenJuego("sum3x3A");
			GenJuego("sum4x3A");
			GenJuego("sum4x4A");
			if (DEBUG)
			{
				DibujaGrillaA4();
			}
		};

		

		function GenJuego( modGrilla)			//	genera un nuevo juego
		{
			//	la funciones para preparacion de nuevo juego
			//	modGrilla: es el modelo de grila, filas columnas y variante
			//	Identificacion de los modelos de grilla
			//	sum3x3A
			//	sum4*3A
			//	sum4x4A

			var aTemp = undefined,
				i = undefined,
				j = undefined,
				aSumaPolig = [],	//	array con suma de los poligonos
				aVertex = [],			//	para ubicar numeros aleatoriamente
				nNum = undefined, //	
				nFil = undefined, //	cantidad de filas
				nCol = undefined	//	cantidad de columnas
				//	aNumeros = [],	//	array con los numeros
				//	aVertices = []		//	array con datos de vertices

			switch(modGrilla) {
				case "sum3x3A":
					// code block
					nFil = 3;
					nCol = 3;
					break;

				case "sum4x3A":
					// code block
					nFil = 3;
					nCol = 4;
					break;

				case "sum4x4A":
					// code block
					nFil = 4;
					nCol = 4;
					break;

				default:
					// code block
			}

			//	console.log( "nFil, nCol: " + nFil + ", " + nCol );

			for ( i = 0; i < nCol; i++){
				for ( j = 0; j < nFil; j++)
				{
					nNum = 1 + i + ( j * nCol );
					aVertex.push(nNum);
					//	console.log( "nNum, aVertex[i]: " + nNum + ", " + aVertex[i] );
				}
			}

			//	shuffle the vertex
			//	Scheitelpunkte vermischen
			for(i=0; i< (nFil * nCol * 4); i++){
				var from = Math.floor(Math.random()* nFil * nCol);
				var to = Math.floor(Math.random()* nFil * nCol);
				var tmp = aVertex[from];
				aVertex[from] = aVertex[to];
				aVertex[to] = tmp;
				//	console.log( "from, to: " + from + ", " + to );
			}

			//	console.log("aVertex:" + aVertex );



			////////////////////////////////////////////////////
			//	Actualizamos la suma de los poligonos
			//	dependiente del modelo de grilla
			//	Grilla  3x3 modelo A
			switch(modGrilla) {
				case "sum3x3A":
					// code block
					aSumaPolig.push( aVertex[0]+ aVertex[3]+ aVertex[4] );
					aSumaPolig.push( aVertex[0]+ aVertex[1]+ aVertex[4] );
					aSumaPolig.push( aVertex[1]+ aVertex[2]+ aVertex[4]+ aVertex[5] );
					aSumaPolig.push( aVertex[3]+ aVertex[4]+ aVertex[6]+ aVertex[7] );
					aSumaPolig.push( aVertex[4]+ aVertex[7]+ aVertex[8] );
					aSumaPolig.push( aVertex[4]+ aVertex[5]+ aVertex[8] );

					break;

				case "sum4x3A":
					// code block
					aSumaPolig.push( aVertex[0]+ aVertex[4]+ aVertex[5] );
					aSumaPolig.push( aVertex[0]+ aVertex[1]+ aVertex[5] );
					aSumaPolig.push( aVertex[1]+ aVertex[2]+ aVertex[5]+ aVertex[6] );
					aSumaPolig.push( aVertex[2]+ aVertex[3]+ aVertex[6] );
					aSumaPolig.push( aVertex[3]+ aVertex[6]+ aVertex[7] );

					aSumaPolig.push( aVertex[4]+ aVertex[8]+ aVertex[9] );
					aSumaPolig.push( aVertex[4]+ aVertex[5]+ aVertex[9] );
					aSumaPolig.push( aVertex[5]+ aVertex[6]+ aVertex[9]+ aVertex[10] );
					aSumaPolig.push( aVertex[6]+ aVertex[7]+ aVertex[10] );
					aSumaPolig.push( aVertex[7]+ aVertex[10]+ aVertex[11] );
					break;

				case "sum4x4A":
					// code block
					aSumaPolig.push( aVertex[0]+ aVertex[1]+ aVertex[4] );
					aSumaPolig.push( aVertex[1]+ aVertex[4]+ aVertex[5] );
					aSumaPolig.push( aVertex[1]+ aVertex[2]+ aVertex[5]+ aVertex[6] );
					aSumaPolig.push( aVertex[2]+ aVertex[6]+ aVertex[7] );
					aSumaPolig.push( aVertex[2]+ aVertex[3]+ aVertex[7] );

					aSumaPolig.push( aVertex[4]+ aVertex[5]+ aVertex[8]+ aVertex[9] );
					aSumaPolig.push( aVertex[5]+ aVertex[6]+ aVertex[9]+ aVertex[10] );
					aSumaPolig.push( aVertex[6]+ aVertex[7]+ aVertex[10]+ aVertex[11] );

					aSumaPolig.push( aVertex[8]+ aVertex[12]+ aVertex[13] );
					aSumaPolig.push( aVertex[8]+ aVertex[9]+ aVertex[13] );
					aSumaPolig.push( aVertex[9]+ aVertex[10]+ aVertex[13]+ aVertex[14] );
					aSumaPolig.push( aVertex[10]+ aVertex[11]+ aVertex[14] );
					aSumaPolig.push( aVertex[11]+ aVertex[14]+ aVertex[15] );
					break;


				default:
					// code block
			}

			//	console.log(aSumaPolig);


			//	colocar sumas en poligonos
			for ( var i=0;i<aSumaPolig.length ;i++ )
			{
				var str = "00" + i;
				var res = str.substr(-2);
				var textNode = undefined;

				//	console.log( modGrilla + "pos" + res  );
				svgTextElement = document.getElementById( modGrilla + "pos" + res );
				//	console.log("sum3x3pos0"+i + "  -  " + "sum3x3pos0"+i)
				//	console.log(svgTextElement)
				textNode = svgTextElement.childNodes[0];
				textNode.nodeValue = aSumaPolig[i] ;

			}


			//	colocar valores en vertices
			for ( var i=0;i<aVertex.length ;i++ )
			{
				var str = "00" + i;
				var res = str.substr(-2);

				svgTextElement = document.getElementById( modGrilla + "ver" + res );		//	"sum3x3ver0"+i);

				//	console.log( "svgTextElement: " + recorrerObjeto(svgTextElement.childNodes[0]) );

				var c = svgTextElement.childNodes;
				var txt = c.length + " - ";
				var j;
				for (j = 0; j < c.length; j++) {
					txt = txt + " * " + j + " * " + c[j].nodeName + " * ";
				}
				console.log( "svgTextElement.childNodes: " + txt );
				//	console.log( "svgTextElement: " + c[0].nodeValue + ", " + recorrerObjeto(c) );

				textNode = svgTextElement.childNodes[0];
				textNode.nodeValue = aVertex[i] ;
			}

		}


		function recorrerObjeto(objeto)
		{
			var respuesta="";
			for (var i in objeto)
			{
				respuesta+=i+": "+objeto[i]+"<br>";
			}
			return respuesta
		}



		function DibujaGrillaA4() {
			//	dibujar grilla A4 de fondo
			//	var grillaA4Elem = document.getElementById( "grillaA4" );
		var svg = document.getElementById('pagina');

			const	aLinePos = [
				[ 000, 100, 795, 100],	//	horizontales
				[ 000, 200, 795, 200],
				[ 000, 300, 795, 300],
				[ 000, 400, 795, 400],
				[ 000, 500, 795, 500],
				[ 000, 600, 795, 600],
				[ 000, 700, 795, 700],
				[ 000, 800, 795, 800],
				[ 000, 900, 795, 900],
				[ 000,1000, 795,1000],
				[ 000,1100, 795,1100],
				[ 000,1200, 795,1200],
				[ 100, 000, 100,1200],	//	verticales
				[ 200, 000, 200,1200],
				[ 300, 000, 300,1200],
				[ 400, 000, 400,1200],
				[ 500, 000, 500,1200],
				[ 600, 000, 600,1200],
				[ 700, 000, 700,1200],
				[ 800, 000, 800,1200]
			]

			for (var i=0; i<aLinePos.length; i++ )
			{
				for (var j=0; j<aLinePos[i].length; j++ )
				{
					var lElement = document.createElementNS('http://www.w3.org/2000/svg', 'line');
					lElement.setAttributeNS(null, 'x1', aLinePos[i][0]);
					lElement.setAttributeNS(null, 'y1', aLinePos[i][1]);
					lElement.setAttributeNS(null, 'x2', aLinePos[i][2]);
					lElement.setAttributeNS(null, 'y2', aLinePos[i][3]);
					lElement.setAttributeNS(null, 'class', 'auxiliar');
					//	console.log("lElement: " + lElement );
					svg.appendChild(lElement);
			
				}
				var tElement = document.createElementNS('http://www.w3.org/2000/svg', 'text');
				tElement.setAttributeNS(null, 'x', aLinePos[i][0]+4);
				tElement.setAttributeNS(null, 'y', aLinePos[i][1]+12);
				tElement.setAttributeNS(null, 'class', "small");
				var txt = document.createTextNode( aLinePos[i][0] + aLinePos[i][1] );
				tElement.appendChild(txt);
				svg.appendChild(tElement);		
				//	console.log(tElement);		
				//	console.log( "tElement.childNodes: " + i + ", " + j + ", " + tElement.childNodes[0].nodeValue );
		
			}

		}

		/*
			<!-- lineas de guia para medir -->
			<!-- auxiliares horizontales -->
			<line id = "H1" x1="000" y1="000" x2="795" y2="000" class = "auxiliar" />

			<use xlink:href="#H1" transform="translate(000 100)"/>
			<use xlink:href="#H1" transform="translate(000 200)"/>
			<use xlink:href="#H1" transform="translate(000 300)"/>
			<use xlink:href="#H1" transform="translate(000 400)"/>
			<use xlink:href="#H1" transform="translate(000 500)"/>
			<use xlink:href="#H1" transform="translate(000 600)"/>
			<use xlink:href="#H1" transform="translate(000 700)"/>
			<use xlink:href="#H1" transform="translate(000 800)"/>
			<use xlink:href="#H1" transform="translate(000 900)"/>
			<use xlink:href="#H1" transform="translate(000 1000)"/>
			<use xlink:href="#H1" transform="translate(000 1100)"/>
			<use xlink:href="#H1" transform="translate(000 1200)"/>



			<!-- auxiliares verticales -->
			<g id = "V1" >
				<line x1="000" y1="000" x2="000" y2="1120" class = "auxiliar" />
			</g>

			<use xlink:href="#V1" transform="translate(100 000)"/>
			<use xlink:href="#V1" transform="translate(200 000)"/>
			<use xlink:href="#V1" transform="translate(300 000)"/>
			<use xlink:href="#V1" transform="translate(400 000)"/>
			<use xlink:href="#V1" transform="translate(500 000)"/>
			<use xlink:href="#V1" transform="translate(600 000)"/>
			<use xlink:href="#V1" transform="translate(700 000)"/>
			<use xlink:href="#V1" transform="translate(800 000)"/>
			<use xlink:href="#V1" transform="translate(900 000)"/>

			<use xlink:href="#V1" transform="translate(1000 000)"/>
			<use xlink:href="#V1" transform="translate(1100 000)"/>
			<use xlink:href="#V1" transform="translate(1200 000)"/>
			<use xlink:href="#V1" transform="translate(1300 000)"/>
			<use xlink:href="#V1" transform="translate(1400 000)"/>
			<use xlink:href="#V1" transform="translate(1500 000)"/>

			<!-- indicadores posicion pixel -->
			<text x="004" y="012" class="small">  0</text>
			<text x="104" y="012" class="small">  100</text>
			<text x="204" y="012" class="small">  200</text>
			<text x="304" y="012" class="small">  300</text>
			<text x="404" y="012" class="small">  400</text>
			<text x="504" y="012" class="small">  500</text>
			<text x="604" y="012" class="small">  600</text>
			<text x="704" y="012" class="small">  700</text>
			<text x="804" y="012" class="small">  800</text>
			<text x="904" y="012" class="small">  900</text>

			<text x="04" y="112" class="small">100</text>
			<text x="04" y="212" class="small">200</text>
			<text x="04" y="312" class="small">300</text>
			<text x="04" y="412" class="small">400</text>
			<text x="04" y="512" class="small">500</text>
			<text x="04" y="612" class="small">600</text>
			<text x="04" y="712" class="small">700</text>
			<text x="04" y="812" class="small">800</text>
			<text x="04" y="912" class="small">900</text>
			<text x="04" y="1012" class="small">1000</text>
			<text x="04" y="1112" class="small">1100</text>


		}
		*/


		function printDiv( lConSolucion ) {

			var objeto=document.getElementById('imprimir'); 
			//	console.log( "lConSolucion: " + lConSolucion );


			document.body.className = (lConSolucion ? "resuelto" : "noresuelto");
   
			//obtenemos el objeto a imprimir
			var ventana=window.open('','_blank');  //abrimos una ventana vacía nueva
			ventana.document.write(objeto.innerHTML);  //imprimimos el HTML del objeto en la nueva ventana
			ventana.document.close();  //cerramos el documento
			ventana.print();  //imprimimos la ventana
			ventana.close();  //cerramos la ventana
		}



	</script>


	<hr class="grosa">
	<!-- fin contenido -->
</div>

</body>
</html>
