<?php
echo "<h1>Ejercicio 4</h1>";
echo "1. Genere un número aleatorio entre el 1 y el 6 para simular la Ɵrada de un dado.<br>";
echo "2. Muestra en números y letras el valor obtenido y valor que tendrá el dado en la cara
opuesta. (1:5, 2:6, 3:4)<br><br>";

$dado = rand(1, 6);

switch ($dado) {
    case 1:
        $reverso=6;
        break;
    case 2:
        $reverso=5;
        break;
    case 3:
        $reverso=4;
        break;
    case 4:
        $reverso=3;
        break;
    case 5:
        $reverso=2;
        break;
    case 6:
        $reverso=1;
        break;
}

echo "Has echo una tirada de dado! El resultado es $dado y el valor de la cara opuesta es $reverso";
