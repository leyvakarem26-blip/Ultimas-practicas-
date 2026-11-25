<!DOCTYPE html>
<html lang="es">
<head> 
	<meta charset="UTF-8">
	<title>Tienda</title>
</head>
<body>
	<h2>Guardar informacion en un archivo</h2>

<?php
	$nombre="Panchixxx";
	file_put_contents("alumnos.txt",$nombre.PHP_EOL,FILE_APPEND);
	echo "Informacion guardada correctamente.";
	echo "<br><br>";

?>

<?php
	$nombre="Leo villagarza";
	file_put_contents("alumnos.txt",$nombre.PHP_EOL,FILE_APPEND);
	echo "Alumna agregada correctamente.";

?>

<?php
	echo "<br><br>";
	$contenido=file_get_contents("alumnos.txt");
	echo nl2br($contenido);
?>
</body>
</html>