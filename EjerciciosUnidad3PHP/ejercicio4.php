<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tabla de notas</title>

</head>

<body>

    <?php
    
    $meses = [
        "Enero" => 31,
        "Febrero" => 28,
        "Marzo" => 31,
        "Abril" => 30,
        "Mayo" => 31,
        "Junio" => 30,
        "Julio" => 31,
        "Agosto" => 31,
        "Septiembre" => 30,
        "Octubre" => 31,
        "Noviembre" => 30,
        "Diciembre" => 31
        
    ];

    foreach ($meses as $mes => $dias) {
        echo "<h2>$mes</h2>";
        echo "<table border='1'>";
        echo "<tr>";
        echo "<th>Lun</th>";
        echo "<th>Mar</th>";
        echo "<th>Mier</th>";
        echo "<th>Jue</th>";
        echo "<th>Vier</th>";
        echo "<th>Sab</th>";
        echo "<th>Dom</th>";


        echo "</tr>";
        echo "<tr>";

        
        for ($dia = 1; $dia <= $dias; $dia++) {
            echo "<td>$dia</td>";
            if ($dia % 7 == 0) {
                echo "</tr>";
                echo "<tr>";
            }
        };
        echo "</tr>";
        echo "</table>";
    }
    ?>

</body>

</html>