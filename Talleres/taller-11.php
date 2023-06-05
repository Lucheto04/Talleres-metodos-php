<?php 
    $planetas1 = array(
        "Sun",
        "Mercury",
        "Venus",
        "Earth",
        "Mars",
        "Jupiter",
        "Saturn",
        "Uranus",
        "Neptune"
    );
    $planetas2 = array(
        "Mercury",
        "Venus",
        "Jupiter",
        "Uranus",
        "Neptune"
    );

    print_r(array_diff($planetas1, $planetas2));

    echo "<hr>";
    echo '<a href="index.html">Volver</a>';
?>