#!/bin/bash

while /bin/true; do


	# Obtenemos los valores
	./511-shell-simplescript.sh last.json
	
	# Generamos el csv con los valores
	./python-garen.py last.json ./data_511/511_json_notes.json -c

	# Despues de ejecutar esto, queda un fichero que se llama: 
	# temporal_csvfile.csv
	# que ser machacado con los nuevos valores en 10 segundos *_*
	# asi que mas vale que lo guardeis a buen recaudo.

	# Queda llamar al scritp que habeis creado y llenar la base de datos 
	# con los valores del csv
	# RELLENAR AQUI CON VUESTRO SCRIPT

	./insert_command_line.py temporal_csvfile.csv 	
	
	sleep 10

done


# OS FALTARA HACER UN SCRIPT EN EL CRON QUE COMPRUEBE QUE ESTE ESTA EJECUTANDOSE
# Ese si que molaria que se ejecutara cada 5 minutos
# si no esta vivo, ese script debe encargarse de revivir a este (volviendolo a lanzar)
#


# Una vez tengamos esto, ya solo queda hacer la consulta en PHP  de la vbase de datos entre fechas 
# y darle todos los csv que han salido  esos dias.


