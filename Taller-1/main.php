<?php

    $planetas = array(
        "Sun" => 1,
        "Mercury" => 2,
        "Venus" => 3,
        "Earth" => 4,
        "Mars" => 5,
        "Jupiter" => 6,
        "Saturn" => 7,
        "Uranus" => 8,
        "Neptune" => 9
    );


    $resultado = $_GET['numero'];
    $clave_encontrada = array_search($resultado, $planetas);

    if ($clave_encontrada !== false) {
        echo "El planeta que buscasque es $clave_encontrada";
    } else {
        echo "El planeta que buscaste es no esta en nuestro sistema solar";
    };

    echo "<hr>";
    echo '<a href="index.html">Volver</a>';
?>