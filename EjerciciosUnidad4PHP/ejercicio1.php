<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ej1</title>
</head>
<body>
    <?php
    $ciudades = [
        "Granada" => 150000,
        "Madrid" => 3000000,
        "Barcelona" => 2879200,
        "Málaga" => 240000,
        "Sevilla" => 500000,
        "Valecia" => 1584600,
        "Tarragona" => 485210
    ];
    echo "<table border='1'>";
    echo "<tr>";
    echo "<th>Ciudad</th>";
    echo "<th>Población</th>";
    echo "</tr>";
        
    foreach ($ciudades as $ciudad => $poblacion) {
        echo "<tr>";
        echo "<th>$ciudad</th>";
        echo "<th>$poblacion</th>";
        echo "</tr>";
    };
    echo "</table>";
    echo "<h2>Ciudades ordenadas alfabéticamente</h2>";
    //Ksort ORDENA la clave
    echo "<table border='1'>";
    ksort($ciudades);
    foreach($ciudades as $ciudad => $poblacion) {
        echo "<tr>";
        echo "<th>$ciudad</th>";
        echo "<th>$poblacion</th>";
        echo "</tr>";
    };
    echo "</table>";
    echo "<h2>Ciudades ordenadas por población</h2>";
    // arsort ordena de mayor a menor el valor
    arsort($ciudades);
    echo "<table border='1'>";
    foreach ($ciudades as $ciudad => $poblacion) {
        echo "<tr>";
        echo "<th>$ciudad</th>";
        echo "<th>$poblacion</th>";
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>
</html>