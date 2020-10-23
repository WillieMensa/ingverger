<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="ISO-8859-1">
	<title>Sudoku en línea</title>
	<meta name="description" content="Rompecabezas. Resolución de problemas de ingenio">
	<meta name="keywords" content="Lógica,Rompecabezas, representación gráfica, Desarrollo,Sistemas de Representación,CAD 3D, acotación,autocad,axonometría,CAD tridimensional,caligrafía técnica,cortes y secciones,dibujo tecnico,elipses,empalmes,geometria descriptiva, ingeniería, ingeniero, ingenio, normas iram,planos,proyecciones,tangente,vistas">

	<!-- aqui va el include file="genericheading.shtml" -->
	<?php include 'genericheading.shtml';?>

	<script language="javascript" src="js/sudoku-en-linea.js" ></script>
	<link rel="stylesheet" type="text/css" href="css/sudoku-en-linea.css">

</head>

<body>
	<!-- aqui va el include file="menu2015.shtml" -->
	<?php include "menu2015.shtml";?>

<div class="container">
	<!-- Contenido de la pagina -->
	<a name="TopOfPage"></a>

	<div class="row">
		<div class="col-sm-1"><!-- 1er colu -->
		</div>
		<div class="col-sm-5"><!-- 2da colu -->

			<div id=sudoku>
			<table border=0>
			<tr><td>
			<h2>Sudoku en línea</h2>
			</td></tr>
			<tr><td>

			<form name="theClock" method=post>
			<input type=text name="theTime" id=clock size=8>
			</form>
			<script language="JavaScript">
			<!--

			var clockID = 0;
			var init = new Date();
			var start = init.getTime();

			function UpdateClock() {
			   if(clockID) {
				  clearTimeout(clockID);
				  clockID  = 0;
			   }

			   var now = new Date ();
			   var nowtime = now.getTime();
			   var sec = Math.floor((nowtime - start) / 1000);
			   var min = Math.floor((sec / 60));
			   var std = Math.floor((min / 60));
			   sec = sec % 60;
			   min = min % 60;
			   if (sec < 10) sec = "0" + sec;
			   if (min < 10) min = "0" + min;
			   if (std < 10) std = "0" + std;
			   document.theClock.theTime.value = std + ":" + min + ":" + sec;

			   clockID = setTimeout("UpdateClock()", 100);
			}

			function StartClock() {
					clockID = setTimeout("UpdateClock()", 100);
			}

			StartClock();

			//-->
			</script>

			</center></td></tr>
			<tr><td>
			<?
			function getSudoku ()
			{
				// Fast and simple solution for big files
				$ls = 164;
				$filename = "js/sudoku.txt";
				$size = filesize ($filename);
				$lines = $size / $ls;
				$rand = rand(0, $lines); 
				$handle = fopen ($filename, "r");
				$pos = $ls * $rand;
				fseek ($handle, $pos, SEEK_SET);
				$contents = fread ($handle, $ls);
				fclose ($handle);
				return $contents;
			}

			$sudokustr = getSudoku ();
			$sudoku    = explode(";", $sudokustr);

			echo "<table cellspacing=0 cellpadding=0 border=0 bgcolor=#000000>";
			$count = 0;
			for ($x = 0; $x < 9; $x++)
			{
				echo "<tr>";
				for ($y = 0; $y < 9; $y++)
				{
					echo "<td><div class=cell>";
					$data = "";
					if ($y == 2 || $y == 5)
					{
						$border = "border-right:2px solid #000000;";
					} else {
						$border = "";	
					}	
					if ($x == 2 || $x == 5)
					{
						$border .= "border-bottom:2px solid #000000;";
					}	
					// if (strlen ($sudoku[$count]) > 0 && $sudoku[$count] != " ")
					if (intval($sudoku[$count]) > 0 )
					{
						$data = "value='" . $sudoku[$count] . "' readonly style='background:#DDDDDD; " . $border . "'";
					} else {
						$data = " style='" . $border . "'";
					}
					echo "\r\n<input valign=middle type=text id=i" . $count . " name=i" . $count . " " . $data . " size=5 maxlength=5 class=cell onkeyup='fontsize(this, this.value)'>\r\n";
					echo "</div></td>";
					$count ++;
				}
				echo "</tr>";
			}
			echo "</table>";
			?>
			</td></tr><tr><td height=28 valign=bottom  style="text-align:center">
			<form method=post>
			<nobr><input type="button" value="Mostrar solución" onclick="solveMySudoku()">
			<input type="button" value="Prueba" onclick="checkMySudoku()">
			<input type="submit" value="Nuevo Sudoku">
			<input type="button" value="Listo" onclick="checkMySudoku2()"></nobr>
			</form></center>
			</td></tr>
			</table>
			<table width=100% border=0 cellspacing=0 cellpadding=0>
			<tr><td height=28 valign=top><a class=sudoku href=html/instrucciones-sudoku.html>Instrucciones</a></td><td align=right valign=bottom>
			<!-- //
				I request you retain the full copyright notice below including the link to www.m-software.de.
				This not only gives respect to the amount of time given freely by the developers but also helps 
				build interest, traffic and use of phpSudoku. If you cannot (for good reason) retain the full 
				copyright we request you at least leave in place the phpSudoku by M-Software line, linked to 
				www.m-software.de. Michael Jentsch: 2007
			// -->
			<a class=sudokumin href='http://www.m-software.de/phpSudoku.php'>phpSudoku by M-Software</a></td>
			</table>
			</div>

			
			<?php include 'codigo-anuncios-inarticle.shtml';?>
			

		</div>

		<div class="col-sm-3"><!-- 3ra colu -->
		</div>

		<div class="col-sm-1"><!-- 3er colu -->
		</div>

		<div class="col-sm-2" style="background-color: #e6e6b8;">
			<p>&nbsp;</p>
		</div>

	</div>

	<hr class="grosa">
	<!-- fin contenido -->

</div>

</body>
</html>

