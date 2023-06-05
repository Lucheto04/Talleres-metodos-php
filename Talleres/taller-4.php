<?php
    $gravedad_relativa = array(
        "Sun" => 27.9,
        "Mercury" => 0.38,
        "Venus" => 0.91,
        "Earth" => 1,
        "Mars" => 0.38,
        "Jupiter" => 2.53,
        "Saturn" => 1.07,
        "Uranus" => 0.92,
        "Neptune" => 1.19
    );
    function calcularGravedadReal($gravedad_relativa) {
        $gravedad_real = array();
        $gravedad_tierra = 9.8;
        foreach ($gravedad_relativa as $planeta => $relativa) {
            $gravedad_real[$planeta] = $relativa * $gravedad_tierra;
        };
        return $gravedad_real;
    };
    $gravedad_real = calcularGravedadReal($gravedad_relativa);
    foreach ($gravedad_real as $planeta => $gravedad) {
        echo "La gravedad aproximada en $planeta es de $gravedad m/s^2." . "<br>";
    }
    echo "<hr>";
    echo '<a href="index.php">Volver</a>';
?>