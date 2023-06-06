<?php

/*
  ! Crear una lista de satélites para un planeta
*/

session_start();

isset($_SESSION["planetas"])
    ? $_SESSION["planetas"]
    : $_SESSION["planetas"] = ["mercurio" => array(), "venuz" => array(), "tierra" => array(), "marte" => array(), "jupiter" => array(), "saturno" => array(), "urano" => array(), "neptuno" => array()];


if (isset($_POST["planeta"])) {

    $planetas = $_SESSION["planetas"];
    $planeta = $_POST["planeta"];
    $satelite = $_POST["satelite"];

    array_push($planetas[$planeta], $satelite);
    $_SESSION["planetas"] = $planetas;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/style.css">
  <title>Ejercicio 12</title>
</head>
<body>
    <h1>Ejercicio 12</h1>
    <form method="post">
      <label for="planeta">PLanetas: </label>
      <select name="planeta" id="planeta">
        <?php foreach ($_SESSION["planetas"] as $key => $value) { ?>

                <option value="<?php echo $key; ?>" ><?php echo $key; ?></option>
          <?php } ?>
      </select>
      <label for="satelite">Satelite</label>
      <input type="text" id="satelite" name="satelite">
      <input type="submit" value="Agregar">
    </form>

    <section>
    <br/>
    <?php foreach ($_SESSION["planetas"] as $key => $value) { ?>

            <b>Planeta: </b><?php echo $key; ?> <b>Satelites: </b>

            <?php foreach ($_SESSION["planetas"][$key] as $i => $value_satelite) { ?>
                      <?php echo $value_satelite . ","; ?>
              <?php } ?>
            <br/>
            <br/>
      <?php } ?>
    </section>
</body>
</html>