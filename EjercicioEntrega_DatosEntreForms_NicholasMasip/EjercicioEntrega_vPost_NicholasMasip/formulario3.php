<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php 
        require 'util.php';
        
        $nombreCompleto = read('nombre-completo');
        $primerPassword = read('primer-password');
        $segundoPassword = read('segundo-password');
        
        $nombre = read('nombre');
        $apellidos = read('apellidos');
        $correo = read('correo');
    ?>
    
    <form action="resultado.php" method="post">
        <input type="hidden" name="nombre-completo" value="<?php echo $nombreCompleto ?>"/>
        <input type="hidden" name="primer-password" value="<?php echo $primerPassword ?>"/>
        <input type="hidden" name="segundo-password" value="<?php echo $segundoPassword ?>"/>
        
        <input type="hidden" name="nombre" value="<?php echo $nombre ?>"/>
        <input type="hidden" name="apellidos" value="<?php echo $apellidos ?>"/>
        <input type="hidden" name="correo" value="<?php echo $correo ?>"/>
        
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