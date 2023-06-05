<?php
    $planetas = array(
        "Sun" => false,
        "Mercury" => false,
        "Venus" => false,
        "Earth" => true,
        "Mars" => true,
        "Jupiter" => false,
        "Saturn" => false,
        "Uranus" => false,
        "Neptune" => false
    );
    $planetas_habitables = array_filter($planetas, function ($esHabitable) {
        return $esHabitable === true;
    });
    print_r($planetas_habitables);
    echo "<hr>";
    echo '<a href="index.php">Volver</a>';
?>