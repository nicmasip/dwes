<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="resultado.php" method="post">
        <label for="coches[]">Escoge una o más opciones: </label>
        <select name="coches[]" id="coches" multiple>
          <option value="volvo">Volvo</option>
          <option value="saab">Saab</option>
          <option value="opel">Opel</option>
          <option value="audi">Audi</option>
        </select>
        <input type="submit" value="Enviar"/>
    </form>
</body>
</html>

<?php

session_start();

require 'util.php';

save('nombre');
save('apellidos');
save('correo');
