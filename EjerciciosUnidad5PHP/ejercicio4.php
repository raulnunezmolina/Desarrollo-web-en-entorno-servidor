<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio4</title>
</head>
<body>
    <?php
        $alumno = [
            "nombre" => "Raúl",
            "apellidos" => "Nuñez Molina",
            "nota1" => 5,
            "nota2" => 10,
            "nota3" => 7
        ];
        function mostrar($alumno){
            $media = ($alumno["nota1"] + $alumno["nota2"] + $alumno["nota3"]) / 3;
            echo "Nombre: " . $alumno["nombre"] . " Apellidos: ". $alumno["apellidos"];
            echo "Nota 1: " . $alumno[ "nota1"] . " Nota 2: " . $alumno["nota2"] . " Nota 3: " . $alumno["nota3"] ;
            echo "Media: " . $media ;
            
        };
        mostrar($alumno);
        

    ?>
</body>
</html>