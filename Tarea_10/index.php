<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/index.css">
    <link rel="shortcut icon" href="Imagenes/formulario.png" type="image/x-icon">
    <title>Formulario en PHP</title>
</head>
<body>
    <header class="header">
        <a href="https://www.unam.mx/"><h2 id="UNAM">UNAM</h2></a>
        <a href="index.php"><h2 id="index">Ir al formulario</h2></a>
        <a href="https://www.aragon.unam.mx/"><h2 id="aragon">FES Aragon</h2></a>
    </header>
    <h1 id="titulo">Formulario en PHP</h1>
    <br>
    <form action="registro.php" method="get" class="formulario">
        <label for="name" class="nom_campo">Nombre:</label>
        <input type="text" id="name" required name="name" class="campo"><br><br>
        
        <label for="age" class="nom_campo">Edad:</label>
        <input type="number" id="age" required name="age" class="campo"><br><br>
        
        <label for="email" class="nom_campo">Correo electrónico:</label>
        <input type="email" id="email" required name="email" class="campo"><br><br>
        
        <label for="password" class="nom_campo">Contraseña:</label>
        <input type="password" id="password" required name="password" class="campo"><br><br>
        
        <input type="submit" value="Enviar" id="boton">
    </form>
    <footer class="footer">
        <p id="texto">Página creada para la Tarea 10 de Programación Web II</p>
    </footer>
</body>
</html>