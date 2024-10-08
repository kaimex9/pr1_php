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

echo "<br><br>4. Borra la ciudad del array y vuelve a mostrar toda su información usando la función var_dump. <br><br>";

$ej1["ciudad"] = null;
var_dump($ej1);

echo "<br><br>5. Crear un nuevo array con un valor separado por coma a partir de la cadena de texto 
$ letters = “a,b,c,d,e,f”. Usando la función explode. Muestra su información en orden descendente<br><br>";

$letters = "a,b,c,d,e,f";

$array = explode(",", $letters);

rsort($array);

$num = 6;
foreach ($array as $x) {
    echo "Letter $num: $x<br>";
    $num--;
}

echo "<br><br>6. Un profesor quiere registrar las notas de su clase en un array asociativo. Las notas son las siguientes:
Miguel: 5, Luís: 7, Marta: 10, Isabel: 8, Aitor: 4, Pepe: 1
Guarda los datos en un array asociativo en el orden previo y muéstralos ordenados de mayor a menor.<br><br>";

$notas=array(
    "Miguel" => 5,
    "Luis" => 7,
    "Marta" => 10,
    "Isabel" => 8,
    "Aitor" => 4,
    "Pepe" => 1,
);
arsort($notas);

foreach ($notas as $x => $val) {
    echo "$x: $val<br>";
};

echo "<br><br>7. Calcula la media de las notas y muéstrala con solo 2 decimales. Además, muestra los
nombres de los alumnos cuya nota esté por encima de la media. <br><br>";

$suma = array_sum($notas);
$media = $suma / count($notas);
$mediaF = number_format($media,2);
echo "Las media de las notas es de $mediaF<br>";
echo "Alumnos con nota por encima de la media:<br><br>";
foreach ($notas as $x => $val) {
    if ($val > $mediaF) {
        echo "$x: $val<br>";
    }
}

echo "<br><br>8. Busca en el array la nota más alta (debe hacerse mediante código). Muestra la nota y
el nombre del mejor alumno de la clase. Deberá funcionar para cualquier valor del array.<br><br>";

$Mnota = 0;
$nombre = "unknown";
foreach ($notas as $x => $val) {
    if ($val>$Mnota) {
        $Mnota=$val;
        $nombre=$x;
    }
}
echo "La nota mas alta es la de $nombre: $Mnota";