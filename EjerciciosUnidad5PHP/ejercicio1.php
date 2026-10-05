<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio1</title>
</head>
<body>
    <?php
        $boletin = [
            "matematicas" => "sobresaliente",
            "lengua" => "Notable",
            "Historia" => "Notable",
            "Dibujo" => "Insuficiente"
        ];
        function mostrarBoletin($nombre, $calificaciones) {

            echo "<table border='1'>";
            echo "<tr>";
            echo "<th>Alumno</th>";
            echo "<th>$nombre</th>";
            echo "</tr>";
            foreach ($calificaciones as $asignatura => $notas) {
                echo "<tr>";
                echo "<td>$asignatura</td>";
                echo "<td>$notas</td>";
                echo "</tr>";
            }
            echo "</table>";

        };
        mostrarBoletin("Juan Ramirez", $boletin);
    ?>
</body>
</html>