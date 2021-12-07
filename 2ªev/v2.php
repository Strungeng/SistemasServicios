<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="pv2.php" method="post">
    Introduce datos para cambiar la configuración DNS: <br> <br>

    Nombre de zona:
    <input type="text" name="zona">           
    Email: <input type="text" name="email"> <br>
    <br>
    Maquinas: <br>
    
    <table> <tr><td> Nombre </td> <td> Tipo </td><td> Direccion</td></tr>

    <tr><td>
    <input type="text" name="name1">
    </td><td>
    <select name="reg1">
        <option value="A"> A </option>
        <option value="NS"> NS </option>
        <option value="CNAME"> CNAME</option>
    </select>
    </td><td>
    <input type="text" name="dir1">
    </td></tr>
    <tr><td>
    <input type="text" name="name2">
    </td><td>
    <select name="reg2">
        <option value="A"> A </option>
        <option value="NS"> NS </option>
        <option value="CNAME"> CNAME</option>
    </select>
    </td><td>
    <input type="text" name="dir2">
    </td></tr>
    <tr><td>
    <input type="text" name="name3">
    </td><td>
    <select name="reg3">
        <option value="A"> A </option>
        <option value="NS"> NS </option>
        <option value="CNAME"> CNAME</option>
    </select>
    </td><td>
    <input type="text" name="dir3">
    </td></tr>
    <tr><td>
    <input type="submit" name="enviar" value="Enviar">
    </tr></td>
    </table>

    
    </form>
</body>
</html>