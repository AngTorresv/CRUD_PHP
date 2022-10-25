import pyodbc

try:
    con = pyodbc.connect('DRIVER={SQL SERVER};SERVER=DESKTOP-58KHLR8;DATABASE=Ejercicio;Trusted_Connection=yes;')
    print('conexion exitosa')
 
 
except Exception as e:
    print(e)

