/*
	presentaSumado.js
	2020 .10.17 
*/

const
	NCOL = 3,
	NFIL = 3,
	NPOLIG = 8,
	NVERT=9,
	DEBUG = false;
	//	DEBUG = true;

let 
	aVertex,					//	para ubicar numeros aleatoriamente
	nroPagina = 1,
	lConSoluc,				//	indicador esta mostrando solución
	nPagActual;				//	nro problema actual (el valor)
		


function init() {
	if (DEBUG) { console.log("function init() beginnen Version 11")}
	nPagActual = getNroPag();			//	leer nro problema actual
	document.getElementById("numero").value = nPagActual;
	if (DEBUG) { DibujaGrillaA4() }
	dibujaPag();
};


function dibujaPag() {
	leeJuegosPagina();

	//	detectar si se pidio con solucion
	var checkBox = document.getElementById("conSolucion");
	lConSoluc = checkBox.checked;

	//	console.log( 'lConSoluc: ', lConSoluc );
	presentaGrilla("RA");
	presentaGrilla("CO");

	presentaGrilla("DD");
	presentaGrilla("DI");
	
	presentaGrilla("CR");
	presentaGrilla("CL");
	//DibujaGrillaA4();
}


function presentaGrilla( modGrilla)			//	
{
	let aSuma, aVert;
	//	console.log('modGrilla: ', modGrilla);

	switch(modGrilla) {
		case "RA":
			aSuma = aRAsuma;
			aVert = aRAvert;
			break;
		case "CO":
			aSuma = aCOsuma;
			aVert = aCOvert;
			break;
		case "DD":
			aSuma = aDDsuma;
			aVert = aDDvert;
			break;
		case "DI":
			aSuma = aDIsuma;
			aVert = aDIvert;
			break;
		case "CR":
			aSuma = aCRsuma;
			aVert = aCRvert;
			break;
		case "CL":
			aSuma = aCLsuma;
			aVert = aCLvert;
			break;
	}

	//	colocar sumas en poligonos				RAsuma[i];
	//	for ( var i=0;i<RAsuma.length ;i++ )
	//	no puedo pasar el tipo de grila como parámetro pero todos los casos tienen 8 polígonos (triang) 
	for ( var i=0; i<8 ;i++ )
	{
		var str = "0" + i;
		var res = str.substr(-2);
		var textNode = undefined;
		//	console.log( modGrilla + "pos" + res  );
		svgTextElement = document.getElementById( 'suma' + modGrilla + "pos" + res );		//	"sum3x3ver0"+i);
		//	console.log( "svgTextElement: " + svgTextElement.childNodes[0] );
		textNode = svgTextElement.childNodes[0];
		textNode.nodeValue = aSuma[i];
	}

	//	colocar valores en vertices (para mostrar solucion)
	for ( var i=0; i<NVERT ;i++ )
	{
		var str = "0" + i;
		var res = str.substr(-2);
		var textNode = undefined;
		var idVert = modGrilla + "ver" + res 
		//	console.log( 'idVert: ', idVert );		
		svgTextElement = document.getElementById( idVert );		//	"RAver"+i);
		textNode = svgTextElement.childNodes[0];
		//	textNode.nodeValue = aVert[i];
		//	console.log('!lConSoluc:', !lConSoluc, 'lConSoluc:', lConSoluc)
		if (lConSoluc || i==0)
		{
			textNode.nodeValue = aVert[i];
		} else
		{
			textNode.nodeValue = ' ';
		}
	}
}


//	function original leeJuegoSerie() {		// recupera datos de un juego de serie
//	tomado de presenta suma oculta
function leeJuegosPagina() {		// recupera datos de un juegos para una página
	if (DEBUG){	console.log('--- inmediatemente antes de leer nPagActual: ', nPagActual )	}
	aRAvert = problemas[nPagActual-1].RAvert;	
	aRAsuma = problemas[nPagActual-1].RAsuma;	
	aCOvert = problemas[nPagActual-1].COvert;	
	aCOsuma = problemas[nPagActual-1].COsuma;	
	aDDvert = problemas[nPagActual-1].DDvert;	
	aDDsuma = problemas[nPagActual-1].DDsuma;
	aDIvert = problemas[nPagActual-1].DIvert;	
	aDIsuma = problemas[nPagActual-1].DIsuma;	
	aCRvert = problemas[nPagActual-1].CRvert;	
	aCRsuma = problemas[nPagActual-1].CRsuma;	
	aCLvert = problemas[nPagActual-1].CLvert;	
	aCLsuma = problemas[nPagActual-1].CLsuma;	

	if (DEBUG){
		console.log("aRAvert: ", aRAvert);
		console.log("aRAsuma: ", aRAsuma);
		console.log("aCOvert: ", aCOvert);
		console.log("aCOsuma: ", aCOsuma);
		console.log("aDDvert: ", aDDvert);
		console.log("aDDsuma: ", aDDsuma);
		console.log("aDIvert: ", aDIvert);
		console.log("aDIsuma: ", aDIsuma);
		console.log("aCRvert: ", aCRvert);
		console.log("aCRsuma: ", aCRsuma);
		console.log("aCLvert: ", aCLvert);
		console.log("aCLsuma: ", aCLsuma);
	}
}


