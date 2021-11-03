<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="" method="post">
    
    Nombre:
    <input type="text" name="nombre" placeholder="Nombre">
    <br>
    Sexo:
    <input type="radio" name="sexo" value="h"> Hombre
    <input type="radio" name="sexo" value="m"> Mujer
    <br>
    Aficiones:
    <input type="checkbox" name="aficiones[]" value="1">Lectura
    <input type="checkbox" name="aficiones[]" value="2">Escritura
    <input type="checkbox" name="aficiones[]" value="3">Dormición
    <input type="checkbox" name="aficiones[]" value="4">Morición

    <br>
    <input type="submit" name="enviar" value="Enviar">
    <br><br>
    </form>
    <?php
        if(isset($_REQUEST['nombre'])) {
            echo "Eres $_REQUEST[nombre]<br>";
        }
        if(isset($_REQUEST['sexo'])){
           echo "Tu sexo es $_REQUEST[sexo]<br>";
        }

        if(isset($_REQUEST['enviar'])) {
            if (!empty($_REQUEST['aficiones'])) {
                foreach ($_REQUEST['aficiones'] as $selected) {
                    echo "Te gustan la opcion $selected <br>";
                }
            }
        }
    ?>


</body>
</html>