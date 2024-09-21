<?php
echo "<h1>Ejercicio 1</h1>";
echo " 1. Declare dos variables numéricas, las sume, reste, dividí y muestre los valores de las
variables y los resultados de sus operaciones.<br><br>";
$num1 = rand(1, 100);
$num2 = rand(1, 100);

echo "Numero 1: $num1<br>Numero 2: $num2<br><br>";

$suma = $num1 + $num2;
$resta = $num1 - $num2;
$divi = $num1 / $num2;

echo "$num1 + $num2 = $suma<br>";
echo "$num1 - $num2 = $resta<br>";
echo "$num1 % $num2 = $divi<br><br>";

echo "2. Muestra cuál es mayor, cuál menor o si son iguales.<br><br>";

if ($num1 > $num2) {
    echo "El numero $num1 es mayor que el $num2";
} else if ($num2 > $num1) {
    echo "El numero $num2 es mayor que el $num1";
} else {
    echo "Los dos numeros valen lo mismo";
}
echo "<br><br>3. Si las dos variables son valores superiores a 1,<br>
    a. calcula el área del triángulo con base y altura igual a los valores de las variables.<br><br>";

