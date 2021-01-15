<?php

//Constantes
//No pueden variar

define('nombre', 'Ronnie Santoyo');
define('email', 'gerson.362@gmail.com');

echo '<h1>'.nombre.'</h1>';
echo '<h2>'.email.'</h2>';

//Constantes predefinidas
function holaMundo() {
    echo '<p>Hola</p>';
    echo '<p>'. __FUNCTION__. '</p>';  //Función predefinida
}

holaMundo();

echo '<p>'. \PHP_OS .'</p>';    //Función predefinida - ver Sistema Operativo

?>