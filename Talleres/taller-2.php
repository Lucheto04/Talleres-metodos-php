<?php 
    $numero = (int) ($_GET)["numero"];
    $planetass = array_fill(0, $numero, 'Deshabitado');
    print_r($planetass);
    echo "<hr>";
    echo '<a href="index.php">Volver</a>';
?>