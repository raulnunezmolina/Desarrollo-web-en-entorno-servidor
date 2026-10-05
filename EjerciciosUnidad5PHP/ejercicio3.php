<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio3</title>
    <style>
        .rojo {
            background-color: red;
        }
        .verde {
            background-color: green;
        }
        .azul {
            background-color: blue;
        }
    </style>
</head>
<body>
    <?php
        function crearTabla ($color1, $color2, $color3) {
            echo "<table border='1'>";
            echo "<tr>";
            echo "<td class='$color1'>aaaaaaaaaaa</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td class='$color2'>aaaaaaaaaaaa</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td class='$color3'>aaaaaaaaaaaa</td>";
            echo "</tr>";
            echo "</table>";
        }
        crearTabla ("rojo", "verde", "azul");
    ?>
</body>
</html>