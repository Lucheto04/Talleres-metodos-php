<?php 
    $flota = array(
        'Void' => "control",
        'Slan' => "combate",
        'Femto' => "colonizadora",
        'Conrad' => "exploración",
        'Ubik' => "carga"
    );
    $tipo = $_GET['tipo'];
    $nombre_nave = array_search($tipo, $flota);
    if ($tipo === "control") {
        echo "El tipo de nave que buscaste si esta en nuestra flota y es '$nombre_nave'";
    } else if ($tipo === "combate"){
        echo "El tipo de nave que buscaste si esta en nuestra flota y es '$nombre_nave'";
    } else if ($tipo === "colonizadora"){
        echo "El tipo de nave que buscaste si esta en nuestra flota y es '$nombre_nave'";
    } else if ($tipo === "exploración"){
        echo "El tipo de nave que buscaste si esta en nuestra flota y es '$nombre_nave'";
    } else if ($tipo === "carga"){
        echo "El tipo de nave que buscaste si esta en nuestra flota y es '$nombre_nave'";
    } else {
        echo "El tipo de nave que buscaste no esta en nuestra flota";
    }
    echo "<hr>";
    echo '<a href="index.html">Volver</a>';
?>
