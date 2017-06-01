Requisitos minimos para hacer funcionar:
- SSH activo (raspi-config > interfaces > SSH)
- FTP activo (vsftpd)
- Paquete Debian. ( https://github.com/josefoons/iot-electricity-python/blob/master/DEB/garen-ohmwrecker_0.6_all.deb )
- python3-pip
- libapache2-mod-php5
- mysql-server
- apache2
- php5
- php5-mysql
	
Pasos para preparación:
1. Activamos el SSH
1.1. Activamos el FTP (Opcional)
2. Instalar las dependencias ( sudo apt-get install python3-pip libapache2-mod-php5 mysql-server apache2 php5 php5-mysql )
3. Instalar nuestro deb ( sudo dpkg -i garen-ohmwrecker_0.6_all.deb )
4. Volcar el archivo .sql al mysql-server ( mysql -u root -p < /usr/share/garen-ohmwrecker/db/initial-db.sql )
5. Borrar el index.html ( sudo rm -r /var/www/html/index.html )
6. Reiniciar el servicio apache2 ( sudo service apache2 reload )
7. Reiniciar el servicio garen ( sudo service garen reload )
	
Iniciar el navegador con la IP del dispositivo.

Conexion con UMG511
Entrar en la web: http://IP_RASPBERRY/ip.php .
Introducir la IP del dispositivo UMG511 y un rango de tiempo en segundos.
	
	
