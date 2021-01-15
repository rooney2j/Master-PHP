<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Imprimir por pantalla - Master en PHP</title>
    </head>

    <body>
        <h1>Master en PHP - Ronnie Santoyo</h1>

        <?="Bienvenido al curso más grande de PHP"?>
        <?="<br>Otra linea de texto"?>

        <?php
            echo "<h3>Listado de videojuegos:</h3>";
            echo "<ul>"
                ."<li>GTA</li>"
                ."<li>Pro Evolution Soccer</li>"
                ."<li>Mario Futbol</li>"
                ."</ul>";
            echo "<p>Probando"." concatenación "."- "."Ahora</p>";
        ?>
    </body>

</html>
