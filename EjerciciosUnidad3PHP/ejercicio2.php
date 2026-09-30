<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tabla de cubos y cuadrado</title>

</head>

<style>

    .negro {
        background-color: black;
        color: white;
    }

    .verde {
        background-color: green;
    }

</style>

<body>

    <?php
    

    $numeros = [3, 8, 7, -6];
    echo "<table border='1'>";
    echo "<tr>";
            echo "<th class='negro'>numero</th>";
            echo "<th class='negro'>cuadrado</th>";
            echo "<th class='negro'>cubo</th>";
            echo "</tr>";

    foreach ($numeros as $i) {
        $cuadrado = $i * $i;
        $cubo = $i * $i * $i;
        echo "<tr>";
        echo "<td class='verde'>$i</td>";
        echo "<td class='verde'>$cuadrado</td>";
        echo "<td class='verde'>$cubo</td>";
        echo "</tr>";
    }

    echo "</table>";

    ?>

</body>

</html>