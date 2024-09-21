<?php
echo "<h1>Ejercicio 3</h1>";
echo "1. Se declaren dos variables con valores numéricos superiores a 10 y seguidamente:<br>";
$num1 = rand(11, 30);
$num2 = rand(11, 30);

echo "Numero 1: $num1<br>Numero 2: $num2<br><br>";
echo "2. Muestra la progresión numérica de los números pares desde 0 hasta el valor de la
primera con un bucle for.<br><br>";

echo "Aqui muestro los numeros pares del 0 al $num1:<br><br>";
for ($i = 0; $i <= $num1; $i++) {
    if (($i % 2) == 0) {
        echo "$i | ";

    }
}
echo "<br><br>3. Muestra la progresión numérica desde la segunda variable hasta 0 con un bucle while.<br><br>";
echo "Aqui muestro la progresion numerica del $num2 al 0<br><br>";
$num3 = $num2;
while ($num3 >= 0) {
    echo "$num3 | ";
    $num3--;
}

echo "<br><br>4. Muestra la progresión numérica desde la primera variable a la segunda con un bucle
do/while.<br>
a. Si la segunda variable es más pequeña, sólo queremos que imprima una vez
el valor de la primera variable. <br><br>";

do {
    if ($num1 <= $num2) {
        echo "$num1 | ";
        $num1++;
    } elseif ($num1 > $num2) {
        echo "Valor 1: $num1";
        break;
    }
} while ($num1<=$num2);







