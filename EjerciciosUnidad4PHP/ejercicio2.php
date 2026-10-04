<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio2</title>
</head>
<body>
    <?php
        $alumnos = [
            "Antonio" => [5, 8.3, 9, 7, 7.325],
            "Ana" => [8, 7, 4.5, 9, 7.125],
            "Benito" => [9, 6.75, 9, 3.1, 6.692]
        ];
        echo "<table border='1'>";
        echo "<tr>";
        echo "<th>Alumnos</th>";
        echo "<th>Matemáticas</th>";
        echo "<th>Lengua</th>";
        echo "<th>Ciencias Naturales</th>";
        echo "<th>Geografía</th>";
        echo "<th>Media</th>";
        echo "</tr>";
        foreach ($alumnos as $nombre => $nota) {
            $media = ($nota[0] + $nota[1] + $nota[2] + $nota[3]) / 4;
            echo "<tr>";
            echo "<td>$nombre</td>";
            echo "<td>$nota[0]</td>";
            echo "<td>$nota[1]</td>";
            echo "<td>$nota[2]</td>";
            echo "<td>$nota[3]</td>";
            echo "<td>$media</td>";
            echo "</tr>";
        };
        
        $alumnoBuscado = "Ana";
        if (isset($alumnos[$alumnoBuscado])) {
            $nota = $alumnos[$alumnoBuscado];
            $mediaConcreta = ($nota[0] + $nota[1] + $nota[2] + $nota[3]) / 4;
            echo "<tr>";
            echo "<td>$alumnoBuscado</td>";
            echo "<td>$nota[0]</td>";
            echo "<td>$nota[1]</td>";
            echo "<td>$nota[2]</td>";
            echo "<td>$nota[3]</td>";
            echo "<td>$mediaConcreta</td>";
            echo "</tr>";
            echo "</table>";
        } else {
            echo "Alumno no encontrado";
        }

        ?>

</body>
</html>