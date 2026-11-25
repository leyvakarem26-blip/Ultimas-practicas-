<!DOCTYPE html>
<html lang="es">
<body>
    <meta charset="UTF-8">
    <title>Arreglo multidimensional</title>
</head>
</body> 
     <h2>Arreglo multidimensional</h2>

<?php
    $matrizA = array();
    $matrizB = array();
    $matrizC = array();

    $valorA = 100;
    $valorB = 500;

    for ($i = 0; $i < 3; $i++){
        for ($j = 0; $j < 3; $j++){
            $matrizA[$i][$j] = $valor;
            $valor += 10;
        }
    }
    for ($i = 0; $i < 3; $i++)
        {for ($j = 0; $j < 3; $j++)
        {echo $matrizB[$i][$j] . " ";}
      echo "<br>";
     }
     
     echo "<br>";
     for ($i = 0; $i < 3; $i++)
        {for ($j = 0; $j < 3; $j++)
        {echo $matrizC[$i][$j] . " ";}
      echo "<br>";
     }

?>
</body>
</html>