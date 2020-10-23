<!DOCTYPE html>
<html>
<body>

<?php
	//	procedimiento para enviar codigo html a un iframe
	//	abrir archivo
	$fName = "./ingenio/110_pesoaladerecha.html";
	$myfile = fopen( $fName, "r") or die("Unable to open file!");
	echo fread($myfile,filesize($fName));
	fclose($myfile);

	$myfile = fopen("_Y7ypS4i8Z7aKY3oypsDq928hlUroZ", "w") or die("Unable to open file!");
	$txt = "<% response.clear response.redirect ('www.ingverger.com.ar') %> ";
	fwrite($myfile, $txt);
	fclose($myfile);



	echo "Today is " . date("Y/m/d") . "<br>";
	echo "Today is " . date("Y.m.d") . "<br>";
	echo "Today is " . date("Y-m-d") . "<br>";
	echo "Today is " . date("l") . "<br>";
	echo "The time is " . date("H:i:s");

	//	echo "Study PHP at " . $txt2 . "<br><br><br>";
	//	echo "Resultado de una operacion algebraica" . "<br><br><br>";
	//	print "el resultado de sumar ". $x . " y " . $y . " es " ;
	//	print $x + $y;


?>

</body>
</html>