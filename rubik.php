<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="ISO-8859-1">
	<title> Resolver cubo de Rubik </title>
	<meta name="description" content="Resoluci�n cubo de Rubik.">
	<meta name="keywords" content="Sistemas de Representaci�n, CAD 3D, caligraf�a t�cnica,ingenio, Resoluci�n cubo de Rubik, rompecabezas">

	<!-- aqui va el include file="genericheading shtml" -->
	<?php include 'genericheading.shtml';?>

	<style>
		.txtblanco { font-family: Roboto; stroke : #000; stroke-width : 1; font-size: 2.0em; }
		.txtsmall  { font-family: Roboto; stroke : #000; stroke-width : 1; font-size: 1.0em; }
	</style>

</head>

<body>
<?php include 'control_intrusos.php'; ?>
<div class="container">
	<?php include "menu2015.shtml";?>
	<a name="TopOfPage"></a>
	<!-- Contenido de la pagina -->
	<h1>Resolver el cubo de Rubik</h1>
	<hr>
	<div class="row">
		<div class="col-sm-3" style="text-align: center;">
			
			<img src="images/cuborubik.png" width="142" height="130" border="0" alt="cubo de rubik">
			
		</div>
		<div class="col-sm-7">
			<p>Las notas que siguen las hice, originalmente para mi mismo, como un recordatorio de los pasos que deb�a seguir para resolver el cubo de Rubik.<br>
			A esas notas agregu� las convenciones utilizadas para que se me pueda comenzar a entender.<br>
			Faltan detalles o aclaraciones? Seguramente. En ese caso me lo puedes solicitar con el <a href="consultas.php">formulario de consultas</a>.
			</p>
		</div>
		
		<div class="col-sm-2"></div>

		</div>
	</div>

	<hr>
	<div class="row">
		<div class="col-sm-3" style="background-color: #e6e6b8;">
			<svg height="220" width="220">
				<polygon  points="020,020 140,020 200,080 200,200 080,200 020,140" style="fill:white;stroke:black;stroke-width:4;"/>
				<polyline points="020,060 140,060 200,120" style="fill:none;stroke:black;stroke-width:1" />
				<polyline points="020,100 140,100 200,160" style="fill:none;stroke:black;stroke-width:1" />
				<polyline points="020,140 140,140 200,200" style="fill:none;stroke:black;stroke-width:1" />
				<polyline points="060,020 060,140 120,200" style="fill:none;stroke:black;stroke-width:1" />
				<polyline points="100,020 100,140 160,200" style="fill:none;stroke:black;stroke-width:1" />
				<polyline points="140,020 140,140 200,200" style="fill:none;stroke:black;stroke-width:1" />
				<polyline points="040,160 160,160 160,040" style="fill:none;stroke:black;stroke-width:1" />
				<polyline points="060,180 180,180 180,060" style="fill:none;stroke:black;stroke-width:1" />

				<!-- cara superior -->
				<polygon points="020,020 140,020 140,140 020,140" style="fill:#aaa;stroke-width:0 ; opacity: 0.5;" />
				<!-- cara derecha -->
				<polygon points="140,020 200,080 200,200 140,140 " style="fill:#9f3;stroke-width:0 ; opacity: 0.5;" />
				<!-- cara frontal -->
				<polygon points="020,140 140,140 200,200 080,200" style="fill:#f93;stroke-width:0 ; opacity: 0.5;" />

			</svg>
		</div>
		<div class="col-sm-7">
		<h2>Convenciones adoptadas</h2>
		<h3>Identificacion de las caras del cubo</h3>
		<p>Cada cara del cubo estar� vinculada a una letra para identificar los movimientos que se deben realizar. Utilizaremos una convenci�n ampliamente difundida que proviene de la identificaci�n en ingl�s.</p>
		<dl>
			<dd>U : superior - la cara grisada </dd>
			<dd>F . frontal  - la cara naranja claro </dd>
			<dd>R : derecha  - la cara verde claro</dd>
			<dd>L : izquierda - oculta; opuesta a la cara derecha</dd>
			<dd>B : trasera  - oculta; opuesta a la cara frontal</dd>
			<dd>D : inferior - oculta; opuesta a la cara superior</dd>
		</dl>
		<h3>Movimientos</h3>
		<p>Una secuencia de movimientos quedar� definida por las letras de las caras que se denen girar.
		Si el movimiento es en sentido horario se indica con la letra. 
		Si el movimiento es en sentido antihorario se indica con la letra seguida de un apostrofe.</p>
		<p>Ejemplo: <br>
		U : indica mover la cara superior en sentido horario.<br>
		U' : indica mover la cara superior en sentido antihorario.</p>
		
		<h3>Colores</h3>
		<p>Al referirnos a caras de los cubitos individuales que deben tener el mismo color los mostraremos todos de un mismo color. Las caras de cubitos que queden blancas ser� porque no importa el color de las mismas.</p>
		</div>

			<?php include 'codigo-anuncios-inarticle.shtml';?>

		<div class="col-sm-2"><!-- columna lateral derecha -->
		</div>
	</div>
	<hr>

	<div class="row">
		<div class="col-sm-3" style="background-color: #e6e6b8;">
			<svg height="220" width="220">
				<polygon  points="020,020 140,020 200,080 200,200 080,200 020,140" style="fill:white;stroke:black;stroke-width:4;"/>
				<polyline points="020,060 140,060 200,120" style="fill:none;stroke:black;stroke-width:1" />
				<polyline points="020,100 140,100 200,160" style="fill:none;stroke:black;stroke-width:1" />
				<polyline points="020,140 140,140 200,200" style="fill:none;stroke:black;stroke-width:1" />
				<polyline points="060,020 060,140 120,200" style="fill:none;stroke:black;stroke-width:1" />
				<polyline points="100,020 100,140 160,200" style="fill:none;stroke:black;stroke-width:1" />
				<polyline points="140,020 140,140 200,200" style="fill:none;stroke:black;stroke-width:1" />
				<polyline points="040,160 160,160 160,040" style="fill:none;stroke:black;stroke-width:1" />
				<polyline points="060,180 180,180 180,060" style="fill:none;stroke:black;stroke-width:1" />

				<!-- cara superior -->
				<polygon points="020,020 140,020 140,140 020,140" style="fill:#aaa;stroke-width:0 ; opacity: 0.5;" />
			</svg>

		</div>

		<div class="col-sm-7">
		<h2>Plan de resoluci�n</h2>
		<p>La idea es resolver el cubo por capas.
		<p>En primer lugar buscaremos conseguir una cara completa de un color. Ademas de verse todos los cubitos de esa cara del mismo color deben coincidir los colores de las aristas con los colores de las caras adyacentes. Igualmente los v�rtices, deben coincidir sus colores con los colores de los centros de las caras correspondientes.</p>
		<p>A continuaci�n se buscar� que la capa de cubitos individuales que siguen a la cara ya resuelta tambi�n tengan el color adecuado.</p>
		<p>Finalmente se buscara conseguir el color y la posici�n adecuada a los cubitos de la �ltima capa.</p>
		</div>
		<div class="col-sm-2"><!-- columna lateral derecha -->
		</div>
	</div>
	<hr>

	<div class="row">
		<div class="col-sm-3" style="background-color: #e6e6b8;">
			<svg height="220" width="220">

				<polygon  points="020,020 140,020 200,080 200,200 080,200 020,140" style="fill:white;stroke:black;stroke-width:4;"/>
				<polyline points="020,060 140,060 200,120" style="fill:none;stroke:black;stroke-width:1" />
				<polyline points="020,100 140,100 200,160" style="fill:none;stroke:black;stroke-width:1" />
				<polyline points="020,140 140,140 200,200" style="fill:none;stroke:black;stroke-width:1" />
				<polyline points="060,020 060,140 120,200" style="fill:none;stroke:black;stroke-width:1" />
				<polyline points="100,020 100,140 160,200" style="fill:none;stroke:black;stroke-width:1" />
				<polyline points="140,020 140,140 200,200" style="fill:none;stroke:black;stroke-width:1" />
				<polyline points="040,160 160,160 160,040" style="fill:none;stroke:black;stroke-width:1" />
				<polyline points="060,180 180,180 180,060" style="fill:none;stroke:black;stroke-width:1" />

				<!-- B -->	<polygon points="060,020 100,020 100,060 060,060" style="fill:#888;stroke-width:0; opacity: 0.5;" />
				<!-- D -->	<polygon points="020,060 060,060 060,100 020,100" style="fill:#888;stroke-width:0; opacity: 0.5;" />	
				<!-- E -->	<polygon points="060,060 100,060 100,100 060,100" style="fill:#888;stroke-width:0; opacity: 0.5;" />	
				<!-- F -->	<polygon points="100,060 140,060 140,100 100,100" style="fill:#888;stroke-width:0; opacity: 0.5;" />	
				<!-- H -->	<polygon points="060,100 100,100 100,140 060,140" style="fill:#888;stroke-width:0; opacity: 0.5;" />

				<!-- lat.der -->	<polygon points="140,060 180,100 180,140 140,100" style="fill:#99ff33;stroke-width:0; opacity: 0.5;" />
				<!-- frontal -->	<polygon points="060,140 100,140 140,180 100,180" style="fill:#ff9933;stroke-width:0; opacity: 0.5;" />

			</svg>

		</div>

		<div class="col-sm-7">
		<h2>Paso 1</h2>
		<p>Elegir un color, por ejemplo, el blanco. Con el centro de cara blanco hacia arriba, mover las aristas blancas para hacer una cruz. Cada arista deber� coincidir en sus colores con el centro de la cara superior blanca y el centro de la cara lateral.</p>

		<p>&nbsp;

		</div>

		<div class="col-sm-2"><!-- columna lateral derecha -->
		</div>
	</div>

	<hr>
	<div class="row">
		<div class="col-sm-3" style="background-color: #e6e6b8;">
			<svg height="220" width="220">
				<polygon  points="020,020 140,020 200,080 200,200 080,200 020,140" style="fill:white;stroke:black;stroke-width:4;"/>
				<polyline points="020,060 140,060 200,120" style="fill:none;stroke:black;stroke-width:1" />
				<polyline points="020,100 140,100 200,160" style="fill:none;stroke:black;stroke-width:1" />
				<polyline points="020,140 140,140 200,200" style="fill:none;stroke:black;stroke-width:1" />
				<polyline points="060,020 060,140 120,200" style="fill:none;stroke:black;stroke-width:1" />
				<polyline points="100,020 100,140 160,200" style="fill:none;stroke:black;stroke-width:1" />
				<polyline points="140,020 140,140 200,200" style="fill:none;stroke:black;stroke-width:1" />
				<polyline points="040,160 160,160 160,040" style="fill:none;stroke:black;stroke-width:1" />
				<polyline points="060,180 180,180 180,060" style="fill:none;stroke:black;stroke-width:1" />

				<!-- superior -->	<polygon points="020,020 140,020 140,140 020,140" style="fill:gray;stroke-width:0 ; opacity: 0.5;" />
				<!-- lat.der -->	<polygon points="140,020 160,040 160,080 180,100 180,140 160,120 160,160 140,140" style="fill:#9f3;stroke-width:0 ; opacity: 0.5;" />
				<!-- frontal -->	<polygon points="020,140 140,140 160,160 120,160 140,180 100,180 080,160 040,160" style="fill:#f93;stroke-width:0 ; opacity: 0.5;" />
			</svg>
		</div>

		<div class="col-sm-7">
		<h2>Paso 2</h2>
		<p>Completar la primer cara dando a los vertices la ubicaci�n y posici�n correspondiente.</p>
		<p>La figura muestra una vista an�loga a la que tenr�amos que tener al completar este paso.</p>
		<p>&nbsp;

		</div>

		<div class="col-sm-2"><!-- columna lateral derecha -->
		</div>
	</div>

	<hr>
	<div class="row">
		<div class="col-sm-3" style="background-color: #e6e6b8;">
			<svg height="220" width="220">
				<polygon  points="020,020 140,020 200,080 200,200 080,200 020,140" style="fill:white;stroke:black;stroke-width:4;"/>
				<polyline points="020,060 140,060 200,120" style="fill:none;stroke:black;stroke-width:1" />
				<polyline points="020,100 140,100 200,160" style="fill:none;stroke:black;stroke-width:1" />
				<polyline points="020,140 140,140 200,200" style="fill:none;stroke:black;stroke-width:1" />
				<polyline points="060,020 060,140 120,200" style="fill:none;stroke:black;stroke-width:1" />
				<polyline points="100,020 100,140 160,200" style="fill:none;stroke:black;stroke-width:1" />
				<polyline points="140,020 140,140 200,200" style="fill:none;stroke:black;stroke-width:1" />
				<polyline points="040,160 160,160 160,040" style="fill:none;stroke:black;stroke-width:1" />
				<polyline points="060,180 180,180 180,060" style="fill:none;stroke:black;stroke-width:1" />

				<!-- superior -->	<polygon points="020,020 140,020 140,140 020,140" style="fill:gray;stroke-width:0 ; opacity: 0.5;" />
				<!-- lat.der -->	<polygon points="140,020 180,060 180,180 140,140" style="fill:#9f3;stroke-width:0 ; opacity: 0.5;" />
				<!-- frontal -->	<polygon points="020,140 140,140 180,180 060,180" style="fill:#f93;stroke-width:0 ; opacity: 0.5;" />
			</svg>
		</div>

		<div class="col-sm-7">
		<h2>Paso 3</h2>
		<p>Completar la segunda capa.<br>
		Estan faltando las aristas que deben tener los colores de los cubitos centros de cara.<br>
		Una vez resuelto este paso tendremos una vista similar a la de la figuira.</p>

		<p>&nbsp;

		</div>

		<div class="col-sm-2"><!-- columna lateral derecha -->
		</div>
	</div>

	<hr>
	<div class="row">
		<div class="col-sm-3" style="background-color: #e6e6b8;">
		</div>
		<div class="col-sm-7">

		<!-- Codigo Adsense adaptable 2019 -->
		<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<ins class="adsbygoogle"
			 style="display:block; text-align:center;"
			 data-ad-layout="in-article"
			 data-ad-format="fluid"
			 data-ad-client="ca-pub-4076082038101002"
			 data-ad-slot="3860180150"></ins>
		<script>
			 (adsbygoogle = window.adsbygoogle || []).push({});
		</script>

		</div>
		<div class="col-sm-2"><!-- columna lateral derecha -->
		</div>
	</div>

	<hr>
	<div class="row">
		<div class="col-sm-3" style="background-color: #e6e6b8;">
			<svg height="220" width="220">
				<polygon  points="020,020 140,020 200,080 200,200 080,200 020,140" style="fill:white;stroke:black;stroke-width:4;"/>
				<polyline points="020,060 140,060 200,120" style="fill:none;stroke:black;stroke-width:1" />
				<polyline points="020,100 140,100 200,160" style="fill:none;stroke:black;stroke-width:1" />
				<polyline points="020,140 140,140 200,200" style="fill:none;stroke:black;stroke-width:1" />
				<polyline points="060,020 060,140 120,200" style="fill:none;stroke:black;stroke-width:1" />
				<polyline points="100,020 100,140 160,200" style="fill:none;stroke:black;stroke-width:1" />
				<polyline points="140,020 140,140 200,200" style="fill:none;stroke:black;stroke-width:1" />
				<polyline points="040,160 160,160 160,040" style="fill:none;stroke:black;stroke-width:1" />
				<polyline points="060,180 180,180 180,060" style="fill:none;stroke:black;stroke-width:1" />
				<polygon points="040,160 160,160 200,200 080,200" style="fill:#9f3;stroke-width:0  ; opacity: 0.5;" />
				<polygon points="160,040 200,080 200,200 160,160" style="fill:#f93;stroke-width:0  ; opacity: 0.5;" />
			</svg>
		</div>
		<div class="col-sm-7">
			<h2>Comenzamos la tercera y �ltima capa</h2>
			<p>En primer lugar invertimos la posici�n del cubo. La cara blanca quedar� hacia abajo y, en el caso de un cubo standard, hacia arriba deber�a quedar la capa amarilla.<br>
			Lo m�s probable es que la ultima cara est� desordenada, con los cubitos fuera de lugar y girados de la posici�n que debieran tener.<br>
			Se pueden presentar varios casos posibles
			</p>
			<p>
			&nbsp;
			<svg height="080" width="080">
				<text class = "txtsmall" x="00" y="010">a</text>	
				<polygon  points="010,010 070,010 070,070 010,070" style="fill:white;stroke:black;stroke-width:2;"/>
				<polyline points="010,030 070,030" style="fill:none;stroke:black;stroke-width:1" />
				<polyline points="010,050 070,050" style="fill:none;stroke:black;stroke-width:1" />
				<polyline points="030,010 030,070" style="fill:none;stroke:black;stroke-width:1" />
				<polyline points="050,010 050,070" style="fill:none;stroke:black;stroke-width:1" />
				<polygon points="030,030 050,030 050,050 030,050" style="fill:gray;stroke-width:0  ; opacity: 0.5;" />
			</svg>
			&nbsp;&nbsp;
			<svg height="080" width="080">
				<text class = "txtsmall" x="00" y="010">b</text>	
				<polygon  points="010,010 070,010 070,070 010,070" style="fill:white;stroke:black;stroke-width:2;"/>
				<polyline points="010,030 070,030" style="fill:none;stroke:black;stroke-width:1" />
				<polyline points="010,050 070,050" style="fill:none;stroke:black;stroke-width:1" />
				<polyline points="030,010 030,070" style="fill:none;stroke:black;stroke-width:1" />
				<polyline points="050,010 050,070" style="fill:none;stroke:black;stroke-width:1" />
				<polygon points="030,010 050,010 050,050 010,050 010,030 030,030" style="fill:gray;stroke-width:0  ; opacity: 0.5;" />
			</svg>
			&nbsp;&nbsp;
			<svg height="080" width="080">
				<text class = "txtsmall" x="00" y="010">c</text>	
				<polygon  points="010,010 070,010 070,070 010,070" style="fill:white;stroke:black;stroke-width:2;"/>
				<polyline points="010,030 070,030" style="fill:none;stroke:black;stroke-width:1" />
				<polyline points="010,050 070,050" style="fill:none;stroke:black;stroke-width:1" />
				<polyline points="030,010 030,070" style="fill:none;stroke:black;stroke-width:1" />
				<polyline points="050,010 050,070" style="fill:none;stroke:black;stroke-width:1" />
				<polygon points="010,030 070,030 070,050 010,050" style="fill:gray;stroke-width:0  ; opacity: 0.5;" />
			</svg>

		</div>
		<div class="col-sm-2"><!-- columna lateral derecha -->
		</div>
	</div>

	<hr>
	<div class="row">
		<div class="col-sm-3" style="background-color: #e6e6b8;">
			<svg height="220" width="220">
				<polygon  points="020,020 140,020 200,080 200,200 080,200 020,140" style="fill:white;stroke:black;stroke-width:4;"/>
				<polyline points="020,060 140,060 200,120" style="fill:none;stroke:black;stroke-width:1" />
				<polyline points="020,100 140,100 200,160" style="fill:none;stroke:black;stroke-width:1" />
				<polyline points="020,140 140,140 200,200" style="fill:none;stroke:black;stroke-width:1" />
				<polyline points="060,020 060,140 120,200" style="fill:none;stroke:black;stroke-width:1" />
				<polyline points="100,020 100,140 160,200" style="fill:none;stroke:black;stroke-width:1" />
				<polyline points="140,020 140,140 200,200" style="fill:none;stroke:black;stroke-width:1" />
				<polyline points="040,160 160,160 160,040" style="fill:none;stroke:black;stroke-width:1" />
				<polyline points="060,180 180,180 180,060" style="fill:none;stroke:black;stroke-width:1" />
				<polygon points="040,160 160,160 200,200 080,200" style="fill:#9f3;stroke-width:0  ; opacity: 0.5;" />
				<polygon points="160,040 200,080 200,200 160,160" style="fill:#f93;stroke-width:0  ; opacity: 0.5;" />

				<polygon points="060,020 100,020 100,060 140,060 140,100 100,100 100,140,060,140 060,100 020,100 020,060 060,060" style="fill:gray;stroke-width:0  ; opacity: 0.5;" />
			</svg>
		</div>

		<div class="col-sm-7">
			<h2>Paso 4</h2>
			<p>El objetivo es que se muestre una cruz con el color correcto, en nuestro caso ser�a el amarillo.</p>
			Seg�n el caso en que nos encontremos realizaremos los siguientes movimientos:</P>
			<dl>
				<dd>a/ F U R U' R' F' pasa al caso 'b' o 'c'</dd>
				<dd>b/ F U R U' R' F'</dd>
				<dd>c/ F R U R' U' F'</dd>
			</dl>
			<p>&nbsp;
		</div>

		<div class="col-sm-2"><!-- columna lateral derecha -->
		</div>
	</div>

	<hr>
	<div class="row">
		<div class="col-sm-3" style="background-color: #e6e6b8;">
			<svg height="220" width="220">
				<polygon  points="020,020 140,020 200,080 200,200 080,200 020,140" style="fill:white;stroke:black;stroke-width:4;"/>
				<polyline points="020,060 140,060 200,120" style="fill:none;stroke:black;stroke-width:1" />
				<polyline points="020,100 140,100 200,160" style="fill:none;stroke:black;stroke-width:1" />
				<polyline points="020,140 140,140 200,200" style="fill:none;stroke:black;stroke-width:1" />
				<polyline points="060,020 060,140 120,200" style="fill:none;stroke:black;stroke-width:1" />
				<polyline points="100,020 100,140 160,200" style="fill:none;stroke:black;stroke-width:1" />
				<polyline points="140,020 140,140 200,200" style="fill:none;stroke:black;stroke-width:1" />
				<polyline points="040,160 160,160 160,040" style="fill:none;stroke:black;stroke-width:1" />
				<polyline points="060,180 180,180 180,060" style="fill:none;stroke:black;stroke-width:1" />

				<polygon points="040,160 160,160 200,200 080,200" style="fill:#9f3;stroke-width:0  ; opacity: 0.5;" />
				<polygon points="160,040 200,080 200,200 160,160" style="fill:#f93;stroke-width:0  ; opacity: 0.5;" />
				<polygon points="020,020 140,020 140,140 020,140" style="fill:gray;stroke-width:0 ; opacity: 0.5;" />
			</svg>
		</div>

		<div class="col-sm-7">
			<h2>Paso 5</h2>
			<p>En este paso debemos mover los v�rtices para completar el color de la cara.</p>
			<p>La situaci�n de partida puede ser</p>
			<p>
			&nbsp;
			<svg height="110" width="110">
				<text class = "txtsmall" x="00" y="010">a</text>	
				<polygon  points="040,010 100,010 100,070 070,100 010,100 010,040" style="fill:white;stroke:black;stroke-width:2;"/>
				<polyline points="040,010 040,070 100,070" style="fill:none;stroke:black;stroke-width:1" />
				<polyline points="030,020 030,080 090,080" style="fill:none;stroke:black;stroke-width:1" />
				<polyline points="020,030 020,090 080,090" style="fill:none;stroke:black;stroke-width:1" />
				<polyline points="040,070 010,100" style="fill:none;stroke:black;stroke-width:1" />
				<polyline points="060,010 060,070 030,100" style="fill:none;stroke:black;stroke-width:1" />
				<polyline points="080,010 080,070 050,100" style="fill:none;stroke:black;stroke-width:1" />

				<polyline points="010,060 040,030 100,030" style="fill:none;stroke:black;stroke-width:1" />
				<polyline points="010,080 040,050 100,050" style="fill:none;stroke:black;stroke-width:1" />

				<polygon points="060,010 080,010 080,030 100,030 100,050 080,050 080,070 060,070 060,050 040,050 040,030 060,030" style="fill:gray;stroke-width:0  ; opacity: 0.5;" />
				<polygon points="040,050 040,070 030,080 030,060" style="fill:gray;stroke-width:0  ; opacity: 0.5;" />
			</svg>
			&nbsp;&nbsp;
			<svg height="110" width="110">
				<text class = "txtsmall" x="00" y="010">b</text>	
				<polygon  points="010,010 070,010 100,040 100,100 040,100 010,070" style="fill:white;stroke:black;stroke-width:2;"/>
				<polyline points="010,030 070,030 100,060" style="fill:none;stroke:black;stroke-width:1" />
				<polyline points="010,050 070,050 100,080" style="fill:none;stroke:black;stroke-width:1" />
				<polyline points="010,070 070,070 100,100" style="fill:none;stroke:black;stroke-width:1" />
				<polyline points="030,010 030,070 060,100" style="fill:none;stroke:black;stroke-width:1" />
				<polyline points="050,010 050,070 080,100" style="fill:none;stroke:black;stroke-width:1" />
				<polyline points="070,010 070,070" style="fill:none;stroke:black;stroke-width:1" />
				<polyline points="020,080 080,080 080,020" style="fill:none;stroke:black;stroke-width:1" />
				<polyline points="030,090 090,090 090,030" style="fill:none;stroke:black;stroke-width:1" />

				<polygon points="030,010 050,010 050,030 070,030 070,050 050,050 050,070 010,070 010,030 030,030" style="fill:gray;stroke-width:0  ; opacity: 0.5;" />
			</svg>
			&nbsp;&nbsp;
			<svg height="110" width="110">
				<text class = "txtsmall" x="00" y="010">c</text>	
				<polygon  points="010,010 070,010 100,040 100,100 040,100 010,070" style="fill:white;stroke:black;stroke-width:2;"/>
				<polyline points="010,030 070,030 100,060" style="fill:none;stroke:black;stroke-width:1" />
				<polyline points="010,050 070,050 100,080" style="fill:none;stroke:black;stroke-width:1" />
				<polyline points="010,070 070,070 100,100" style="fill:none;stroke:black;stroke-width:1" />
				<polyline points="030,010 030,070 060,100" style="fill:none;stroke:black;stroke-width:1" />
				<polyline points="050,010 050,070 080,100" style="fill:none;stroke:black;stroke-width:1" />
				<polyline points="070,010 070,070" style="fill:none;stroke:black;stroke-width:1" />
				<polyline points="020,080 080,080 080,020" style="fill:none;stroke:black;stroke-width:1" />
				<polyline points="030,090 090,090 090,030" style="fill:none;stroke:black;stroke-width:1" />

				<polygon points="030,010 050,010 050,030 070,030 070,050 050,050 050,070 030,070 030,050 010,050 010,030 030,030" style="fill:gray;stroke-width:0  ; opacity: 0.5;" />
				<polygon points="010,070 030,070 040,080 020,080" style="fill:gray;stroke-width:0  ; opacity: 0.5;" />
			</svg>
			</p>

			<p>En todos los casos haremos la secuencia:<br>
			&nbsp;&nbsp;&nbsp;R U R' U R U U R'</P>
			<p>Y luego reorientamos el cubo.</p>
		</div>

		<div class="col-sm-2"><!-- columna lateral derecha -->
		</div>
	</div>

	<hr>
	<div class="row">
		<div class="col-sm-3" style="background-color: #e6e6b8;">
			<svg height="220" width="220">
				<polygon  points="020,020 140,020 200,080 200,200 080,200 020,140" style="fill:white;stroke:black;stroke-width:4;"/>
				<polyline points="020,060 140,060 200,120" style="fill:none;stroke:black;stroke-width:1" />
				<polyline points="020,100 140,100 200,160" style="fill:none;stroke:black;stroke-width:1" />
				<polyline points="020,140 140,140 200,200" style="fill:none;stroke:black;stroke-width:1" />
				<polyline points="060,020 060,140 120,200" style="fill:none;stroke:black;stroke-width:1" />
				<polyline points="100,020 100,140 160,200" style="fill:none;stroke:black;stroke-width:1" />
				<polyline points="140,020 140,140 200,200" style="fill:none;stroke:black;stroke-width:1" />
				<polyline points="040,160 160,160 160,040" style="fill:none;stroke:black;stroke-width:1" />
				<polyline points="060,180 180,180 180,060" style="fill:none;stroke:black;stroke-width:1" />

				<polygon points="040,160 160,160 200,200 080,200" style="fill:#9f3;stroke-width:0  ; opacity: 0.5;" />
				<polygon points="160,040 200,080 200,200 160,160" style="fill:#f93;stroke-width:0  ; opacity: 0.5;" />
				<polygon points="020,020 140,020 140,140 020,140" style="fill:gray;stroke-width:0 ; opacity: 0.5;" />

				<!-- y ahora para identificar los diferentes cuadraditos -->
				<text class = "txtblanco" x="032" y="050">A</text>
				<text class = "txtblanco" x="112" y="050">C</text>
				<text class = "txtblanco" x="032" y="130">G</text>
				<text class = "txtblanco" x="112" y="130">I</text>

			</svg>
		</div>

		<div class="col-sm-7">
			<h2>Paso 6</h2>
			<p>En este paso vamos a posicionar correctamente los v�rtices.</p>
			<p>Tenemos una secuencia que produce el desplazamiento en sentido horario de los v�rtices A, C e I. En definitiva, intercambia los v�rtices C e I.<br>
			&nbsp;&nbsp;&nbsp;R' F R' B B R F' R' B B R R U'</p>
			<p>Y tenemos una secuencia que permuta directamente los v�rtices C e I:<br>
			&nbsp;&nbsp;&nbsp;(L' U R U' L U R') (R U R') U (R U U R')</p>
		</div>

		<div class="col-sm-2"><!-- columna lateral derecha -->
		</div>
	</div>

	<hr>
	<div class="row">
		<div class="col-sm-3" style="background-color: #e6e6b8;">
			<svg height="220" width="220">
				<polygon  points="020,020 140,020 200,080 200,200 080,200 020,140" style="fill:white;stroke:black;stroke-width:4;"/>
				<polyline points="020,060 140,060 200,120" style="fill:none;stroke:black;stroke-width:1" />
				<polyline points="020,100 140,100 200,160" style="fill:none;stroke:black;stroke-width:1" />
				<polyline points="020,140 140,140 200,200" style="fill:none;stroke:black;stroke-width:1" />
				<polyline points="060,020 060,140 120,200" style="fill:none;stroke:black;stroke-width:1" />
				<polyline points="100,020 100,140 160,200" style="fill:none;stroke:black;stroke-width:1" />
				<polyline points="140,020 140,140 200,200" style="fill:none;stroke:black;stroke-width:1" />
				<polyline points="040,160 160,160 160,040" style="fill:none;stroke:black;stroke-width:1" />
				<polyline points="060,180 180,180 180,060" style="fill:none;stroke:black;stroke-width:1" />

				<polygon points="040,160 160,160 200,200 080,200" style="fill:#9f3;stroke-width:0  ; opacity: 0.5;" />
				<polygon points="160,040 200,080 200,200 160,160" style="fill:#f93;stroke-width:0  ; opacity: 0.5;" />
				<polygon points="020,020 140,020 140,140 020,140" style="fill:gray;stroke-width:0 ; opacity: 0.5;" />

				<!-- y ahora para identificar los diferentes cuadraditos -->
				<text class = "txtblanco" x="072" y="050">B</text>
				<text class = "txtblanco" x="032" y="090">D</text>
				<text class = "txtblanco" x="112" y="090">F</text>
				<text class = "txtblanco" x="072" y="130">H</text>

			</svg>
		</div>

		<div class="col-sm-7">
			<h2>Paso 7</h2>
			<p>En este paso vamos a posicionar correctamente las aristas de la �ltima capa. Para esta operaci�n disponemos de varias secuencias.</p>
			<dl>
				<dd>a. Desplazamiento en sentido horario de las aristas D, F y H:<br>
					&nbsp;&nbsp;&nbsp;F F U L R' F F L' R U F F</dd>
				<dd>b. Desplazamiento en sentido antihorario de las aristas D, F y H:<br>
					&nbsp;&nbsp;&nbsp;F F U' L R' F F L' R U' F F</dd>
				<dd>c. Intercambio de aristas; por ejemplo D con H:<br>
					&nbsp;&nbsp;(R U R') U (R U U R') U
								(L' U' L) U' (L' U U L) U'</dd>
			</dl>
		</div>

		<div class="col-sm-2"><!-- columna lateral derecha -->
		</div>
	</div>

	<hr>
	<div class="row">
		<div class="col-sm-3" style="background-color: #e6e6b8;">
			<svg height="220" width="220">
				<polygon  points="020,020 140,020 200,080 200,200 080,200 020,140" style="fill:white;stroke:black;stroke-width:4;"/>
				<polyline points="020,060 140,060 200,120" style="fill:none;stroke:black;stroke-width:1" />
				<polyline points="020,100 140,100 200,160" style="fill:none;stroke:black;stroke-width:1" />
				<polyline points="020,140 140,140 200,200" style="fill:none;stroke:black;stroke-width:1" />
				<polyline points="060,020 060,140 120,200" style="fill:none;stroke:black;stroke-width:1" />
				<polyline points="100,020 100,140 160,200" style="fill:none;stroke:black;stroke-width:1" />
				<polyline points="140,020 140,140 200,200" style="fill:none;stroke:black;stroke-width:1" />
				<polyline points="040,160 160,160 160,040" style="fill:none;stroke:black;stroke-width:1" />
				<polyline points="060,180 180,180 180,060" style="fill:none;stroke:black;stroke-width:1" />

				<!-- cara superior -->
				<polygon points="020,020 140,020 140,140 020,140" style="fill:yellow;stroke-width:0 ; opacity: 0.5;" />
				<!-- cara derecha -->
				<polygon points="140,020 200,080 200,200 140,140 " style="fill:#9f3;stroke-width:0 ; opacity: 0.5;" />
				<!-- cara frontal -->
				<polygon points="020,140 140,140 200,200 080,200" style="fill:#f93;stroke-width:0 ; opacity: 0.5;" />
			</svg>
		</div>

		<div class="col-sm-7">
		<h2></h2>
		<p>Siguiendo los pasos anteriores nuestro cubo deber�a verse ordenado en forma similar a la que se ve en la imagen</p>

		<p>&nbsp;

		</div>

		<div class="col-sm-2"><!-- columna lateral derecha -->
		</div>
	</div>

	<hr>

	<div class="row">
		<div class="col-sm-2">
		</div>
		<div class="col-sm-8">
			<?php include 'codigo-anuncios-inarticle.shtml';?>
		</div>
		<div class="col-sm-2">
		</div>
	</div>

	<hr>

	<?php include 'libro-rg5rbata.shtml';?>
	<hr class="grosa">
	<!-- fin contenido -->

</div>

</body>
</html>

