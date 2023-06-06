<?php 
    function masas_total($acum, $item) {
        $acum += $item;
        return $acum;
    };
    $flota = array(
        'Void' => 280,
        'Slan' => 250,
        'Femto' => 230,
        'Conrad' => 200,
        'Ubik' => 100,
    );
    foreach ($flota as $demonio => $masa) {
        echo "La masa de la nave $demonio es de $masa " . "<br>";
    }
    $total = array_reduce($flota, 'masas_total');
    echo "La masa total es de $total";
    echo "<hr>";
    echo '<a href="index.html">Volver</a>';
?>