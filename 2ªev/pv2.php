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
        $automatico1=fopen("/etc/bind/zones/db.basetodos.com", "w");
        $automatico2=fopen("/etc/bind/named.conf.local", "w ");
        
$tocho="\$ttl 3600
$_REQUEST[zona].  IN      SOA     sistemas-VirtualBox. $_REQUEST[email]. (
                        1637839298
                        3600
                        600
                        1209600
                        3600 )
$_REQUEST[zona].    IN      NS      sistemas-VirtualBox.
$_REQUEST[name1].  IN  $_REQUEST[reg1]   $_REQUEST[dir1]
$_REQUEST[name2].  IN  $_REQUEST[reg2]   $_REQUEST[dir2]
$_REQUEST[name3].  IN  $_REQUEST[reg3]   $_REQUEST[dir3] 
       ";

        if(isset($_REQUEST['enviar'])) {

            if(($_REQUEST['zona']) !=null) {
            fwrite($automatico2,
                "zone \"$_REQUEST[zona]\" {
                type master;
                file \"/etc/bind/zones/db.basetodos.com\";
                };
            ");
            fclose($automatico2);
            }
            else {
                echo "ERROR: Introduce una zona";
            }
            if ($_REQUEST['name1'] != null && $_REQUEST['name3'] != null && $_REQUEST['name3'] != null ) {
                fputs ($automatico1, $tocho);
                fclose($automatico1);
                shell_exec('echo -e "1234"|sudo systemctl restart bind9');        
                echo " <br> Configuración de DNS cambiada con éxito.";
            }
            else  {
                echo "te faltan datos craaaaack";
            }
        }

        /* Crear un boton para añadir una linea que sea una nueva direccion 
        --> meter un FORM con action "" dentro del FORM con action "procesa,php"
        poner todos las lineas como nu array
        recorrer el array
        escribir en el archivo los arrays
        */  

    ?>
        <br><br><br>
        <a href="v2.php"> aaaaaaaaa </a>
</body>
</html>
