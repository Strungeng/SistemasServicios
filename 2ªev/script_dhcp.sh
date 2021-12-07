#!/bin/bash
. variablesEntorno.sh

echo "Instalando DHCP server..."
echo -e "1234\n"|sudo -S  apt install isc-dhcp-server -y
echo "DHCP instalado con éxito."

echo "Procediendo a la configuración."
var=0
config=/etc/dhcp/dhcpd.conf
read -p "Introduce la IP de red del equipo: " ip
read -p "Introduce el rango 1 de direcciones: " rango1
read -p "Introduce el rango 2 de direcciones: " rango2
read -p "Introduce la IP del servidor DNS: " dns
read -p "Introduce la máscara de red: " mask
if [ var=0 ]
then
	echo -e "1234\n"|sudo -S chmod o+w $config
	echo -e "subnet $ip netmask $mask { \n\t range $rango1\t $rango2; \n\t option domain-name-servers $dns; \n }" > $config
	echo "Se ha configurado DHCP"
	echo -e "1234\n"|sudo -S chmod o-w $config
	var=1
fi

echo "Se ha configurado con éxito."
echo "Reiniciando servicio."
echo -e "1234\n"|sudo -S systemctl restart isc-dhcp-server

read -p "¿Desea ver el estado del servicio? (s/n) " respuesta
case $respuesta in
	s)
		echo -e "1234\n"|sudo -S systemctl status isc-dhcp-server
		;;
	n)
		echo "Finalizando script."
		;;
	*)
		echo "ERROR"
		;;
esac
