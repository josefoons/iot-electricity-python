#!/usr/bin/python3
#
#
# Este script hace:
# --
# -- RELLENAR AQUI 
#

import json
import requests
import sys
import urllib.request
import os
import MySQLdb

# Algunas variables que se utilizan en 
# en Garen
confDir="conf.d/"
rutaJSON=""
rutaNotesJSON=""


def die(msg):
	print(" * [ ERROR ] : "+msg)
	print(" * [ USAGE ] :  python-garen.py IP [MODELO] -c")
	sys.exit(1)


def store_in_db(smeasure):
	# Open database connection
	db = MySQLdb.connect("localhost","user1","user1","umg511" )

	# prepare a cursor object using cursor() method
	cursor = db.cursor()

	# Prepare SQL query to INSERT a record into the database.
	sql = ("""INSERT INTO umg511_tbl (umg511_text) VALUES (%s)""", smeasure)

	try:
		# Execute the SQL command
		cursor.execute(*sql)
		# Commit your changes in the database
		db.commit()
	except:
		# Rollback in case there is any error
		db.rollback()

	# disconnect from server
	db.close()



def lastreplace(s,old,new,ocurrence):
	li = s.rsplit(old, ocurrence)
	return new.join(li)


def get_list_of_variables(model):
	# Vamos a generar una variable que contendra el listado de las variables de la Janitza-511
	# de tal manera el codigo quede lo mas limpio posible
	if(model == "Janitza511"):
		conffile=open(confDir+model+".conf")
		confstring=conffile.read().replace("\n",",")
		confstring=lastreplace(confstring,","," ",1)
		return confstring


def get_json(url,model):
	print(" * [ JSON ] : Getting values from URL ")

	var_model=get_list_of_variables(model)
	url="http://"+url+"/json.do?"+var_model

	r = urllib.request.urlopen(url)
	return json.loads(r.read().decode())
	

def do_csv(jmeasures,model):
	
	# Testing with name definitions
	fnotes = open(confDir+model+".definition")
	jnotes = json.load(fnotes)

	#cmeasures=open("temporal_csvfile.csv","w")
	#cmeasures.write("Variable,Medida,Unidad,Descripcion")
	#cmeasures.write("\n")
	
	smeasures=""
	for key, value in jmeasures.items():
		#print("* Key -> " + str(key) + "\n\t* Values -> "+str(value))
		linea = str(key)+","+str(value[0])+","+str(value[1])+","
		try:
			#print("\t* Notes -> "+jnotes[key])
			linea= linea +str(jnotes[key]).replace(",","-").replace(";","-")
		except Exception as e:
			#print("\t* Notes -> Vacio")
			linea= linea +"None"
		#cmeasures.write(linea)
		#cmeasures.write("\n")
		smeasures=smeasures+linea+"\n"

	# Aqui FILL IN THE GAPS
	


def do_sanity_checks():
	if len(sys.argv) != 3:
		die(" Incorrect number of parameters")
	

#
# MAIN
#

if __name__ == "__main__":
	do_sanity_checks()

	# Tal vez aqui si os sentis con ganas....
	model="Janitza511"
	variable_list = get_list_of_variables(model)
	
	# Debug only
	jmeasures = get_json(sys.argv[1],model)
	#auxf = open("last.json")
	#jmeasures = json.load(auxf)

	do_csv(jmeasures,model)