function ajustaNumPag() {
	let input = document.getElementById("numero")
	//	variablename = (condition) ? value1:value2
	nPagActual = input.value >= problemas.length ? problemas.length : input.value;
	//	nPagActual = 
	input.max = problemas.length;

	setNroPagina();
	if (DEBUG) { console.log('ajustando nPagActual: ', nPagActual )};
	dibujaPag();
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
//			[ 00, 10, 145, 10],	//	horizontales
		[ 00, 20, 145, 20],
//			[ 00, 30, 145, 30],
		[ 00, 40, 145, 40],
[ 00, 50, 145, 50],
		[ 00, 60, 145, 60],
[ 00, 70, 145, 70],
		[ 00, 80, 145, 80],
[ 00, 90, 145, 90],
		[ 00,100, 145,100],
[ 00,110, 145,110],
		[ 00,120, 145,120],
[ 00,130, 145,130],
		[ 00,140, 145,140],
[ 00,150, 145,150],
		[ 00,160, 145,160],
[ 00,170, 145,170],
		[ 00,180, 145,180],
		[ 00,190, 145,190],
		[ 00,200, 145,200],
		[ 10, 00, 10,200],	//	verticales
		[ 20, 00, 20,200],
		[ 30, 00, 30,200],
		[ 40, 00, 40,200],
		[ 50, 00, 50,200],
		[ 60, 00, 60,200],
		[ 70, 00, 70,200],
		[ 80, 00, 80,200],
		[ 90, 00, 90,200],
		[100, 00,100,200],
		[110, 00,110,200],
		[120, 00,120,200],
		[130, 00,130,200],
		[140, 00,140,200]
	]

	for (var i=0; i<aLinePos.length; i++ )
	{
		//	console.log(i,j, aLinePos[i])
		for (var j=0; j<aLinePos[i].length; j++ )
		{
			var lElement = document.createElementNS('http://www.w3.org/2000/svg', 'line');
			lElement.setAttributeNS(null, 'x1', aLinePos[i][0]+'mm');
			lElement.setAttributeNS(null, 'y1', aLinePos[i][1]+'mm');
			lElement.setAttributeNS(null, 'x2', aLinePos[i][2]+'mm');
			lElement.setAttributeNS(null, 'y2', aLinePos[i][3]+'mm');
			lElement.setAttributeNS(null, 'class', 'auxiliar');
			//	console.log("lElement: " + lElement );
			svg.appendChild(lElement);
	
		}
		//	var tElement = document.createElementNS('http://www.w3.org/2000/svg', 'text');
		//	tElement.setAttributeNS(null, 'x', aLinePos[i][0]+4);
		//	tElement.setAttributeNS(null, 'y', aLinePos[i][1]+12);
		//	tElement.setAttributeNS(null, 'class', "small");
		//	var txt = document.createTextNode( aLinePos[i][0] + aLinePos[i][1] );
		//	tElement.appendChild(txt);
		//	svg.appendChild(tElement);		
		//	console.log(tElement);		
		//	console.log( "tElement.childNodes: " + i + ", " + j + ", " + tElement.childNodes[0].nodeValue );
	}
}


//	manejo del nro de problema
//----------------------------------
// save nro problema to localstorage
//----------------------------------
function setNroPagina() {
	if (DEBUG)	{	console.log('en setNroPagina(): ', nPagActual );	}
	setStorage("nroPagina", nPagActual);
	if (DEBUG)	{	console.log('nro de pagina fijado: ' + nPagActual);	}
	//	console.trace();
}

//-------------------------------------------
// get nro problema from localstorage
//-------------------------------------------
function getNroPag()
{
	let nCual = getStorage("nroPagina");
	if (DEBUG) { 	console.log('nCual: ' + nCual ); 	};
	if(isNaN(nCual) || nCual < nroPagina )
	{
		nCual = nroPagina;
	}
	return (nCual)
}

//=======================================
// BEGIN for set|get|clear localstorage
//=======================================
function setStorage(key, value)
{
	if(typeof(window.localStorage) != 'undefined'){
		window.localStorage.setItem(key,value);
	}
}

function getStorage(key)
{
	var value = null;
	if(typeof(window.localStorage) != 'undefined'){
		value = window.localStorage.getItem(key);
	}
	return value;
}

function clearStorage(key)
{
	if(typeof(window.localStorage) != 'undefined'){
		window.localStorage.removeItem(key);
	}
}




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



function myFunction() {
  var checkBox = document.getElementById("conSolucion");
	lConSolucion = checkBox.checked;
  //	if (checkBox.checked == true){
  //	  text.style.display = "block";
  //	} else {
  //	   text.style.display = "none";
  //	}
}