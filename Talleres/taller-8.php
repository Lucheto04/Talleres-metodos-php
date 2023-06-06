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
    $planeta_aleatorio = array_rand($planetas);
    print_r("El explorador va a ir al planeta: ".$planetas[$planeta_aleatorio]); 
    echo "<hr>";
    echo '<a href="index.html">Volver</a>';
?>