```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio3</title>
</head>
<body>

<?php

$mascotas = [
    0 => [
        "Nombre" => "Pepe",
        "Peso" => 4.5,
        "Color" => "Marrón",
        "Edad" => 12
    ],
    1 => [
        "Nombre" => "Sparky",
        "Peso" => 3,
        "Color" => "Marrón",
        "Edad" => 2
    ],
    2 => [
        "Nombre" => "Tobby",
        "Peso" => 7.2,
        "Color" => "Beige",
        "Edad" => 8
    ],
    3 => [
        "Nombre" => "Bigotes",
        "Peso" => 4,
        "Color" => "Negro",
        "Edad" => 9
    ],
    4 => [
        "Nombre" => "Ricky",
        "Peso" => 0.1,
        "Color" => "Verde",
        "Edad" => 2
    ]
];

?>

<h2>Todas las mascotas</h2>

<table border="1">
    <tr>
        <th>Fila</th>
        <th>Nombre</th>
        <th>Peso</th>
        <th>Color</th>
        <th>Edad</th>
    </tr>

    <?php foreach ($mascotas as $fila => $m) { ?>

    <tr>
        <td><?= $fila ?></td>
        <td><?= $m["Nombre"] ?></td>
        <td><?= $m["Peso"] ?></td>
        <td><?= $m["Color"] ?></td>
        <td><?= $m["Edad"] ?></td>
    </tr>

    <?php } ?>

</table>


<h2>Mascota con código 3</h2>

<?php
$mascota = $mascotas[3];
?>

<table border="1">
    <tr>
        <th>Fila</th>
        <th>Nombre</th>
        <th>Peso</th>
        <th>Color</th>
        <th>Edad</th>
    </tr>

    <tr>
        <td>3</td>
        <td><?= $mascota["Nombre"] ?></td>
        <td><?= $mascota["Peso"] ?></td>
        <td><?= $mascota["Color"] ?></td>
        <td><?= $mascota["Edad"] ?></td>
    </tr>
</table>


<h2>Mascota Sparky</h2>

<?php
$mascota = $mascotas[1];
?>

<table border="1">
    <tr>
        <th>Fila</th>
        <th>Nombre</th>
        <th>Peso</th>
        <th>Color</th>
        <th>Edad</th>
    </tr>

    <tr>
        <td>1</td>
        <td><?= $mascota["Nombre"] ?></td>
        <td><?= $mascota["Peso"] ?></td>
        <td><?= $mascota["Color"] ?></td>
        <td><?= $mascota["Edad"] ?></td>
    </tr>
</table>


<h2>Mascota más mayor</h2>

<?php

$masMayor = $mascotas[0];
$filaMayor = 0;

foreach ($mascotas as $fila => $mascota) {

    if ($mascota["Edad"] > $masMayor["Edad"]) {
        $masMayor = $mascota;
        $filaMayor = $fila;
    }
}

?>

<table border="1">
    <tr>
        <th>Fila</th>
        <th>Nombre</th>
        <th>Peso</th>
        <th>Color</th>
        <th>Edad</th>
    </tr>

    <tr>
        <td><?= $filaMayor ?></td>
        <td><?= $masMayor["Nombre"] ?></td>
        <td><?= $masMayor["Peso"] ?></td>
        <td><?= $masMayor["Color"] ?></td>
        <td><?= $masMayor["Edad"] ?></td>
    </tr>
</table>


<h2>Mascota que pesa menos</h2>

<?php

$masLigera = $mascotas[0];
$filaLigera = 0;

foreach ($mascotas as $fila => $mascota) {

    if ($mascota["Peso"] < $masLigera["Peso"]) {
        $masLigera = $mascota;
        $filaLigera = $fila;
    }
}

?>

<table border="1">
    <tr>
        <th>Fila</th>
        <th>Nombre</th>
        <th>Peso</th>
        <th>Color</th>
        <th>Edad</th>
    </tr>

    <tr>
        <td><?= $filaLigera ?></td>
        <td><?= $masLigera["Nombre"] ?></td>
        <td><?= $masLigera["Peso"] ?></td>
        <td><?= $masLigera["Color"] ?></td>
        <td><?= $masLigera["Edad"] ?></td>
    </tr>
</table>

</body>
</html>
