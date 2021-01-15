<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Formulario en PHP</title>
    </head>
    
    <body>
        <h1>Formulario en PHP</h1>
        
        <form method="post" action="recibir.php">
            <label for="nombre">Nombres</label>
            <input type="text" name="nombre"> <br>
            
            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos"> <br>
            
            <br>
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>