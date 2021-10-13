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
    ?>
    
    <form action="formulario3.php" method="post">
        <input type="hidden" name="nombre-completo" value="<?php echo $nombreCompleto ?>"/>
        <input type="hidden" name="primer-password" value="<?php echo $primerPassword ?>"/>
        <input type="hidden" name="segundo-password" value="<?php echo $segundoPassword ?>"/>
        
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