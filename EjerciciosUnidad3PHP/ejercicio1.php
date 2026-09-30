<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tabla de multiplicar</title>

</head>

<style>

    .rojo {
        background-color: red;
    }

    .claro {
        background-color: lightcoral;
    }

</style>

<body>

    <?php

    $numero = 1;

    echo "<table border='1'>";

  

    for ($i = 1; $i <= 10; $i++) {

        $resultado = $numero * $i;

        if ($i % 2 == 0) {
            $color = "claro";
        } else {
            $color = "rojo";
        }

        echo "<tr class='$color'>";

        echo "<td><strong>$numero X $i</strong></td>";

        echo "<td>$resultado</td>";

        echo "</tr>";
    }

    echo "</table>";

    ?>

</body>

</html>