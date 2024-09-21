<?php
echo "<h1>Ejercicio 5</h1>";
echo "1. Se genere un número aleatorio entre 0 y 20 y se muestre por pantalla.<br><br>";
$num = rand(0, 20);
echo "Numero aleatorio: $num";

echo "<br><br>2. Se repita la operación hasta que el total de valores sumados sea superior a 100.<br><br>";
$total = 0;
$suma = 0;
$pares = 0;
$impares = 0;
while ($total <= 100) {
    $total += $num;
    $num = rand(0, 20);
    echo "$total | ";
    $suma += $total;
    if (($total % 2) == 0) {
        $pares++;
    } else {
        $impares++;
    }
}


echo "<br><br>3. Muestra la suma de los valores generados.<br><br>";

echo "La suma de todos los valores es de $suma<br><br>";

echo "4. Muestra el total de números pares e impares generados.<br><br>";

echo "Numeros pares: $pares<br>Numeros impares: $impares";