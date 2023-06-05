<?php 
   $planetas = array(
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
    $busqueda = (string) $_GET['planeta'];
    if (in_array($busqueda, $planetas, true)) {
        echo "El planeta $busqueda si esta dentro del sistema solar";
    } else {
        echo "El planeta $busqueda no esta dentro del sistema solar";
    };
    echo "<hr>";
    echo '<a href="index.php">Volver</a>';
?>