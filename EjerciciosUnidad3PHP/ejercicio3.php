<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tabla de notas</title>

</head>

<body>

    <?php
    
    echo "<table border='1'>";
    echo "<tr>";
    echo "<th>Alumno</th>";
    echo "<th>Nota</th>";
    echo "<th>Calificacion</th>";
    echo "</tr>";
    $alumnos = [
        "Juan" => 4,
        "Maria" => 10,
        "Joselu" => 5,
        "Lucas" => 6,
        "Alex" => 9,
        "Pepe" => 7,
        "Neus" => 2
    ];
    
    foreach ($alumnos as $nombre => $nota) {
        if ($nota >= 0 && $nota <= 4) {
            $resultado = "Suspenso";
        } elseif ($nota == 5) {
            $resultado = "Aprobado";
        }elseif ($nota == 6) {
            $resultado = "Bien";
        }elseif ($nota >= 7 && $nota <= 8) {
            $resultado = "Notable";
        }elseif ($nota == 9) {
            $resultado = "Notable";
        }elseif ($nota == 10) {
            $resultado = "Matrícula de honor";
        }
       
        echo "<tr>";
        echo "<td>$nombre</td>";
        echo "<td>$nota</td>";
        echo "<td>$resultado</td>";
        echo "</tr>";
    }

    echo "</table>";

    ?>

</body>

</html>