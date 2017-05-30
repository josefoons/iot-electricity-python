#!/usr/bin/python3
# _-_coding utf-8 _-_
#    
#        ^
#         |
#
# Indicamos con esa linea que vamos a utilizar Unicode (UTF-8)
# para los mensajes y las variables del programa.

#
# Testing VISA Class
def test_visa():
	try: 
		import visa
		print(" [ Info ] - clase Visa importada con exito")
		rm = visa.ResourceManager()
		rm.list_resources()
		#
		# Aqui aparecera el listado de los diferentes dispositivos.
		#
		# Rellenar las siguientes lineas con la informacion extraida:
		inst = rm.open_resource("Fill in the gaps")
		print(inst.query("*IDN?"))
		
	except Exception as e:
		print(" [ Error ] - VISA - No se ha podido : "+str(e))
		print(" [ Error ] - Compruebe que esta instalado")
		print(" [ Error ] - Run : sudo apt install python3-pyvisa")
		print("")
		print(" [ Error ] - Consulte el Readme.md")


# 
# Testing LALA Class
def test_LALA():
	try:
		print(" [ Info ] - clase LALA importada con exito")
	except Exception as e:
		print(" [ Error ] - LALA - No se ha podido : "+str(e))

#	
# Main
if __name__ == "__main__":
	test_visa()
	test_LALA()
	


