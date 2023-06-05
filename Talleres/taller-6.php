<?php 
    $planetas = array(
    "sun",
    "mercury",
    "venus",
    "earth",
    "mars",
    "jupiter",
    "saturn",
    "uranus",
    "neptune"
    );
    $busqueda = (string) strtolower($_GET['planeta']);
    if (in_array($busqueda, $planetas, true)) {
        echo "El planeta $busqueda si esta dentro del sistema solar";
    } else {
        echo "El planeta $busqueda no esta dentro del sistema solar";
    };
    echo "<hr>";
    echo '<a href="index.php">Volver</a>';
?>