#!/bin/bash

# Obtengo el numero de lineas que tenemos que recorrer en los tres ficheros.

LINEAS=$(cat "data_511/511_varnames.txt"| wc -l)

echo "{"
echo -e "\tresults : ["

for nlinea in $(seq 1 $LINEAS); do 

	# Gettin values
	CURRENT_VAR="$(sed "${nlinea}q;d" data_511/511_varnames.txt)"
	CURRENT_UNIT="$(sed "${nlinea}q;d" data_511/511_units.txt)"
	CURRENT_NOTE="$(sed "${nlinea}q;d" data_511/511_notes.txt)"

	# Cutrelux json (cutreson)
	echo -e "\t{"
	echo -e "\t \"measure\" : "
	echo -e "\t\t {"
	echo -e "\t\t\t \"id\" : \"${CURRENT_VAR}\" ,"
       	echo -e "\t\t\t \"unit\" : \"${CURRENT_UNIT}\"  , "
	echo -e "\t\t\t \"note\" : \"${CURRENT_NOTE}\""
	echo -e "\t\t } ,"
	echo -e "\t},"	

	sleep 0.5
done


echo "}"

exit 0
