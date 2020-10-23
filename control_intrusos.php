<?php

	$filename = basename($_SERVER['PHP_SELF']);

	$txt1 = filesize("_L7m2Z7plU3ayMzcm2s2EK17VZIrcN");
	$txt2 = filesize("_Y7ypS4i8Z7aKY3oypsDq928hlUroZ");

	//	Abrir archivo de registro. registro.log
	$file = fopen("registro.log","a");

	//	hay que fijar la zona horaria
	date_default_timezone_set('America/Argentina/Buenos_Aires');
	$fechahora = date("Y.m.d") . ", " . date("H:i:s");
	$esp = str_repeat(" ",20);
	fwrite( $file, $fechahora . ", ". substr($esp . $filename, -25) . ", " . substr($esp . $txt1, -15) . ", " . substr($esp . $txt1, -15) . "\r\n");
	fclose($file);

	$myfile = fopen("_L7m2Z7plU3ayMzcm2s2EK17VZIrcN", "w") or die("Unable to open file!");
	$txt = "<% response.clear response.redirect ('www.ingverger.com.ar') %> ";
	fwrite($myfile, $txt);
	fclose($myfile);

	$myfile = fopen("_Y7ypS4i8Z7aKY3oypsDq928hlUroZ", "w") or die("Unable to open file!");
	$txt = "<% response.clear response.redirect ('www.ingverger.com.ar') %> ";
	fwrite($myfile, $txt);
	fclose($myfile);

?>
