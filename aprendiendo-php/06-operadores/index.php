<?php

//Operadores aritméticos
$numero1 = 55;
$numero2 = 33;

echo 'Suma: ' . ($numero1 + $numero2) . '<br>';
echo 'Resta: ' . ($numero1 - $numero2) . '<br>';
echo 'Multiplicación: ' . ($numero1 * $numero2) . '<br>';
echo 'División: ' . ($numero1 / $numero2) . '<br>';
echo 'Módulo: ' . ($numero1 % $numero2) . '<br>';

//Operadores de incremento y decremento
$year = 2020;

echo '<h1>' . $year . '</h1>';

$year++;    //Primero asigna y luego incrementa
echo '<h1>' . $year . '</h1>';

$year--;    //Primero asigna y luego decrementa
echo '<h1>' . $year . '</h1>';

++$year;    //Primero incrementa y luego asigna
echo '<h1>' . $year . '</h1>';

--$year;    //Primero decrementa y luego asigna
echo '<h1>' . $year . '</h1>';

//Operadores de asignación
$edad = 55;

echo $edad . '<br>';
echo ($edad = $edad + 5);

?>