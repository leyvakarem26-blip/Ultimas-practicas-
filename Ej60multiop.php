<!DOCTYPE html>
<html lang="es">
<head> 
	<meta charset="UTF-8">
	<title>Operaciones</title>
</head>
<body>

	<form method="POST">

		<label>Introduce el primer numero: </label>
		<input type="number" name="numero1" id="numero1">

		<br>

		<label>Introduce el segundo numero: </label>
		<input type="number" name="numero2" id="numero2">

		<br>

		<button type="button" onclick="agregar()">Guardar</button>

		<input type="hidden" name="n1" id="n1">
		<input type="hidden" name="n2" id="n2">
		<br><br>

		<p id="mensaje">Valores capturados: 0 de 3</p>

		<button type="submit" name="guardar" id="guardar" disabled>Calcular</button>
	</form>
	<script>
		//declaramos un vector vacio
		let numero1=[];
		let numero2=[];
		function agregar() {
			let daton1=document.getElementById("numero1").value;
			let daton2=document.getElementById("numero2").value;

	 		if (daton1<51 || daton1>99 || daton2>-1 || daton2<-51) {
				alert("Ese valor no es valido");
				return;
			}

			if (numero1.length<3) {
				numero1.push(daton1);
				numero2.push(daton2);
				
				document.getElementById("n1").value=JSON.stringify(numero1);
				document.getElementById("n2").value=JSON.stringify(numero2);
				
				document.getElementById("numero1").value="";
				document.getElementById("numero2").value="";
				
				document.getElementById("mensaje").innerHTML="Valores capturados: "+numero1.length+" de 3";

				if (numero1.length==3){
					document.getElementById("guardar").disabled=false;
					document.getElementById("mensaje").innerHTML="!Ya capturaste los 6 valores¡";
				}
			}
		}
	</script>

	<?php
	if (isset($_POST['guardar'])) {
		$num1=json_decode($_POST['n1'],true);
		$num2=json_decode($_POST['n2'],true);

		echo "<h3>Contenido del vector</h3>";

		echo "<table border='1' cellpadding='8' cellspacing='0'>";
		echo "<thead>";
		echo "<tr>";
		echo "<th>Numero 1</th>";
		echo "<th>Numero 2</th>";
		echo "<th>Suma</th>";
		echo "<th>Resta</th>";
		echo "<th>Multiplicacion</th>";
		echo "<th>Division</th>";
		echo "</tr>";
		echo "</thead>";


		for ($i=0; $i < 3; $i++) { 

			$suma=$num1[$i]+$num2[$i];
			$resta=$num1[$i]-$num2[$i];
			$mult=$num1[$i]*$num2[$i];
			$div=$num1[$i]/$num2[$i];

			echo "<tr>";

			echo "<td>".$num1[$i]."</td>";
			echo "<td>".$num2[$i]."</td>";
			echo "<td>".$suma."</td>";
			echo "<td>".$resta."</td>";
			echo "<td>".$mult."</td>";
			echo "<td>".$div."</td>";

			echo "</tr>";
		}

		echo "</table>";
	}
    ?>

</body>
</html>