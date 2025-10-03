<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio2</title>
</head>
<body>
    <?php
    // Genera un número entero aleatorio entre 1 y 9 (inclusive).
    $numero = random_int(1, 9);

    // Muestra el número generado en la página web.
    echo "Número generado $numero <br>";

    // Inicia un bucle que se ejecutará desde 1 hasta el valor de $numero.
    for ($i = 1; $i <= $numero; $i++) {
        // Comprueba si el número actual ($i) es par.
        if ($i % 2 == 0) {
            // Si es par, asigna el color "blue" a la variable $color.
            $color = "blue";
        } else {
            // Si es impar, asigna el color "red" a la variable $color.
            $color = "red";
        }

        // Imprime un párrafo con estilos específicos:
        // - El color del texto se establece según el valor de $color (red o blue).
        // - La fuente del texto es "monospace".
        // - El margen superior e inferior es 0.
        // Dentro del párrafo, se repite el número actual ($i) tantas veces como su propio valor.
        echo "<p style='color:$color; font-family:monospace; margin:0;'>" 
             . str_repeat($i, $i) 
             . "</p>";
    }
    ?>
</body>
</html>
