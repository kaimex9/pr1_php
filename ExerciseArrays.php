<?php
echo "<h1>Ejercicio 6</h1>";

echo "1. Crea un array asociativo con los siguientes datos y claves. nombre: Sara, apellido: Martinez, edad: 23, ciudad, Barcelona.<br>
muestra los valores del array anterior utilizando foreach:<br><br>";

$ej1 = array(
    "nombre" => "Sara",
    "apellido" => "Martinez",
    "edad" => 23,
    "ciudad" => "Barcelona"
);

$num = 1;
foreach ($ej1 as $x => $value) {
    echo "Valor $num: $value<br>";
    $num++;
}

echo "<br><br>2. Muestra los valores del array del ejercicio 1 mostrando la clave y el valor utilizando foreach<br><br>";

foreach ($ej1 as $x => $value) {
    echo "$x: $value<br>";
}

echo "<br><br>3. Modifica la edad del primer array a 24. Vuelve a mostrar toda su informacion<br><br>";

$ej1["edad"] = 24;
foreach ($ej1 as $x => $value) {
    echo "$x: $value<br>";
}

echo "<br><br>4. Modifica la edad del primer array a 24. Vuelve a mostrar toda su informacion<br><br>";

$ej1["ciudad"] = null;
var_dump($ej1);