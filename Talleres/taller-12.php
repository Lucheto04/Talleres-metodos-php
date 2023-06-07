<?php 
    session_start();
    isset($_SESSION['planetas'])
    ?$_SESSION['planetas']
    :$_SESSION['planetas'] = array(
        "Earth" => array(),
        "Mars" =>array(),
        "Jupiter" => array(),
        "Saturn" => array(),
        "Uranus" => array(),
    );
    $planetas = $_SESSION['planetas'];
    $planeta = $_POST['planetas'];
    $satelite = $_POST['satelite'];
    if(isset($_POST['planetas'])) {
        $planetas = $_SESSION['planetas'];
        $planeta = $_POST['planetas'];
        $satelite = $_POST['satelite'];
        array_push($planetas[$planeta], $satelite);
        $_SESSION['planetas'] = $planetas;
        print_r($$_SESSION['planetas']);
    }
    print_r($planetas);
    echo "<hr>";
    echo '<a href="index.html">Volver</a>';
    if ($_POST['agregar']) {
        $pagina = $_SERVER["HTTP_REFERER"]."#taller-12";
        header("Refresh: 0;url= $pagina");
    };
?>