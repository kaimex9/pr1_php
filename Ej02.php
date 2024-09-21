<?php
echo "<h1>Ejercicio 2</h1><br>";
echo "Se declara una variable con un valor numérico. Utilizando una estructura switch/case
genera un mensaje que indique a qué día de la semana se corresponde.<br>
a. En caso de que no sea un valor entre el 1 y el 7 indica que no se corresponde
con ningún día. <br><br>";

$num = rand(1, 10);

switch ($num) {
    case 1:
        echo "Dia $num: Lunes";
        break;
    case 2:
        echo "Dia $num: Martes";
        break;
    case 3:
        echo "Dia $num: Miercoles";
        break;
    case 4:
        echo "Dia $num: Jueves";
        break;
    case 5:
        echo "Dia $num: Viernes";
        break;
    case 6:
        echo "Dia $num: Sabado";
        break;
    case 7:
        echo "Dia $num: Domingo";
        break;
    default:
        echo "El numero $num no corresponde a ningun dia";
        break;
}