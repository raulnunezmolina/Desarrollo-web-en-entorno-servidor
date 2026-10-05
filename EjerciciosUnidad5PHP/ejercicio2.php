<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio2</title>
</head>
<body>
    <?php
        function crearTabla ($color1, $color2, $color3) {
            echo "<table border = '1'>";
            echo "<tr>";
            echo "<td style='background-color: $color1;'>aaaaaaaaaaaaaa</td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td style='background-color: $color2;'>aaaaaaaaaaaa</td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td style='background-color: $color3;'>aaaaaaaaa</td>";
            echo "</tr>";
            echo "</table>";
        }
        crearTabla("red", "green", "blue");
    ?>
</body>
</html>