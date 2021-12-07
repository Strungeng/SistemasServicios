<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

        echo "Bienvenido ".$_REQUEST['nombre']." ".$_REQUEST['apellido'].", tienes ".$_REQUEST['edad']." años.";
        echo "1+1";

    ?>
</body>
</html>