#!/bin/bash
#. variablesEntorno.sh
usuario=/var/datos
backup=/var/backup/
fecha=`date +%Y_%m_%d_%H_%M`
echo "Realizando copia de seguridad"
tar cf $usuario/copias/backup_$fecha.tar ${usuario}/* 2>/dev/null
curl -u userscript:1234 -T ${usuario}/copias/backup_$fecha.tar ftp://192.168.100.1/$backup
echo "Backup finalizado"

echo -e "1234\n" | sudo -S rm ${usuario}/copias/*.tar
