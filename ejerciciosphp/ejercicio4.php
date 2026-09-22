<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>mascota</title>
</head>
<body>
    <h1>Mascota</h1>
    <?php
    $mascota = [
        "nombre" => "Michi",
        "familia" => "Felino",
        "raza" => "Europeo",
        "color" => "Blanco y negro",
        "peso" => "5 kg",
        "altura" => "25 cm",
        "edad" => "3 años"
    ];
    ?>
    <table border="1">
    <?php
        echo "<tr>";
        echo "<td>Nombre</td>";
        echo "<td>" . $mascota["nombre"] . "</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>Familia</td>";
        echo "<td>" . $mascota["familia"] . "</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>Raza</td>";
        echo "<td>" . $mascota["raza"] . "</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>Color</td>";
        echo "<td>" . $mascota["color"] . "</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>Peso</td>";
        echo "<td>" . $mascota["peso"] . "</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>Altura</td>";
        echo "<td>" . $mascota["altura"] . "</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>Edad</td>";
        echo "<td>" . $mascota["edad"] . "</td>";
        echo "</tr>";
    ?>
</table>

</body>
</html>
