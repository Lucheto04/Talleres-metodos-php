<?php 
    session_start();
    $satelites = array(
        "Earth" => array(),
        "Mars" =>array(),
        "Jupiter" => array(),
        "Saturn" => array(),
        "Uranus" => array(),
    );

    $planeta = $_POST['planetas'];

    $satelite = $_POST['satelite'];

    $_SESSION['sat'] = $satelites;

    print_r($_SESSION);
    // print_r($planeta);
    
    // Narray_push($satelites[$planeta], $satelite);


    echo "<hr>";
    echo '<a href="index.html">Volver</a>';

    if ($_POST['agregar']) {
        $pagina = $_SERVER["HTTP_REFERER"]."#taller-12";
        header("Refresh: 0;url= $pagina");
    };
?>