<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="formulario3.php" method="post">
        <label for="nombre">Introduce tu nombre: </label>
        <input type="text" name="nombre"/>
        <br>
        <label for="apellidos">Introduce tus apellidos: </label>
        <input type="text" name="apellidos"/>
        <br>
        <label for="correo">Introduce tu correo electrónico: </label>
        <input type="email" name="correo">
        <br>
        <input type="submit" value="Enviar"/>
    </form>
</body>
</html>

<?php

session_start();

require 'util.php';

save('nombre-completo');
save('primer-password');
save('segundo-password');