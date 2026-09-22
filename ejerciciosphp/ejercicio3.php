<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
    <?php
        $valor[0] = 1;
        $valor[1] = 2;
        $valor[2] = 3;

        echo "<tr>";
        echo "<td>posicion 0</td>";
        echo "<td>$valor[0]</td>";
        echo "<tr>";

        echo "<tr>";
        echo "<td>posicion 1</td>";
        echo "<td>$valor[1]</td>";
        echo "<tr>";

        echo "<tr>";
        echo "<td>posicion 2</td>";
        echo "<td>$valor[2]</td>";
        echo "<tr>";

        $suma = $valor[0] + $valor[1];
        echo "<tr>";
        echo "<td>posicion 3</td>";
        echo "<td>$suma</td>";
        echo "<tr>";

        $multiplicacion = $valor[1] * $valor[1];
        echo "<tr>";
        echo "<td>posicion 4</td>";
        echo "<td>$multiplicacion</td>";
        echo "<tr>";

        $division = $valor[0] / $valor[2];
        echo "<tr>";
        echo "<td>posicion 5</td>";
        echo "<td>$division</td>";
        echo "<tr>";

        $sumar_todo = $valor[0] + $valor[1] + $valor[2];
        echo "<tr>";
        echo "<td>posicion 6</td>";
        echo "<td>$sumar_todo</td>";
        echo "<tr>";

        $regla_de_tres = ($valor[1] + $valor[2]) / $valor[0];
        echo "<tr>";
        echo "<td>posicion 7</td>";
        echo "<td>$regla_de_tres</td>";
        echo "<tr>";
        ?>
</body>
</html>