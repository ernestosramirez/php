<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio3</title>
</head>
<body>
    <?php
   // Generamos un número aleatorio entre 1 y 9 → altura de la pirámide
   $numero =  random_int(1,9);

   // Contador de espacios (al inicio serán numero-1)
   $contEspacios = $numero - 1;

   // Contador de asteriscos (la pirámide empieza con 1 en la primera fila)
   $contAsteriscos = 1;
?>
   <!-- Utilizo la etiqueta <code> para que el texto salga en fuente monospace -->
   <code>
    <?php
    // Bucle principal: controla las filas de la pirámide
    for($i = 1; $i <= $numero; $i++){
        
        // Bucle de espacios: imprime los espacios necesarios antes de los asteriscos
        for($j = 1; $j <= $contEspacios; $j++){
            echo "&nbsp"; // "&nbsp" es un espacio en blanco en HTML
        }
        
        // Bucle de asteriscos: imprime la cantidad de * que corresponden en esa fila
        for($k = 1; $k <= $contAsteriscos; $k++){
            echo "*";
        }
        
        // Actualizamos los contadores para la siguiente fila:
        // en cada línea la pirámide gana 2 asteriscos
        $contAsteriscos += 2;
        // y pierde un espacio al inicio
        $contEspacios--;

        // Salto de línea en HTML para pasar a la siguiente fila
        echo "<br/>";
    }
?>
</code>
<hr>
<?php 
   // Muestra el código fuente de este mismo archivo
   // (muy útil para aprender porque ves a la vez el resultado y el código que lo genera)
   show_source(__FILE__); 
?>
<hr>
    
</body>
</html>