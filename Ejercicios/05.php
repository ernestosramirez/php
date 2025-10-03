<?php
$num1 = random_int(1, 10);
$num2 = random_int(1, 10);
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio05</title>

    <style>
		table {
  border-collapse: collapse; /* Une los bordes de las celdas */
}

th, td {
  border: 1px solid black; /* Bordes negros en celdas */
  padding: 8px; /* Espaciado dentro de celdas */
}

tr:nth-child(even) {
  background-color: #f2f2f2; /* Alterna filas grises */
}

th {
  background-color: #a8a8a8; /* Encabezado con gris oscuro */
  color: white; /* Texto blanco en encabezado */
}

.izq {
  text-align: left; /* Alinear a la izquierda */
}

.der {
  text-align: right; /* Alinear a la derecha */
}

	</style>

</head>
<body>
	<h1>Ejercicio 5</h1>

	1º numero: <?= $num1?></br>
	2º numero: <?= $num2?></br>

	<table>
		
			<tr>
				<th style = "color: blue;">Operaciones</th>
				<th style = "color: blue;">Resultado</th>
			</tr>

			<tr>
				<td></td>

			</tr>
				
		

	</table>
    

        
    
    
</body>
</html>