<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> <!-- Indica que la codificación de caracteres es UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Hace la página responsive -->
    <title>Ejercicio01</title> <!-- Título que aparecerá en la pestaña del navegador -->
</head>
<body>
    <?php
    // Genera un número aleatorio entre 1 y 10 y lo guarda en la variable $n1
    $n1 = random_int(1,10); 
    
    // Genera un segundo número aleatorio entre 1 y 10 y lo guarda en la variable $n2
    $n2 = random_int(1,10);

    // Muestra el primer número en pantalla con un salto de línea
    echo " 1º Número : $n1 <br>";
    
    // Muestra el segundo número en pantalla con un salto de línea y luego una línea horizontal
    echo " 2º Número : $n2 <br><hr>";

    // Suma los dos números y muestra el resultado
    echo "$n1 + $n2 = " . ($n1 + $n2) . "</br>";

    // Resta los dos números y muestra el resultado
    echo "$n1 - $n2 = " . ($n1 - $n2) . "</br>";

    // Multiplica los dos números y muestra el resultado
    echo "$n1 * $n2 = " . ($n1 * $n2) . "</br>";

    // Divide el primer número entre el segundo y muestra el resultado
    echo "$n1 / $n2 = " . ($n1 / $n2) . "</br>";

    // Calcula el módulo (resto de la división entera)
    // ⚠️ Aquí tienes un error: pusiste ($n1 - $n2) en lugar de ($n1 % $n2)
    echo "$n1 % $n2 = " . ($n1 % $n2) . "</br>";

    // Calcula la potencia usando el operador ** (n1 elevado a n2)
    echo "$n1 ** $n2 = " . ($n1 ** $n2) . "</br>";

    
    // Cálculo de la potencia con un bucle (método manual, sin usar **)
    $resu = 1; // Inicializamos la variable con 1, ya que cualquier número elevado a 0 da 1
    
    // Bucle que multiplica $n1 por sí mismo $n2 veces
    for ($i=1; $i <= $n2; $i++) {
        $resu = $resu * $n1; // En cada vuelta multiplica el resultado acumulado por $n1
    }

    // Podrías mostrar el resultado calculado manualmente
    echo "Potencia calculada con bucle: $n1 ** $n2 = $resu </br>";
    ?>
</body>
</html>
