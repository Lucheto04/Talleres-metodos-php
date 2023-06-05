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
    print_r(array_intersect($planetas1, $planetas2));
    echo "<hr>";
    echo '<a href="index.php">Volver</a>';
?>