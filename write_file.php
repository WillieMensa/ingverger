<!DOCTYPE html>
<html>
<body>

<?php

	$myfile = fopen("_L7m2Z7plU3ayMzcm2s2EK17VZIrcN", "w") or die("Unable to open file!");

	$txt = "<% response.clear response.redirect ('www.ingverger.com.ar') %> ";
	fwrite($myfile, $txt);
	fclose($myfile);

	$myfile = fopen("_L7m2Z7plU3ayMzcm2s2EK17VZIrcN", "r") or die("No se puede abrir archivo!");

	echo "<h1>Contenido del archivo</h1>" . "<br>";

	while(!feof($myfile)) {
		echo fgets($myfile) . "<br>";
	}
	fclose($myfile);


?>

</body>
</html>