<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio4</title>
</head>
<body>
    <?php

    $contador=0;
    $seg=microtime(true);
    $cont6=0;
    
    do {
        $num= random_int(1,10);
        $contador++;
        if ($num==6){
            $cont6++;
        } else {
            $cont6++;
        }


    } while ($cont6<3);

    $tiempoInvertido=microtime(true)-$seg;

    echo "Han salido tres 6 seguidos tras generar $contador numeros en ". ($tiempoInvertido*1000)." milisegundos"
    
    ?>
    
    <hr>
    <?php show_source(__FILE__); ?>
    <hr>
    
</body>
</html>